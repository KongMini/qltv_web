<?php
class Model
{
    static function index()
    {
        global $database;
        global $ariacms;

        /**
         * sách sắp đến hạn trả
         *
         * SELECT * FROM `e4_muonsach` WHERE (1669304578 - time_update > (30 * 86400)) AND status = 0;
         *
         * Thông kê sách
         *
         * SELECT COUNT(id) as statu, status FROM `e4_muonsach` GROUP By status;
         *
         *
         *
         */

        $time = time();

        /** Search */
        $start_date = $time ;
        if($_REQUEST["start_date"]){
            $start_date = (int) $ariacms->dateToUnix($_REQUEST['start_date']);
        }
        $end_date = $time + 86400;
        if($_REQUEST["end_date"]){
            $end_date = (int) $ariacms->dateToUnix($_REQUEST['end_date']);
        }

        $where = " where time_update > $start_date AND time_update < $end_date ";


        // Đang mượn
        $query = "SELECT a.*,  b.tensach, c.fullname FROM e4_muonsach a
                LEFT JOIN e4_book b ON b.id = a.id_sach
                LEFT JOIN e4_users c ON c.id = a.id_sinhvien". $where."
                 AND status = 0;";
        $database->setQuery($query);
        $sachdangmuon = $database->loadObjectList();

        // Đã trả
       $query = "SELECT a.*,  b.tensach, c.fullname FROM e4_muonsach a
                LEFT JOIN e4_book b ON b.id = a.id_sach
                LEFT JOIN e4_users c ON c.id = a.id_sinhvien". $where."
                 AND status = 1;";
        $database->setQuery($query);
        $sachdatra = $database->loadObjectList();

        // Đã mất
        $query = "SELECT a.*,  b.tensach, c.fullname FROM e4_muonsach a
                LEFT JOIN e4_book b ON b.id = a.id_sach
                LEFT JOIN e4_users c ON c.id = a.id_sinhvien". $where."
                 AND status = 2;";
        $database->setQuery($query);
        $sachdamat = $database->loadObjectList();

        // Đã hết hạn
        $query = "SELECT a.*,  b.tensach, c.fullname FROM e4_muonsach a
                LEFT JOIN e4_book b ON b.id = a.id_sach
                LEFT JOIN e4_users c ON c.id = a.id_sinhvien". $where."
                 AND status = 3;";
        $database->setQuery($query);
        $sachquahan = $database->loadObjectList();

        // Thông kê sách quá hạn
        $query = "SELECT a.*,  b.tensach, c.fullname FROM e4_muonsach a
                LEFT JOIN e4_book b ON b.id = a.id_sach
                LEFT JOIN e4_users c ON c.id = a.id_sinhvien
                WHERE ($time - time_update > (20 * 86400)) AND status = 0;";
        $database->setQuery($query);
        $sachhethan = $database->loadObjectList();

        // Tự động cập nhập sách quá hạn (Mượn sau 30 ngày)

        $query = "UPDATE e4_muonsach SET status = 3 WHERE ($time - time_update > (20 * 86400))";
        $database->setQuery($query);
        $database->query();

        View::index($sachdangmuon,$sachhethan,$sachdatra, $sachdamat, $sachquahan);
    }
}
