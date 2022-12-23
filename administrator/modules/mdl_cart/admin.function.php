<?php
class Model
{
	static function cart_view_link($row)
	{
		$str = '';
		$str .= '<a href ="?module=cart&task=cart_edit&id=' . $row->id . '" ><i style="font-size: 24px" class="fa fa-pencil-square-o" data-toggle="tooltip"  title="Chi tiết"></i></a>&nbsp;&nbsp;';
//		$str .= '<a href ="?module=cart&task=cart_delete&id=' . $row->id . '" onclick="return confirmAction();"><i style="font-size: 24px" class="fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';

		return $str;
	}
	static function cart_view()
	{
		global $database;
		global $ariacms;

        $where = " WHERE 1 = 1 ";
        $keyword	= $_REQUEST["keyword"];

        /** Sort */
        $order = 'ORDER BY time_update DESC';
        if($_REQUEST['sort'] && $_REQUEST['sort_type']){
            $order = 'ORDER BY ' . $_REQUEST['sort'] . ' ' . $_REQUEST['sort_type'];
        }

		$curPg = ($_REQUEST["curPg"] > 0) ? $_REQUEST["curPg"] : 1;
		$maxRows = ($_REQUEST["page_size"] > 0) ? $_REQUEST["page_size"] : $ariacms->web_information->admin_per_page;
		$curRow = ($curPg - 1) * $maxRows;
		$limit = " LIMIT " . $curRow . "," . $maxRows . " ";

        /** Search */
        $start_date	= @$_REQUEST["start_date"];
        $s_start_date = (int) $ariacms->dateToUnix($_REQUEST['start_date']) + 86400;
        $end_date	= @$_REQUEST["end_date"];
        $s_end_date = (int) $ariacms->dateToUnix($_REQUEST['end_date']) + 86400;

        ($keyword != "") ? $where .= " and ( b.fullname like '%$keyword%'  OR b.masv = '$keyword' ) " : $where .= "";

        ($start_date != "") ? $where .= " and ( a.time_update >= $s_start_date ) " : $where .= "";
        ($end_date != "") ? $where .= " and ( a.time_update <= $s_end_date ) " : $where .= "";

		$query = "SELECT a.time_update, b.* FROM `e4_muonsach` a
                LEFT JOIN e4_users b ON a.id_sinhvien = b.id
                ". $where ."
                GROUP BY a.time_update 
                ". $order . $limit;
		$database->setQuery($query);
		$carts = $database->loadObjectList();

		$query = "SELECT b.id FROM `e4_muonsach` a
                LEFT JOIN e4_users b ON a.id_sinhvien = b.id
                ". $where ."
                GROUP BY a.time_update " . $order;
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
                $row->soluong = 1;
                $row->time_update = $time;
                if($database->insertObject('e4_muonsach', $row, 'id')){

                    /**Cập nhật số lượng sách*/
                    $query = "UPDATE e4_book SET soluong = soluong - 1 WHERE id=".$value['id_sach'];
                    $database->setQuery($query);
                    $database->query();
                }
            }

            $ariacms->redirect("Tạo mới thành công", "index.php?module=cart");
        }else{
            $query = "SELECT * FROM `e4_users`  WHERE user_type = 'admin' and permission ='10' ORDER BY id DESC";
            $database->setQuery($query);
            $student = $database->loadObjectList();

            View::cart_add($student);

        }
    }
    static function cart_mail(){
        global $database;
        global $ariacms;

        /** Gửi mail cho những người mượn 30 ngày*/
        $time = time();

        $query = "SELECT a.*,  b.tensach, c.fullname, c.email FROM e4_muonsach a
                LEFT JOIN e4_book b ON b.id = a.id_sach
                LEFT JOIN e4_users c ON c.id = a.id_sinhvien
                WHERE ($time - time_update > (20 * 86400)) AND status = 0;";
        $database->setQuery($query);
        $students = $database->loadObjectList();
        foreach ($students as $student) {
            $subject2 = "Thư viện Đại học Thủy lợi";

            $content2 = '
						<h3>Kính gửi: ' . $student->fullname . '</h3>
						<p>Sách: `' . $student->tensach . '` sắp quá hạn. Bạn vui lòng đến thư viện để trả sách hoặc gia hạn thêm. Xin cảm ơn!</p>
						';
            // Gửi email cho sinh viên
            $ariacms->sendMail($student->email, $student->fullname, $subject2, $content2);
        }
        $ariacms->redirect("Gửi mail báo quá hạn thành công", "index.php?module=cart");

    }
	static function cart_edit()
	{
		global $database;
		global $ariacms;

        if($_POST["submitCart"]) {

            /** List tất cả bản ghi */
            $muonsach_list = $_REQUEST['muonsach'];

            /** Lấy id_user */
            $id_user = $_REQUEST['id_user'];

            /** Lấy id_change bỏ ký tự cuối ',' thừa khi add bằng js  */
            $id_change = substr($_REQUEST['id_change'], 0, -1);

            /** Convert string -> array */
            $id_change_array = explode(',', $id_change);

            /** Loại bỏ các phần từ trùng nhau trong mảng*/
            $id_change_array = array_unique($id_change_array);

            /** Lấy thời gian*/
            $time = time();

            /** Duyệt cái bản ghi bị thay đổi trạng thái */
            foreach ($id_change_array as  $value){

                /** Check trạng thái có bị thay đổi hay không*/
                if($muonsach_list[$value]['status_old'] != $muonsach_list[$value]['status_new']){

                    /**Cập nhật trạng thái mượn-trả*/
                    $row_muonsach               = new stdClass;
                    $row_muonsach->id           = $muonsach_list[$value]['id'];
                    $row_muonsach->status      = $muonsach_list[$value]['status_new'];
                    $row_muonsach->time_update  = $time;
                    $database->updateObject('e4_muonsach', $row_muonsach, 'id');

                    /** Check có trạng thái báo mất hay không */
                    if($muonsach_list[$value]['status_old'] == 2 || $muonsach_list[$value]['status_new'] == 2){

//                        $giasach = $muonsach_list[$value]['giasach'];
//
//                        /** Từ báo mất -> trả sách*/
//                        if($muonsach_list[$value]['status_old'] == 2){
//
//                            $giasach *= (-1);
//                        }
//
//                        /**Cập nhật tiền nợ sách*/
//                        $query = "UPDATE e4_users SET notiensach = notiensach +  {$giasach} WHERE id=".$id_user;
//                        $database->setQuery($query);
//                        $database->query();

                    }

                    /** Check có trạng thái trả sách */
                    if($muonsach_list[$value]['status_new'] == 1){

                        /**Cập nhật số lượng sách*/
                        $query = "UPDATE e4_book SET soluong = soluong +  1 WHERE id=".$muonsach_list[$value]['id_sach'];
                        $database->setQuery($query);
                        $database->query();

                    }

                }
            }
            $ariacms->redirect("Cập nhật thành công", "?module=cart&task=cart_edit&id=".$id_user);
        }else{
            $id_user = $_REQUEST['id'];
            if($_SESSION['user']['permission'] == 10){
                $id_user = $_SESSION['user']['id'];
            }


            $query = "SELECT * FROM `e4_users`  WHERE user_type = 'admin' permission = '10' ORDER BY id DESC";
            $database->setQuery($query);
            $student = $database->loadObjectList();

            $query = "SELECT * FROM `e4_book`   ORDER BY id DESC";
            $database->setQuery($query);
            $books = $database->loadObjectList();


            $query = "SELECT * FROM e4_users WHERE id=" .$id_user;
            $database->setQuery($query);
            $detail = $database->loadRow();

            $query = "SELECT a.*, c.id AS id_sach, c.masach,c.tensach,c.image,c.giasach FROM `e4_muonsach` a 
            LEFT JOIN e4_book c ON a.id_sach = c.id 
            WHERE a.id_sinhvien = {$id_user} 
            ORDER BY a.id DESC;";
            $database->setQuery($query);
            $lists = $database->loadObjectList();

            /** Check thanh toán mượn sách trong năm hiện tại hay chưa */
            $namhientai = date('Y');
            $date_start = strtotime($namhientai.'-1-1');
            $date_end   = strtotime(($namhientai+1).'-1-1');

            $query = "SELECT * FROM `e4_thanhtoan` WHERE (time_update > {$date_start} AND time_update < {$date_end}) AND id_user =  ". $id_user;
            $database->setQuery($query);
            $check = $database->loadObjectList();


            View::cart_edit($student, $lists, $books, $detail, $id_user, $check);

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
