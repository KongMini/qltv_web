<?php
class Model
{
	static function student_view()
	{
		global $database;
		global $ariacms;
		$totalRows = 0;
		$where = "";
        $order_by = " order by  id desc";
		$curPg		= @$_REQUEST["curPg"];
		$keyword	= @$_REQUEST["keyword"];
		$start_date	= @$_REQUEST["start_date"];
		$s_start_date = (int) $ariacms->dateToUnix($_REQUEST['start_date']) + 86400;
		$end_date	= @$_REQUEST["end_date"];
		$s_end_date = (int) $ariacms->dateToUnix($_REQUEST['end_date']) + 86400;
		$status		= @$_REQUEST["status"];
		($keyword != "") ? $where .= " and ( fullname like '%$keyword%' OR email = '$keyword' OR masv = '$keyword' ) " : $where .= "";

		($start_date != "") ? $where .= " and ( a.date_created >= $s_start_date ) " : $where .= "";
		($end_date != "") ? $where .= " and ( a.date_created <= $s_end_date ) " : $where .= "";
		if ($status == 1) $where .= " and ( a.publish = $status ) ";
		else if ($status == 2) $where .= " and ( a.publish = 0 ) ";

		$query = "SELECT * FROM `e4_users` WHERE user_type = 'admin' and permission = '10' " . $where . $order_by;
		$database->setQuery($query);
        $students = $database->loadObjectList();

		$totalRows = count($students);
		$maxRows = 30;
		if ($curPg == "") $curPg = 1;
		$curRow = ($curPg - 1) * $maxRows;
		View::student_view($students, $totalRows, $curPg, $curRow, $maxRows);
	}

	static function student_add()
	{
		global $database;
		global $ariacms;
		if ($_POST["submit"] != 'student_add') {

			View::student_add_view();
		} else {
			unset($_POST["submit"]);

			$row = new stdClass;
			$row->id = null;
			foreach ($_POST as $key => $value) {
                if ($key == "password")
                    $row->$key = md5($value);
                else
                    $row->$key = $value;
			}
            $row->user_type = 'admin';
            $row->permission = 10;
			$row->random = md5(time());
			$row->date_created = time();
			$row->user_created 	= $_SESSION['user']['email'];
			$row->date_updated = time();
			$row->user_updated 	= $_SESSION['user']['email'];

			/** Verify User information */
			$query = "SELECT * FROM e4_users WHERE email = '" . $row->email . "' or masv = '".$row->masv."'";
			$database->setQuery($query);
			$checks = $database->loadObjectList();

			if ($checks)
				$ariacms->redirect("Email hoặc mã sinh viên đã tồn tại! Vui lòng kiểm tra lại thông tin.", "javascript:history.back()");
			else {
				// Insert DB
				if ($user_id = $database->insertObject('e4_users', $row, 'id')) {
                    if($_REQUEST['cart'] == 1){
                        $ariacms->redirect("Tạo mới thành công", "index.php?module=cart&task=cart_edit&id=". $user_id);
                    }
					$ariacms->redirect("Tạo mới thành công", "index.php?module=student");
				} else
					echo $database->stderr();
			}
		}
	}

	static function student_edit()
	{
		global $database;
		global $ariacms;
		if ($_POST["submit"] != 'student_edit') {

            $id = $_REQUEST['id'];

			$query = "SELECT a.* FROM e4_users a  WHERE a.id = '$id'";
			$database->setQuery($query);
			$student = $database->loadRow();

			View::student_edit_view($student);
		} else {
			unset($_POST["submit"]);

			$row = new stdClass;
			$row->id = $_REQUEST["id"];
            foreach ($_POST as $key => $value) {
                if ($key == "password")
                    if($row->$key != "") $row->$key = md5($value);
                else
                    $row->$key = $value;
            }
            $row->user_type = 'admin';
            $row->permission = 10;
            $row->random = md5(time());
            $row->date_updated = time();
            $row->user_updated 	= $_SESSION['user']['email'];
			/** Verify User information */
			$query = "SELECT * FROM e4_users WHERE email = '" . $row->email . "' and id != '" . $row->id . "' ";
			$database->setQuery($query);
			$checks = $database->loadObjectList();
			if ($checks)
				$ariacms->redirect("Email đã tồn tại! Vui lòng kiểm tra lại thông tin.", "javascript:history.back()");
			else {
				// Update DB
				if ($database->updateObject('e4_users', $row, 'id')) {
					$ariacms->redirect("Cập nhật thành công", "javascript:history.back()");
				} else
					echo $database->stderr();
			}
		}
	}

	static function student_delete()
	{
		global $ariacms;
		$id	= $_REQUEST["id"];
		$ariacms->delete('e4_users', 'id=' . $id);
		$ariacms->delete('e4_users_meta', 'user_id=' . $id);
		$ariacms->delete('e4_users_taxonomy', 'user_id=' . $id );
		$ariacms->redirect("", "javascript:history.back()");
	}
	static function student_publish()
	{
		global $database;
		global $ariacms;
		$id = $_REQUEST["id"];
		$query = "UPDATE e4_users SET publish='1' WHERE id='$id'";
		$database->setQuery($query);
		$database->query();
		$ariacms->redirect("", "javascript:history.back()");
	}
	static function student_unpublish()
	{
		global $database;
		global $ariacms;
		$id = $_REQUEST["id"];
		$query = "UPDATE e4_users SET publish='0' WHERE id='$id'";
		$database->setQuery($query);
		$database->query();
		$ariacms->redirect("", "javascript:history.back()");
	}
}
