<?php
class Model
{
	static function cart_view_link($row)
	{
		$str = '';
		$str .= '<a href ="?module=cart&task=cart_edit&id=' . $row->id . '" ><i class="fa fa-pencil-square-o" data-toggle="tooltip"  title="Chi tiết đơn hàng"></i></a>&nbsp;&nbsp;';
		$str .= '<a href ="?module=cart&task=cart_delete&id=' . $row->id . '" onclick="return confirmAction();"><i class="fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';

		return $str;
	}
	static function cart_view()
	{
		global $database;
		global $ariacms;
		$curPg = ($_REQUEST["curPg"] > 0) ? $_REQUEST["curPg"] : 1;
		$maxRows = ($_REQUEST["page_size"] > 0) ? $_REQUEST["page_size"] : $ariacms->web_information->admin_per_page;
		$curRow = ($curPg - 1) * $maxRows;
		$limit = " LIMIT " . $curRow . "," . $maxRows . " ";

		$query = "SELECT a.time_update, b.* FROM `e4_muonsach` a
                LEFT JOIN e4_users b ON a.id_sinhvien = b.id
                GROUP BY a.id_sinhvien 
                ORDER BY time_update ASC " . $limit;
		$database->setQuery($query);
		$carts = $database->loadObjectList();

		$query = "SELECT b.id FROM `e4_muonsach` a
                LEFT JOIN e4_users b ON a.id_sinhvien = b.id
                GROUP BY a.id_sinhvien 
                ORDER BY time_update DESC";
		$database->setQuery($query);
		$totalRows = $database->loadObjectList();

		View::cart_view($carts, count($totalRows), $maxRows, $curPg);
	}

	static function cart_add(){
        global $database;
        global $ariacms;
        if($_POST["submitCart"]) {
            $id_sinhvien = $_REQUEST['id_sinhvien'];
            $sach = $_REQUEST['id_sach'];
            $time = time();
            foreach ($sach as $value){
                $row = new stdClass;
                $row->id = null;
                $row->id_sinhvien = $id_sinhvien;
                $row->id_sach = $value['id_sach'];
                $row->soluong = $value['soluong'];
                $row->time_update = $time;
                $database->insertObject('e4_muonsach', $row, 'id');
            }
            $ariacms->redirect("Tạo mới thành công", "index.php?module=cart");
        }else{
            $query = "SELECT * FROM `e4_users`  WHERE user_type = 'public' ORDER BY id DESC";
            $database->setQuery($query);
            $student = $database->loadObjectList();

            View::cart_add($student);

        }
    }
	static function cart_edit()
	{
		global $database;
		global $ariacms;
		switch ($_POST["submitCart"]) {
			case "cart_edit":
				$row = new stdClass;
				$row->id 		= $_REQUEST["id"];
				foreach ($_POST as $key => $value) {
					if ($key != "submitCart")
						$row->$key = $value;
				}
				$row->date_updated = time();
				if ($database->updateObject('e4_order', $row, 'id'))
					$ariacms->redirect("", "javascript:history.back()");
				else echo $database->stderr();
				break;

			case "cart_edit_detail":
				$id_detail =  $_REQUEST["id_detail"];
				if ($id_detail > 0) {
					$row = new stdClass;
					$row->id 		= $id_detail;
					foreach ($_POST as $key => $value) {
						if ($key != "submitCart" && $key != "submitDetail")
							$row->$key = $value;
					}
					$row->date_updated = time();
					if ($database->updateObject('e4_order_detail', $row, 'id'))
						$ariacms->redirect("", "javascript:history.back()");
					else echo $database->stderr();
				}
				break;

			default:
				$query = "SELECT a.*, SUM(b.quantity * b.price) total FROM e4_order a JOIN e4_order_detail b ON a.id = b.order_id 
			WHERE a.id = " . $_REQUEST["id"] . " GROUP BY a.id ";
				$database->setQuery($query);
				$detail = $database->loadRow();

				$query = "SELECT a.*, b.title_vi, b.image, b.url_part FROM e4_order_detail a LEFT JOIN e4_posts b ON a.product_id = b.id
		 WHERE a.order_id = " . $_REQUEST["id"];
				$database->setQuery($query);
				$products = $database->loadObjectList();

				View::cart_edit($detail, $products);
				break;
		}
	}
	static function cart_delete()
	{
		global $ariacms;
		$id	= $_REQUEST["id"];
		$id_detail = $_REQUEST["id_detail"];
		if ($id) {
			$ariacms->delete('e4_order', 'id=' . $id);
			$ariacms->delete('e4_order_detail', 'order_id=' . $id);
		}
		if ($id_detail) {
			$ariacms->delete('e4_order_detail', 'id=' . $id_detail);
		}
		$ariacms->redirect("", "javascript:history.back()");
	}
}
