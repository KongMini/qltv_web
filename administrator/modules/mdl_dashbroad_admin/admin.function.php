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

        // Thông kê sách 1 ngày
        $query = "SELECT COUNT(id) as statu, status FROM `e4_muonsach` where time_update > ".($time - 86400). "GROUP By status;";
        $database->setQuery($query);
        $thongkesach1ngay = $database->loadObjectList();

        // Thông kê sách 1 tuần
        $query = "SELECT COUNT(id) as statu, status FROM `e4_muonsach` where time_update > ".($time - 7 * 86400). "GROUP By status;";
        $database->setQuery($query);
        $thongkesach1tuan = $database->loadObjectList();

        // Thông kê sách 1 tháng
        $query = "SELECT COUNT(id) as statu, status FROM `e4_muonsach` where time_update > ".($time - 30 * 86400). "GROUP By status;";
        $database->setQuery($query);
        $thongkesach1thang = $database->loadObjectList();

        // Thông kê sách 1 năm
        $query = "SELECT COUNT(id) as statu, status FROM `e4_muonsach` where time_update > ".($time - 365 * 86400)." GROUP By status;";
        $database->setQuery($query);
        $thongkesach1nam = $database->loadObjectList();



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

        View::index($thongkesach1nam,$sachhethan,$thongkesach1ngay, $thongkesach1tuan, $thongkesach1thang);
    }
}
