<?php
class Model
{
	static function product_view_link($row)
	{
		$str = '';
		$str .= '<a href ="?module=product&task=product_edit&id=' . $row->id . '" ><i class="fa fa-pencil-square-o" data-toggle="tooltip"  title="Cập nhật thông tin"></i></a>&nbsp;&nbsp;';

		$str .= '<a href ="?module=product&task=product_delete&id=' . $row->id . '" onclick="return confirmAction();"><i class="fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';
		return $str;
	}

	static function product_view()
	{
		global $database;
		global $ariacms;
		$where = " WHERE a.post_type = 'product' ";
		$order = ' order by a.order asc, a.id desc';

		$curPg = ($_REQUEST["curPg"] > 0) ? $_REQUEST["curPg"] : 1;
		$maxRows = ($_REQUEST["page_size"] > 0) ? $_REQUEST["page_size"] : $ariacms->web_information->admin_per_page;
		$curRow = ($curPg - 1) * $maxRows;
		$limit = " LIMIT " . $curRow . "," . $maxRows . " ";

		/** Search by e4_posts */
		$keysearch = trim(strtolower($_REQUEST['keysearch']));
		$where .= (trim($_REQUEST["keysearch"]) != '') ? " AND (LOWER(a.title_vi) LIKE '%$keysearch%' OR LOWER(a.title_en) LIKE '%$keysearch%')" : '';
		$where .= ($_REQUEST['user_created'] > 0) ? " AND a.user_created = " . $_REQUEST['user_created'] : "";
		$where .= (trim($_REQUEST['post_status']) != '') ? " AND a.post_status = '" . $_REQUEST['post_status'] . "'" : "";
		/** Search by Taxomnomy */
		$category = ($_REQUEST['category'] > 0) ? " AND t1.term_taxonomy_id = " . $_REQUEST['category'] : "";
		$join_category = ($_REQUEST['category'] > 0) ? " " : " LEFT ";
		$product_tags = ($_REQUEST['product_tags'] > 0) ? " AND t1.term_taxonomy_id = " . $_REQUEST['product_tags'] : "";
		$join_tags = ($_REQUEST['product_tags'] > 0) ? " " : " LEFT ";

		/** Filter price_status */
		$where .= ($_REQUEST['price_status'] != '') ? " AND a.price_status = '" . $_REQUEST['price_status'] . "'" : "";
		/** End search */
		$query = "SELECT a.*, b.fullname, c.category, d.tags
		FROM e4_posts a
			JOIN e4_users b ON a.user_created = b.id 
			$join_category JOIN ( 
				SELECT t1.object_id, GROUP_CONCAT(' ', t2.title_vi) AS category
				FROM e4_term_relationships t1 
				 JOIN e4_term_taxonomy t2 ON t1.term_taxonomy_id = t2.id AND t2.taxonomy = 'product_category' $category GROUP BY t1.object_id
				) c ON a.id = c.object_id
			$join_tags JOIN ( 
				SELECT t1.object_id, GROUP_CONCAT(' ', t2.title_vi) AS tags
				FROM e4_term_relationships t1 
				 JOIN e4_term_taxonomy t2 ON t1.term_taxonomy_id = t2.id AND t2.taxonomy = 'product_tags' $product_tags GROUP BY t1.object_id
				) d ON a.id = d.object_id
		" . $where . $order . $limit;
		$database->setQuery($query);
		$product = $database->loadObjectList();

		if ($_REQUEST['input_submit_search']) {
			$query = "SELECT COUNT(*) as total
				FROM e4_posts a
					JOIN e4_users b ON a.user_created = b.id 
					$join_category JOIN ( 
						SELECT t1.object_id
						FROM e4_term_relationships t1 
						WHERE 1 = 1 $category GROUP BY t1.object_id
						) c ON a.id = c.object_id
					$join_tags JOIN ( 
						SELECT t1.object_id
						FROM e4_term_relationships t1 
						WHERE 1 = 1 $product_tags GROUP BY t1.object_id
						) d ON a.id = d.object_id
				" . $where . $order;
		} else {
			$query = "SELECT COUNT(*) total FROM e4_posts WHERE post_type = 'product'";
		}
		$database->setQuery($query);
		$totalRows = $database->loadRow();

		$query = "SELECT a.id, a.fullname, a.status_public 
				FROM e4_users a 
				WHERE a.publish = 1 
				ORDER BY a.status_public, a.fullname";
		$database->setQuery($query);
		$users = $database->loadObjectList();

		$query = "SELECT a.*, count(b.parent) sub  FROM e4_term_taxonomy a 
			LEFT JOIN (SELECT parent FROM e4_term_taxonomy) b ON a.id = b.parent
			WHERE a.status = 'active' 
			GROUP BY a.id
		order by a.taxonomy, a.parent, a.order ";
		$database->setQuery($query);
		$taxonomies = $database->loadObjectList();

		View::product_view($product, $totalRows['total'], $maxRows, $curPg, $users, $taxonomies);
	}

	static function product_add()
	{
		global $database;
		global $ariacms;
		if ($_POST["submit"] == "product_add") {
			$taxonomy = $_REQUEST["taxonomy"];
			unset($_REQUEST["taxonomy"]);
			$user_created = $_REQUEST["user_created"];
			unset($_REQUEST["user_created"]);
			$imagelist = $_REQUEST['imagelist'];
			unset($_REQUEST["imagelist"]);

			$post_created = $_REQUEST["post_created"];
			unset($_POST["post_created"]);

			$row = new stdClass;
			$row->id 		= NULL;
			if ($post_created) {
				$row->post_created = $ariacms->dateToUnix($post_created);
			} else {
				$row->post_created = time();
			}
			$row->user_created = ($user_created > 0) ? $user_created : $_SESSION["user"]['id'];
			$row->post_modified = time();
			$row->user_modified = $_SESSION["user"]['id'];
			$row->post_type = 'product';
			foreach ($_POST as $key => $value) {
				if ($key != "submit" && strlen(strstr($key, 'meta_')) == 0) {
					if ($key != 'url_part') {
						$row->$key = $value;
					} else {
						$row->$key = ($value == '') ? $ariacms->utf8ToUrl($_POST['title_vi']) : $value;
					}
				}
			}
			if ($post_id = $database->insertObject('e4_posts', $row, 'id')) {
				$meta = new stdClass;
				foreach ($_POST as $key => $value) {
					if (strlen(strstr($key, 'meta_')) > 0 && $value != '') {
						$meta->meta_id = NULL;
						$meta->post_id = $post_id;
						$meta->meta_key = $key;
						$meta->meta_value = $value;
						$database->insertObject("e4_posts_meta", $meta, "meta_id");
					}
				}
				$object = new stdClass;
				foreach ($taxonomy as $key => $value) {
					$object->object_id = $post_id;
					$object->term_taxonomy_id = $value;
					$object->object_type = 'product';
					$database->insertObject("e4_term_relationships", $object, "object_id");
					/** Update count for term_taxonomy when post created */
					$query = "UPDATE e4_term_taxonomy SET COUNT = (SELECT COUNT(*) total FROM e4_term_relationships 
					WHERE term_taxonomy_id = " . $value . " AND object_type = 'product') WHERE id = " . $value;
					$database->setQuery($query);
					$database->query();
				}

				/** Insert related image list for product */
                foreach ($imagelist as $key => $image){
                    $query = "INSERT INTO `e4_posts_image`(`object_id`, `image_link`, `order`, `color`) VALUES (" . $post_id. ",'$image[0]',$key, $image[1])";
                    $database->setQuery($query);
                    $database->query();
                }

				$ariacms->redirect("Tạo mới thành công", "index.php?module=product");
			} else {
				echo $database->stderr();
			}
		} else {
			$query = "SELECT a.*, count(b.parent) sub FROM e4_term_taxonomy a 
				LEFT JOIN (SELECT parent FROM e4_term_taxonomy ) b ON a.id = b.parent 
				GROUP BY a.id ORDER BY a.order ";
			$database->setQuery($query);
			$taxonomies = $database->loadObjectList();

			$query = "SELECT a.id, a.fullname, a.status_public 
				FROM e4_users a 
				WHERE a.publish = 1 
				ORDER BY a.status_public, a.fullname";
			$database->setQuery($query);
			$users = $database->loadObjectList();
			View::product_add_view($taxonomies, $users);
		}
	}

	static function product_edit()
	{
		global $database;
		global $ariacms;
		if ($_REQUEST["submit"] == "product_edit") {
			$taxonomy = $_REQUEST["taxonomy"];
			unset($_REQUEST["taxonomy"]);
			$user_created = $_REQUEST["user_created"];
			unset($_REQUEST["user_created"]);
			$imagelist = $_REQUEST['imagelist'];
			unset($_REQUEST["imagelist"]);

			$post_created = $_REQUEST["post_created"];
			unset($_POST["post_created"]);

			$row = new stdClass;
			$row->id 		= $_GET['id'];

			if ($post_created) {
				$row->post_created = $ariacms->dateToUnix($post_created);
			}
			
			$row->user_created = ($user_created > 0) ? $user_created : $_SESSION["user"]['id'];
			$row->post_modified = time();
			$row->user_modified = $_SESSION["user"]['id'];
			foreach ($_POST as $key => $value) {
				if ($key != "submit" && strlen(strstr($key, 'meta_')) == 0) {
					if ($key != 'url_part') {
						$row->$key = $value;
					} else {
						$row->$key = ($value == '') ? $ariacms->utf8ToUrl($_POST['title_vi']) : $value;
					}
				}
			}
			if ($database->updateObject('e4_posts', $row, 'id')) {
				$ariacms->delete('e4_posts_meta', 'post_id=' . $_REQUEST["id"]);
				$meta = new stdClass;
				foreach ($_POST as $key => $value) {
					if (strlen(strstr($key, 'meta_')) > 0 && $value != '') {
						$meta->meta_id = NULL;
						$meta->post_id = $_REQUEST["id"];
						$meta->meta_key = $key;
						$meta->meta_value = $value;
						$database->insertObject("e4_posts_meta", $meta, "meta_id");
					}
				}
				$ariacms->delete('e4_term_relationships', 'object_id=' . $_REQUEST["id"] . ' AND object_type = "product" ');
				$object = new stdClass;
				foreach ($taxonomy as $key => $value) {
					$object->object_id = $_REQUEST["id"];
					$object->term_taxonomy_id = $value;
					$object->object_type = 'product';
					$database->insertObject("e4_term_relationships", $object, "object_id");

					$query = "UPDATE e4_term_taxonomy SET COUNT = (SELECT COUNT(*) total FROM e4_term_relationships 
					WHERE term_taxonomy_id = " . $value . " AND object_type = 'product') WHERE id = " . $value;
					$database->setQuery($query);
					$database->query();
				}
				/** Insert related image list for product */
				$ariacms->delete('e4_posts_image', 'object_id=' . $_REQUEST["id"]);

                foreach ($imagelist as $key => $image){
                    $query = "INSERT INTO `e4_posts_image`(`object_id`, `image_link`, `order`, `color`) VALUES (" . $_REQUEST['id'] . ",'$image[0]',$key, $image[1])";
                    $database->setQuery($query);
                    $database->query();
                }

				$ariacms->redirect("Cập nhật thành công", "javascript:history.back();");
			} else {
				echo $database->stderr();
			}
		} else {
			$id = $_REQUEST['id'];
			$query = "SELECT a.*, b.term_taxonomy_id_list FROM e4_posts a 
			LEFT JOIN ( 
				SELECT t1.object_id, GROUP_CONCAT(t1.term_taxonomy_id) AS term_taxonomy_id_list
				FROM e4_term_relationships t1 
				LEFT JOIN e4_term_taxonomy t2 ON t1.term_taxonomy_id = t2.id GROUP BY t1.object_id
				) b ON a.id = b.object_id
			WHERE a.id = $id";
			$database->setQuery($query);
			$product_detail = $database->loadRow();

			$query = "SELECT * FROM e4_posts_meta WHERE post_id = $id";
			$database->setQuery($query);
			$term_metas = $database->loadObjectList();

			foreach ($term_metas as $term_meta) {
				$product_detail['meta']->{$term_meta->meta_key} = $term_meta->meta_value;
			}

			$query = "SELECT a.*, count(b.parent) sub FROM e4_term_taxonomy a 
			LEFT JOIN (SELECT parent FROM e4_term_taxonomy ) b ON a.id = b.parent 
			GROUP BY a.id ORDER BY a.order ";
			$database->setQuery($query);
			$taxonomies = $database->loadObjectList();

			$term_taxonomy_id_list = explode(",", $product_detail['term_taxonomy_id_list']);

			$query = "SELECT a.id, a.fullname, a.status_public 
			FROM e4_users a 
			WHERE a.publish = 1 
			ORDER BY a.status_public, a.fullname";
			$database->setQuery($query);
			$users = $database->loadObjectList();

			$query = "SELECT a.*, b.fullname FROM e4_posts a 
				JOIN e4_users b ON a.user_created = b.id
			WHERE a.post_type = 'product' AND a.post_status = 'active' AND a.id IN (" . $product_detail['meta']->meta_list_related_product . ")
			order by a.id desc ";
			$database->setQuery($query);
			$products = $database->loadObjectList();

			$images = $ariacms->selectAll('e4_posts_image', 'object_id=' . $id, '');
			View::product_edit_view($taxonomies, $users, $term_taxonomy_id_list, $product_detail, $products, $images);
		}
	}
	static function product_delete()
	{
		global $ariacms;
		global $database;
		$id	= $_REQUEST["id"];
		$ariacms->delete('e4_posts', 'id=' . $id);
		$ariacms->delete('e4_posts_meta', 'post_id=' . $id);
		$taxonomies = $ariacms->selectAll('e4_term_relationships', 'object_id=' . $id . ' AND object_type="product" ', '');

		$ariacms->delete('e4_posts_image', 'object_id=' . $id);
		$ariacms->delete('e4_term_relationships', 'object_id=' . $id . ' AND object_type="product" ');
		foreach ($taxonomies as $taxonomy) {
			$query = "UPDATE e4_term_taxonomy SET count = (SELECT COUNT(*) total FROM e4_term_relationships 
			WHERE term_taxonomy_id = " . $taxonomy->term_taxonomy_id . " AND object_type = 'product') WHERE id = " . $taxonomy->term_taxonomy_id;
			$database->setQuery($query);
			$database->query();
		}
		
		$ariacms->redirect("", "javascript:history.back()");
	}
}
