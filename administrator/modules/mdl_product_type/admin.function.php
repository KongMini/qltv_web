<?php
class Model
{
	static function product_type_view_link($row)
	{
		$str = '';
		if ($row->status == 'active') {
			$str .= '<a onclick="update_value_by_id(\'e4_term_taxonomy\', \'status\', \'' . $row->id . '\', \'deactive\');" data-toggle="tooltip" href="javascript:void(0);" title="Nhấn để ẩn"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;';
		} else {
			$str .= '<a onclick="update_value_by_id(\'e4_term_taxonomy\', \'status\', \'' . $row->id . '\', \'active\');" data-toggle="tooltip" href="javascript:void(0);" title="Nhấn để hiển thị"><i class="fa fa-eye-slash text-black"></i></a>&nbsp;&nbsp;';
		}
		$str .= '<a href="javascript:void(0);" data-toggle="modal" data-target="#showCNTT"  onclick="showCNTT(\'' . $row->id . '\',\'ajax/product_type/ajax.product_type_get.php\')"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Cập nhật thông tin"></i></a>&nbsp;&nbsp;';
		if ($row->submenu > 0) {
			$str .= '<a data-toggle="tooltip" href="javascript:void(0);" title="Không thể xóa menu khi có chứa menu con"><i class="fa fa-trash text-black"></i></a>&nbsp;&nbsp;';
		} else {
			$str .= '<a href ="?module=product_type&task=product_type_delete&id=' . $row->id . '" onclick="return confirmAction();"><i class="fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';
		}

		return $str;
	}

	static function product_type_view()
	{
		View::product_type_view();
	}

	static function product_type_add()
	{
		global $database;
		global $ariacms;
		if ($_REQUEST["submit"] == "product_type_add") {
			$row = new stdClass;
			$row->id 		= NULL;
			$row->taxonomy = 'product_type';
			foreach ($_POST as $key => $value) {
				if ($key != "submit" && strlen(strstr($key, 'meta_')) == 0) {
					if ($key != 'url_part') {
						$row->$key = $value;
					} else {
						$row->$key = ($value == '') ? $ariacms->utf8ToUrl($_POST['title_vi']) : $value;
					}
				}
			}
			if ($term_id = $database->insertObject('e4_term_taxonomy', $row, 'id')) {
				$meta = new stdClass;
				foreach ($_POST as $key => $value) {
					if (strlen(strstr($key, 'meta_')) > 0 && $value != '') {
						$meta->meta_id = NULL;
						$meta->term_id = $term_id;
						$meta->meta_key = $key;
						$meta->meta_value = $value;
						$database->insertObject("e4_term_meta", $meta, "meta_id");
					}
				}
				$ariacms->redirect("", "javascript:history.back()");
			} else {
				echo $database->stderr();
			}
		} else {
			$ariacms->redirect("", "javascript:history.back()");
		}
	}

	static function product_type_edit()
	{
		global $database;
		global $ariacms;
		if ($_REQUEST["submit"] == "product_type_edit") {
			$row = new stdClass;
			$row->id 		= $_REQUEST["id"];
			foreach ($_POST as $key => $value) {
				if ($key != "submit" && strlen(strstr($key, 'meta_')) == 0) {
					if ($key != 'url_part') {
						$row->$key = $value;
					} else {
						$row->$key = ($value == '') ? $ariacms->utf8ToUrl($_POST['title_vi']) : $value;
					}
				}
			}
			if ($database->updateObject('e4_term_taxonomy', $row, 'id')) {
				$ariacms->delete('e4_term_meta', 'term_id=' . $_REQUEST["id"]);
				$meta = new stdClass;
				foreach ($_POST as $key => $value) {
					if (strlen(strstr($key, 'meta_')) > 0 && $value != '') {
						$meta->meta_id = NULL;
						$meta->term_id = $_REQUEST["id"];
						$meta->meta_key = $key;
						$meta->meta_value = $value;
						$database->insertObject("e4_term_meta", $meta, "meta_id");
					}
				}
				$ariacms->redirect("", "javascript:history.back()");
			} else {
				echo $database->stderr();
			}
		} else {
			$ariacms->redirect("", "javascript:history.back()");
		}
	}
	static function product_type_delete()
	{
		global $ariacms;
		$id	= @$_REQUEST["id"];
		$ariacms->delete('e4_term_taxonomy', 'id=' . $id);
		$ariacms->delete('e4_term_relationships', 'term_taxonomy_id=' . $id );
		$ariacms->redirect("", "javascript:history.back()");
	}

	static function printMenuAction($table, $parent_id, $str, $taxonomy)
	{
		global $database;
		$str .= "- - ";
		$parent_id != '' ? $parent_id = $parent_id : $parent_id = 0;
		$where = " WHERE a.parent = " . $parent_id . " AND taxonomy = '" . $taxonomy . "'";
		$group = " GROUP BY a.id ";
		$order = " ORDER BY a.order ";
		$parent_id != '' ? $where .= " AND a.parent = " . $parent_id : '';
		$query = "SELECT a.*, count(b.parent) submenu FROM " . $table . " a 
			LEFT JOIN (SELECT parent FROM " . $table . " WHERE taxonomy = '" . $taxonomy . "' ) b ON a.id = b.parent
				" . $where . $group . $order;
		$database->setQuery($query);
		$term_taxonomy = $database->loadObjectList();
		foreach ($term_taxonomy as $product_type) {
			if ($product_type->submenu > 0) {
?>
				<tr class="<?php echo ($parent_id == 0) ? 'bg-gray-light' : ''; ?> valign-middle">
					<td><?php echo $str . $product_type->title_vi ?></td>
					<td><?php echo $str . $product_type->title_en ?></td>
					<td><?php echo $product_type->url_part ?></td>
					<td><?php echo $product_type->count ?></td>

					<td>
						<input type="number" class="form-control" name="order" id="order" value="<?php echo  $product_type->order ?>" onchange="update_value_by_id('<?php echo $table ?>', 'order', '<?php echo $product_type->id ?>', this.value);" />
					</td>
					<td><?php echo  Model::product_type_view_link($product_type) ?></td>
				</tr>
			<?php
				Model::PrintMenuAction($table, $product_type->id, $str, $taxonomy);
			} else {
			?>
				<tr class="<?php echo ($parent_id == 0) ? 'bg-gray-light' : ''; ?> valign-middle">
					<td><?php echo $str . $product_type->title_vi ?></td>
					<td><?php echo $str . $product_type->title_en ?></td>
					<td><?php echo $product_type->url_part ?></td>
					<td><?php echo $product_type->count ?></td>

					<td>
						<input type="number" class="form-control" name="order" id="order" value="<?php echo  $product_type->order ?>" onchange="update_value_by_id('<?php echo $table ?>', 'order', '<?php echo $product_type->id ?>', this.value);" />
					</td>
					<td><?= Model::product_type_view_link($product_type) ?></td>
				</tr>
<?php
			}
		}
	}
}
?>