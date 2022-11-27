<?php
class Model
{
	static function book_view_link($row)
	{
		$str = '';
        if($_SESSION['user']['permission'] != 10) {
            $str .= '<a href ="?module=book&task=book_edit&id=' . $row->id . '" ><i class="font-size-24 fa fa-pencil-square-o" data-toggle="tooltip"  title="Cập nhật thông tin"></i></a>&nbsp;&nbsp;';

            $str .= '<a href ="?module=book&task=book_delete&id=' . $row->id . '" onclick="return confirmAction();"><i class="font-size-24 fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';
        }
        return $str;
	}

	static function book_view()
	{
		global $database;
		global $ariacms;
		$where = " WHERE 1 = 1 ";


        /** Sort */
        $order = ' order by  a.id desc';
        if($_REQUEST['sort'] && $_REQUEST['sort_type']){
            $order = 'ORDER BY ' . $_REQUEST['sort'] . ' ' . $_REQUEST['sort_type'];
        }


        /** Phân trang */
		$curPg = ($_REQUEST["curPg"] > 0) ? $_REQUEST["curPg"] : 1;
		$maxRows = ($_REQUEST["page_size"] > 0) ? $_REQUEST["page_size"] : $ariacms->web_information->admin_per_page;
		$curRow = ($curPg - 1) * $maxRows;
		$limit = " LIMIT " . $curRow . "," . $maxRows . " ";

        /** Search e4_book */
        $masach = trim(strtolower($_REQUEST['masach']));
        if(trim($_REQUEST["masach"]) != ""){
            $where .= " AND a.masach LIKE '%$masach%'";
        }

        $tensach = trim(strtolower($_REQUEST['tensach']));
        if(trim($_REQUEST["tensach"]) != ""){
            $where .= " AND a.tensach LIKE '%$tensach%'";
        }

        $nguoitao = $_REQUEST['nguoitao'];
        if($_REQUEST["nguoitao"] != ""){
            $where .= " AND nguoitao = '$nguoitao'";
        }

        $danhmucsach = $_REQUEST['danhmucsach'];
        if($_REQUEST["danhmucsach"] != ""){
            $where .= " AND danhmucsach = '$danhmucsach'";
        }

        $tacgia = $_REQUEST['tacgia'];
        if($_REQUEST["tacgia"] != ""){
            $where .= " AND tacgia = '$tacgia'";
        }

        $nhaxuatban = $_REQUEST['nhaxuatban'];
        if($_REQUEST["nhaxuatban"] != ""){
            $where .= " AND nhaxuatban = '$nhaxuatban'";
        }
		/** End search */


        /** Truy vấn*/
		$query = "SELECT a.*, b.tentacgia, c.tieude, d.tennhaxuatban, e.fullname FROM `e4_book` a
                    LEFT JOIN e4_tacgia b ON a.tacgia = b.id
                    LEFT JOIN e4_danhmucsach c ON a.danhmucsach = c.id
                    LEFT JOIN e4_nhaxuatban d ON a.nhaxuatban = d.id
                    LEFT JOIN e4_users e ON a.nguoitao = e.id" . $where . $order . $limit;
		$database->setQuery($query);
		$book = $database->loadObjectList();

		$query = "SELECT COUNT(*) as total FROM `e4_book` a
                    LEFT JOIN e4_tacgia b ON a.tacgia = b.id
                    LEFT JOIN e4_danhmucsach c ON a.danhmucsach = c.id
                    LEFT JOIN e4_nhaxuatban d ON a.nhaxuatban = d.id
                    LEFT JOIN e4_users e ON a.nguoitao = e.id";
		$database->setQuery($query);
		$totalRows = $database->loadRow();

		$query = "SELECT a.id, a.fullname, a.status_public 
				FROM e4_users a 
				WHERE a.publish = 1 
				ORDER BY a.status_public, a.fullname";
		$database->setQuery($query);
		$users = $database->loadObjectList();


        /** danh muc sach*/
        $query = "SELECT * FROM e4_danhmucsach ORDER BY id desc ";
        $database->setQuery($query);
        $book_category = $database->loadObjectList();

        /** tac gia*/
        $query = "SELECT * FROM e4_tacgia ORDER BY id desc ";
        $database->setQuery($query);
        $book_author = $database->loadObjectList();

        /** nha xuat ban */
        $query = "SELECT * FROM e4_nhaxuatban ORDER BY id desc ";
        $database->setQuery($query);
        $book_nxb = $database->loadObjectList();


		View::book_view($book, $totalRows['total'], $maxRows, $curPg, $users, $book_category, $book_author, $book_nxb);
	}

	static function book_add()
	{
		global $database;
		global $ariacms;
		if ($_POST["submit"] == "book_add") {

			$row = new stdClass;
			$row->id 		= NULL;
			$row->nguoitao 	= $_SESSION['user']['id'];
            $row->url =  $ariacms->utf8ToUrl($_POST['tensach'] . $_POST['masach']);
			foreach ($_POST as $key => $value) {
				if ($key != "submit") {
                    $row->$key = $value;
				}
			}

			if ($post_id = $database->insertObject('e4_book', $row, 'id')) {

				$ariacms->redirect("Tạo mới thành công", "index.php?module=book");
			} else {
				echo $database->stderr();
			}
		} else {

			$query = "SELECT a.id, a.fullname, a.status_public 
				FROM e4_users a 
				WHERE a.publish = 1 
				ORDER BY a.status_public, a.fullname";
			$database->setQuery($query);
			$users = $database->loadObjectList();

            /** danh muc sach*/
            $query = "SELECT * FROM e4_danhmucsach ORDER BY id desc ";
            $database->setQuery($query);
            $book_category = $database->loadObjectList();

            /** tac gia*/
            $query = "SELECT * FROM e4_tacgia ORDER BY id desc ";
            $database->setQuery($query);
            $book_author = $database->loadObjectList();

            /** nha xuat ban */
            $query = "SELECT * FROM e4_nhaxuatban ORDER BY id desc ";
            $database->setQuery($query);
            $book_nxb = $database->loadObjectList();

			View::book_add_view($book_category, $book_author, $book_nxb, $users);
		}
	}

	static function book_edit()
	{
		global $database;
		global $ariacms;
		if ($_REQUEST["submit"] == "book_edit") {

			$row = new stdClass;
			$row->id 		= $_GET['id'];

            foreach ($_POST as $key => $value) {
                if ($key != "submit") {
                    $row->$key = $value;
                }
            }
			if ($database->updateObject('e4_book', $row, 'id')) {

				$ariacms->redirect("Cập nhật thành công", "javascript:history.back();");
			} else {
				echo $database->stderr();
			}
		} else {
			$id = $_REQUEST['id'];
			$query = "SELECT a.*, b.tentacgia, c.tieude, d.tennhaxuatban, e.fullname FROM `e4_book` a
                    LEFT JOIN e4_tacgia b ON a.tacgia = b.id
                    LEFT JOIN e4_danhmucsach c ON a.danhmucsach = c.id
                    LEFT JOIN e4_nhaxuatban d ON a.nhaxuatban = d.id
                    LEFT JOIN e4_users e ON a.nguoitao = e.id
			        WHERE a.id = $id";
			$database->setQuery($query);
			$book_detail = $database->loadRow();


            $query = "SELECT a.id, a.fullname, a.status_public 
				FROM e4_users a 
				WHERE a.publish = 1 
				ORDER BY a.status_public, a.fullname";
            $database->setQuery($query);
            $users = $database->loadObjectList();

            /** danh muc sach*/
            $query = "SELECT * FROM e4_danhmucsach ORDER BY id desc ";
            $database->setQuery($query);
            $book_category = $database->loadObjectList();

            /** tac gia*/
            $query = "SELECT * FROM e4_tacgia ORDER BY id desc ";
            $database->setQuery($query);
            $book_author = $database->loadObjectList();

            /** nha xuat ban */
            $query = "SELECT * FROM e4_nhaxuatban ORDER BY id desc ";
            $database->setQuery($query);
            $book_nxb = $database->loadObjectList();

			View::book_edit_view($users, $book_detail,$book_category, $book_author, $book_nxb);
		}
	}
	static function book_delete()
	{
		global $ariacms;
		global $database;
		$id	= $_REQUEST["id"];
		$ariacms->delete('e4_book', 'id=' . $id);
		$ariacms->redirect("", "javascript:history.back()");
	}
}
