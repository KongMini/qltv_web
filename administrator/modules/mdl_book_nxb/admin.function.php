<?php
class Model
{
	static function book_nxb_view_link($row)
	{
		$str = '';
		$str .= '<a href ="?module=book_nxb&task=book_nxb_edit&id=' . $row->id . '" ><i class="font-size-24 fa fa-pencil-square-o" data-toggle="tooltip"  title="Cập nhật thông tin"></i></a>&nbsp;&nbsp;';

		$str .= '<a href ="?module=book_nxb&task=book_nxb_delete&id=' . $row->id . '" onclick="return confirmAction();"><i class="font-size-24 fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';
		return $str;
	}

	static function book_nxb_view()
	{
		global $database;
		global $ariacms;

		$where = "";
		$order = ' ORDER BY id DESC';

        /** Phân trang*/
		$curPg = ($_REQUEST["curPg"] > 0) ? $_REQUEST["curPg"] : 1;
		$maxRows = ($_REQUEST["page_size"] > 0) ? $_REQUEST["page_size"] : $ariacms->web_information->admin_per_page;
		$curRow = ($curPg - 1) * $maxRows;
		$limit = " LIMIT " . $curRow . "," . $maxRows . " ";

		/** Search e4_nhaxuatban */
		$keysearch = trim(strtolower($_REQUEST['keysearch']));
        if(trim($_REQUEST["keysearch"]) != ""){
            $where = " WHERE tennhaxuatban LIKE '%$keysearch%'";
        }


        $query = "SELECT * FROM `e4_nhaxuatban`" . $where . $order . $limit;
        $database->setQuery($query);
        $book_nxb = $database->loadObjectList();

        $query = "SELECT COUNT(*) total FROM `e4_nhaxuatban`" ;
        $database->setQuery($query);
        $totalRows = $database->loadRow();

		View::book_nxb_view($book_nxb, $totalRows['total'], $maxRows, $curPg);
	}

	static function book_nxb_add()
	{
		global $database;
		global $ariacms;

        /** Submit -> insert bản ghi*/
		if ($_POST["submit"] == "book_nxb_add") {

            /** get request */
            $tennhaxuatban = $_REQUEST["tennhaxuatban"];

            $row = new stdClass;
            $row->id 		= NULL;
            $row->tennhaxuatban    = $tennhaxuatban;

            $database->insertObject('e4_nhaxuatban', $row, 'id');


            $ariacms->redirect("Tạo mới thành công", "index.php?module=book_nxb");

		}
        /** Not submit -> mở trang thêm danh mục sách*/
        else {
			View::book_nxb_add_view();
		}
	}

	static function book_nxb_edit()
	{
		global $database;
		global $ariacms;

        /** Submit -> update bản ghi*/
		if ($_REQUEST["submit"] == "book_nxb_edit") {
            $tennhaxuatban = $_REQUEST["tennhaxuatban"];

			$row = new stdClass;
			$row->id 		= $_GET['id'];

            $row->tennhaxuatban    = $tennhaxuatban;
			$database->updateObject('e4_nhaxuatban', $row, 'id');

            $ariacms->redirect("Cập nhật thành công", "javascript:history.back();");
		}
        /** Not submit -> mở trang update danh mục sách*/
        else {
			$id = $_REQUEST['id'];
			$query = "SELECT * FROM e4_nhaxuatban WHERE id = {$id}";
			$database->setQuery($query);
			$book_nxb_detail = $database->loadRow();


			View::book_nxb_edit_view($book_nxb_detail);
		}
	}
	static function book_nxb_delete()
	{
		global $ariacms;
		global $database;
		$id	= $_REQUEST["id"];
		$ariacms->delete('e4_nhaxuatban', 'id=' . $id);

		
		$ariacms->redirect("", "javascript:history.back()");
	}
}
