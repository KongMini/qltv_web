<?php
class Model
{
	static function book_author_view_link($row)
	{
		$str = '';
		$str .= '<a href ="?module=book_author&task=book_author_edit&id=' . $row->id . '" ><i class="font-size-24 fa fa-pencil-square-o" data-toggle="tooltip"  title="Cập nhật thông tin"></i></a>&nbsp;&nbsp;';

		$str .= '<a href ="?module=book_author&task=book_author_delete&id=' . $row->id . '" onclick="return confirmAction();"><i class="font-size-24 fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';
		return $str;
	}

	static function book_author_view()
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

		/** Search e4_tacgia */
		$keysearch = trim(strtolower($_REQUEST['keysearch']));
        if(trim($_REQUEST["keysearch"]) != ""){
            $where = " WHERE tentacgia LIKE '%$keysearch%'";
        }


        $query = "SELECT * FROM `e4_tacgia`" . $where . $order . $limit;
        $database->setQuery($query);
        $book_author = $database->loadObjectList();

        $query = "SELECT COUNT(*) total FROM `e4_tacgia`" . $where . $order . $limit;
        $database->setQuery($query);
        $totalRows = $database->loadRow();

		View::book_author_view($book_author, $totalRows['total'], $maxRows, $curPg);
	}

	static function book_author_add()
	{
		global $database;
		global $ariacms;

        /** Submit -> insert bản ghi*/
		if ($_POST["submit"] == "book_author_add") {

            /** get request */
            $tentacgia = $_REQUEST["tentacgia"];

            $row = new stdClass;
            $row->id 		= NULL;
            $row->tentacgia    = $tentacgia;

            $database->insertObject('e4_tacgia', $row, 'id');


            $ariacms->redirect("Tạo mới thành công", "index.php?module=book_author");

		}
        /** Not submit -> mở trang thêm danh mục sách*/
        else {
			View::book_author_add_view();
		}
	}

	static function book_author_edit()
	{
		global $database;
		global $ariacms;

        /** Submit -> update bản ghi*/
		if ($_REQUEST["submit"] == "book_author_edit") {
            $tentacgia = $_REQUEST["tentacgia"];

			$row = new stdClass;
			$row->id 		= $_GET['id'];

            $row->tentacgia    = $tentacgia;
			$database->updateObject('e4_tacgia', $row, 'id');

            $ariacms->redirect("Cập nhật thành công", "javascript:history.back();");
		}
        /** Not submit -> mở trang update danh mục sách*/
        else {
			$id = $_REQUEST['id'];
			$query = "SELECT * FROM e4_tacgia WHERE id = {$id}";
			$database->setQuery($query);
			$book_author_detail = $database->loadRow();


			View::book_author_edit_view($book_author_detail);
		}
	}
	static function book_author_delete()
	{
		global $ariacms;
		global $database;
		$id	= $_REQUEST["id"];
		$ariacms->delete('e4_tacgia', 'id=' . $id);

		
		$ariacms->redirect("", "javascript:history.back()");
	}
}
