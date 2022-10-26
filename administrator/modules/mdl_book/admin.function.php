<?php
class Model
{
	static function book_view_link($row)
	{
		$str = '';
		$str .= '<a href ="?module=book&task=book_edit&id=' . $row->id . '" ><i class="font-size-24 fa fa-pencil-square-o" data-toggle="tooltip"  title="Cập nhật thông tin"></i></a>&nbsp;&nbsp;';

		$str .= '<a href ="?module=book&task=book_delete&id=' . $row->id . '" onclick="return confirmAction();"><i class="font-size-24 fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';
		return $str;
	}

	static function book_view()
	{
		global $database;
		global $ariacms;
		$where = " ";
		$order = ' order by  a.id desc';

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
		$book_tags = ($_REQUEST['book_tags'] > 0) ? " AND t1.term_taxonomy_id = " . $_REQUEST['book_tags'] : "";
		$join_tags = ($_REQUEST['book_tags'] > 0) ? " " : " LEFT ";



		/** Filter price_status */
		$where .= ($_REQUEST['price_status'] != '') ? " AND a.price_status = '" . $_REQUEST['price_status'] . "'" : "";
		/** End search */
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
            $row->url =  $ariacms->utf8ToUrl($_POST['tensach']);
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
				$ariacms->delete('e4_term_relationships', 'object_id=' . $_REQUEST["id"] . ' AND object_type = "book" ');
				$object = new stdClass;
				foreach ($taxonomy as $key => $value) {
					$object->object_id = $_REQUEST["id"];
					$object->term_taxonomy_id = $value;
					$object->object_type = 'book';
					$database->insertObject("e4_term_relationships", $object, "object_id");

					$query = "UPDATE e4_term_taxonomy SET COUNT = (SELECT COUNT(*) total FROM e4_term_relationships 
					WHERE term_taxonomy_id = " . $value . " AND object_type = 'book') WHERE id = " . $value;
					$database->setQuery($query);
					$database->query();
				}
				/** Insert related image list for book */
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
			$book_detail = $database->loadRow();

			$query = "SELECT * FROM e4_posts_meta WHERE post_id = $id";
			$database->setQuery($query);
			$term_metas = $database->loadObjectList();

			foreach ($term_metas as $term_meta) {
				$book_detail['meta']->{$term_meta->meta_key} = $term_meta->meta_value;
			}

			$query = "SELECT a.*, count(b.parent) sub FROM e4_term_taxonomy a 
			LEFT JOIN (SELECT parent FROM e4_term_taxonomy ) b ON a.id = b.parent 
			GROUP BY a.id ORDER BY a.order ";
			$database->setQuery($query);
			$taxonomies = $database->loadObjectList();

			$term_taxonomy_id_list = explode(",", $book_detail['term_taxonomy_id_list']);

			$query = "SELECT a.id, a.fullname, a.status_public 
			FROM e4_users a 
			WHERE a.publish = 1 
			ORDER BY a.status_public, a.fullname";
			$database->setQuery($query);
			$users = $database->loadObjectList();

			$query = "SELECT a.*, b.fullname FROM e4_posts a 
				JOIN e4_users b ON a.user_created = b.id
			WHERE a.post_type = 'book' AND a.post_status = 'active' AND a.id IN (" . $book_detail['meta']->meta_list_related_book . ")
			order by a.id desc ";
			$database->setQuery($query);
			$books = $database->loadObjectList();

			$images = $ariacms->selectAll('e4_posts_image', 'object_id=' . $id, '');
			View::book_edit_view($taxonomies, $users, $term_taxonomy_id_list, $book_detail, $books, $images);
		}
	}
	static function book_delete()
	{
		global $ariacms;
		global $database;
		$id	= $_REQUEST["id"];
		$ariacms->delete('e4_posts', 'id=' . $id);
		$ariacms->delete('e4_posts_meta', 'post_id=' . $id);
		$taxonomies = $ariacms->selectAll('e4_term_relationships', 'object_id=' . $id . ' AND object_type="book" ', '');

		$ariacms->delete('e4_posts_image', 'object_id=' . $id);
		$ariacms->delete('e4_term_relationships', 'object_id=' . $id . ' AND object_type="book" ');
		foreach ($taxonomies as $taxonomy) {
			$query = "UPDATE e4_term_taxonomy SET count = (SELECT COUNT(*) total FROM e4_term_relationships 
			WHERE term_taxonomy_id = " . $taxonomy->term_taxonomy_id . " AND object_type = 'book') WHERE id = " . $taxonomy->term_taxonomy_id;
			$database->setQuery($query);
			$database->query();
		}
		
		$ariacms->redirect("", "javascript:history.back()");
	}
}
