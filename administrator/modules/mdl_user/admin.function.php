<?php
class Model
{
	static function user_view()
	{
		global $database;
		global $ariacms;
		$totalRows = 0;
		$where = "";
		$curPg		= @$_REQUEST["curPg"];
		$keyword	= @$_REQUEST["keyword"];
		$start_date	= @$_REQUEST["start_date"];
		$s_start_date = (int) $ariacms->dateToUnix($_REQUEST['start_date']) + 86400;
		$end_date	= @$_REQUEST["end_date"];
		$s_end_date = (int) $ariacms->dateToUnix($_REQUEST['end_date']) + 86400;
		$status		= @$_REQUEST["status"];
		($keyword != "") ? $where .= " and ( a.fullname like '%$keyword%' OR a.email = '$keyword' OR a.homephone = '$keyword' OR a.mobifone = '$keyword' ) " : $where .= "";

		($start_date != "") ? $where .= " and ( a.date_created >= $s_start_date ) " : $where .= "";
		($end_date != "") ? $where .= " and ( a.date_created <= $s_end_date ) " : $where .= "";
		if ($status == 1) $where .= " and ( a.publish = $status ) ";
		else if ($status == 2) $where .= " and ( a.publish = 0 ) ";

		echo $query = "SELECT a.*,b.role_code  FROM e4_users a 
			left join e4_roles b on a.permission = b.id 
		where user_type='admin' and permission < 10 " . $where . " 
		GROUP BY a.id
		ORDER BY a.user_type, a.status_public desc, a.permission asc";
		$database->setQuery($query);
		$users = $database->loadObjectList();

		$totalRows = count($users);
		$maxRows = 30;
		if ($curPg == "") $curPg = 1;
		$curRow = ($curPg - 1) * $maxRows;
		View::user_view($users, $totalRows, $curPg, $curRow, $maxRows);
	}

	static function user_add()
	{
		global $database;
		global $ariacms;
		if ($_POST["submit"] != 'user_add') {
		
			$query = "SELECT a.*, count(b.parent) sub FROM e4_term_taxonomy a 
				LEFT JOIN (SELECT parent FROM e4_term_taxonomy ) b ON a.id = b.parent 
				GROUP BY a.id ORDER BY a.order ";
			$database->setQuery($query);
			$taxonomies = $database->loadObjectList();

			$query = "SELECT * FROM e4_roles WHERE status = '1' ";
			$database->setQuery($query);
			$roles = $database->loadObjectList();
			View::user_add_view($taxonomies, $roles);
		} else {
			unset($_POST["submit"]);
			$taxonomy = $_REQUEST["taxonomy"];
			unset($_REQUEST["taxonomy"]);
			$row = new stdClass;
			$row->id = null;
			foreach ($_POST as $key => $value) {
				if (strlen(strstr($key, 'meta_')) == 0) {
					if ($key == "password")
						$row->$key = md5($value);
					else
						$row->$key = $value;
				}
			}
			$row->random = md5(time());
			$row->date_created = time();
			$row->user_created 	= $_SESSION['user']['email'];
			$row->date_updated = time();
			$row->user_updated 	= $_SESSION['user']['email'];
			/** Verify User information */
			$query = "SELECT * FROM e4_users WHERE email = '" . $row->email . "' ";
			$database->setQuery($query);
			$checks = $database->loadObjectList();
			if ($checks)
				$ariacms->redirect("Email đã tồn tại! Vui lòng kiểm tra lại thông tin.", "javascript:history.back()");
			else {
				// Insert DB
				if ($user_id = $database->insertObject('e4_users', $row, 'id')) {
					$meta = new stdClass;
					foreach ($_POST as $key => $value) {
						if (strlen(strstr($key, 'meta_')) > 0) {
							$meta->meta_id = NULL;
							$meta->user_id = $user_id;
							$meta->meta_key = $key;
							$meta->meta_value = $value;
							$database->insertObject("e4_users_meta", $meta, "meta_id");
						}
					}
					$object = new stdClass;
					foreach ($taxonomy as $key => $value) {
						$object->user_id = $user_id;
						$object->taxonomy_id = $value;
						$database->insertObject("e4_users_taxonomy", $object, "user_id");
					}
					$ariacms->redirect("Tạo mới thành công", "index.php?module=user");
				} else
					echo $database->stderr();
			}
		}
	}

	static function user_edit()
	{
		global $database;
		global $ariacms;
		if ($_POST["submit"] != 'user_edit') {
			$id = $_REQUEST['id'];
			$query = "SELECT a.*, count(b.parent) sub FROM e4_term_taxonomy a 
				LEFT JOIN (SELECT parent FROM e4_term_taxonomy ) b ON a.id = b.parent 
				GROUP BY a.id ORDER BY a.order ";
			$database->setQuery($query);
			$taxonomies = $database->loadObjectList();

			$query = "SELECT a.* FROM e4_users a  WHERE a.id = '$id'";
			$database->setQuery($query);
			$user = $database->loadRow();

			$query = "SELECT * FROM e4_users_meta WHERE user_id = $id";
			$database->setQuery($query);
			$user_metas = $database->loadObjectList();

			foreach ($user_metas as $user_meta) {
				$user['meta']->{$user_meta->meta_key} = $user_meta->meta_value;
			}

			$query = "SELECT * FROM e4_roles WHERE status = '1' ";
			$database->setQuery($query);
			$roles = $database->loadObjectList();

			View::user_edit_view($taxonomies, $user, $roles);
		} else {
			unset($_POST["submit"]);
			$taxonomy = $_REQUEST["taxonomy"];
			unset($_REQUEST["taxonomy"]);

			$row = new stdClass;
			$row->id = $_REQUEST["id"];
			foreach ($_POST as $key => $value) {
				if (strlen(strstr($key, 'meta_')) == 0) {
					if ($key != "password")
						$row->$key = $value;
					else if ($value != "")
						$row->$key = md5($value);
				}
			}
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
					$ariacms->delete('e4_users_meta', 'user_id=' . $_REQUEST["id"]);
					$meta = new stdClass;
					foreach ($_POST as $key => $value) {
						if (strlen(strstr($key, 'meta_')) > 0) {
							$meta->meta_id = NULL;
							$meta->user_id = $_REQUEST["id"];
							$meta->meta_key = $key;
							$meta->meta_value = $value;
							$database->insertObject("e4_users_meta", $meta, "meta_id");
						}
					}

					$ariacms->delete('e4_users_taxonomy', 'user_id=' . $_REQUEST["id"] );
					$object = new stdClass;
					foreach ($taxonomy as $key => $value) {
						$object->user_id = $_REQUEST["id"];
						$object->taxonomy_id = $value;
						$database->insertObject("e4_users_taxonomy", $object, "user_id");
					}

					$ariacms->redirect("Cập nhật thành công", "javascript:history.back()");
				} else
					echo $database->stderr();
			}
		}
	}

	static function user_delete()
	{
		global $ariacms;
		$id	= $_REQUEST["id"];
		$ariacms->delete('e4_users', 'id=' . $id);
		$ariacms->delete('e4_users_meta', 'user_id=' . $id);
		$ariacms->delete('e4_users_taxonomy', 'user_id=' . $id );
		$ariacms->redirect("", "javascript:history.back()");
	}
	static function user_publish()
	{
		global $database;
		global $ariacms;
		$id = $_REQUEST["id"];
		$query = "UPDATE e4_users SET publish='1' WHERE id='$id'";
		$database->setQuery($query);
		$database->query();
		$ariacms->redirect("", "javascript:history.back()");
	}
	static function user_unpublish()
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
