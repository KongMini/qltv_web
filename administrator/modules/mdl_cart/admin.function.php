<?php
class Model
{
	static function cart_view_link($row)
	{
		$str = '';
		$str .= '<a href ="?module=cart&task=cart_edit&id=' . $row->id . '" ><i style="font-size: 24px" class="fa fa-pencil-square-o" data-toggle="tooltip"  title="Chi tiết đơn hàng"></i></a>&nbsp;&nbsp;';
		$str .= '<a href ="?module=cart&task=cart_delete&id=' . $row->id . '" onclick="return confirmAction();"><i style="font-size: 24px" class="fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';

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
                GROUP BY a.time_update 
                ORDER BY time_update DESC " . $limit;
		$database->setQuery($query);
		$carts = $database->loadObjectList();

		$query = "SELECT b.id FROM `e4_muonsach` a
                LEFT JOIN e4_users b ON a.id_sinhvien = b.id
                GROUP BY a.time_update 
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
                $row->soluong = 1;
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
//    static function cart_mail(){
//        global $database;
//        global $ariacms;
//
//        /** Gửi mail cho những người mượn 30 ngày*/
//        $time = 30 * 86400;
//
//        $query = "SELECT * FROM `e4_users`  WHERE user_type = 'public' ORDER BY id DESC";
//        $database->setQuery($query);
//        $students = $database->loadObjectList();
//        foreach ($students)
//        $subject2 = "Thư viện Đại học Thủy lợi";
//
//        $content2='
//						<h3>Kính gửi: '. $ad->fullname .'</h3>
//						<p>Tôi sẽ rất cảm ơn nếu bạn phản biện bài báo có tựa đề `'.$news_detail["title_vi"] .'` cho tạp chí này</p>
//						<p>Tên bài: '.$news_detail["title_vi"].'</p>
//						<p>Tóm tắt: '.$news_detail["brief_vi"].'</p>
//						<p>Từ khóa: '.$news_detail["tukhoa"].'</p>
//						<p>Tài liệu tham khảo: '.$news_detail["tailieuthamkhao"].'</p>
//						<p><a target="_blank" href="'.$ariacms->actual_link.'member/dong-y-phan-bien.html?mabaibao='.$news_detail["mabaibao"].'&id_phanbien='.$ad -> id_phanbien.'&id='.$news_detail["id"] .'">Nhấn vào đây đồng ý phản biên</a></p>
//						<p><a target="_blank" href="'.$ariacms->actual_link.'member/tu-choi-phan-bien.html?mabaibao='.$news_detail["mabaibao"].'&id_phanbien='.$ad -> id_phanbien.'&id='. $news_detail["id"].'">Nhấn vào đây từ chối phản biên</a></p>
//					';
//        // Gửi email cho sinh viên
//        if($ariacms -> sendMail( $ad->email , $ad->fullname,$subject2,$content2)){
//            $ariacms->redirect("Tạo mới thành công", "index.php?module=cart");
//        }
//    }
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

                        $giasach = $muonsach_list[$value]['giasach'];

                        /** Từ báo mất -> trả sách*/
                        if($muonsach_list[$value]['status_old'] == 2){

                            $giasach *= (-1);
                        }

                        /**Cập nhật tiền nợ sách*/
                        $query = "UPDATE e4_users SET notiensach = notiensach +  {$giasach} WHERE id=".$id_user;
                        $database->setQuery($query);
                        $database->query();

                    }

                }
            }
            $ariacms->redirect("Cập nhật thành công", "?module=cart&task=cart_edit&id=".$id_user);
        }else{

            $id_user = $_REQUEST['id'];

            $query = "SELECT * FROM `e4_users`  WHERE user_type = 'public' ORDER BY id DESC";
            $database->setQuery($query);
            $student = $database->loadObjectList();

            $query = "SELECT * FROM `e4_book`   ORDER BY id DESC";
            $database->setQuery($query);
            $books = $database->loadObjectList();


            $query = "SELECT * FROM e4_users WHERE id=" .$id_user;
            $database->setQuery($query);
            $detail = $database->loadRow();

            $query = "SELECT a.*,c.masach,c.tensach,c.image,c.giasach FROM `e4_muonsach` a 
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
