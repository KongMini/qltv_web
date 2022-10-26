<?php
class Model
{
	static function book_category_view_link($row)
	{
		$str = '';
		$str .= '<a href ="?module=book_category&task=book_category_edit&id=' . $row->id . '" ><i class="font-size-24 fa fa-pencil-square-o" data-toggle="tooltip"  title="Cập nhật thông tin"></i></a>&nbsp;&nbsp;';

		$str .= '<a href ="?module=book_category&task=book_category_delete&id=' . $row->id . '" onclick="return confirmAction();"><i class="font-size-24 fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';
		return $str;
	}

	static function book_category_view()
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

		/** Search e4_danhmucsach */
		$keysearch = trim(strtolower($_REQUEST['keysearch']));
        if(trim($_REQUEST["keysearch"]) != ""){
            $where = " WHERE tieude LIKE '%$keysearch%'";
        }


        $query = "SELECT * FROM `e4_danhmucsach`" . $where . $order . $limit;
        $database->setQuery($query);
        $book_category = $database->loadObjectList();

        $query = "SELECT COUNT(*) total FROM `e4_danhmucsach`" . $where . $order . $limit;
        $database->setQuery($query);
        $totalRows = $database->loadRow();

		View::book_category_view($book_category, $totalRows['total'], $maxRows, $curPg);
	}

	static function book_category_add()
	{
		global $database;
		global $ariacms;

        /** Submit -> insert bản ghi*/
		if ($_POST["submit"] == "book_category_add") {

            /** get request */
            $tieude = $_REQUEST["tieude"];

            $row = new stdClass;
            $row->id 		= NULL;
            $row->tieude    = $tieude;

            $database->insertObject('e4_danhmucsach', $row, 'id');


				$ariacms->redirect("Tạo mới thành công", "index.php?module=book_category");

		}
        /** Not submit -> mở trang thêm danh mục sách*/
        else {
			View::book_category_add_view();
		}
	}

	static function book_category_edit()
	{
		global $database;
		global $ariacms;

        /** Submit -> update bản ghi*/
		if ($_REQUEST["submit"] == "book_category_edit") {
            $tieude = $_REQUEST["tieude"];

			$row = new stdClass;
			$row->id 		= $_GET['id'];

            $row->tieude    = $tieude;
			$database->updateObject('e4_danhmucsach', $row, 'id');

            $ariacms->redirect("Cập nhật thành công", "javascript:history.back();");
		}
        /** Not submit -> mở trang update danh mục sách*/
        else {
			$id = $_REQUEST['id'];
			$query = "SELECT * FROM e4_danhmucsach WHERE id = {$id}";
			$database->setQuery($query);
			$book_category_detail = $database->loadRow();


			View::book_category_edit_view($book_category_detail);
		}
	}
	static function book_category_delete()
	{
		global $ariacms;
		global $database;
		$id	= $_REQUEST["id"];
		$ariacms->delete('e4_danhmucsach', 'id=' . $id);

		
		$ariacms->redirect("", "javascript:history.back()");
	}
}
