<?php
session_start();
if (file_exists("../../../configuration.php")) {
    require_once("../../../configuration.php");
} else {
    echo "Missing Configuration File";
    exit();
}
//Include Database Controller
if (file_exists("../../../include/database.php")) {
    require_once("../../../include/database.php");
} else {
    echo "Missing Database File";
    exit();
}
//Include System File
if (file_exists("../../../include/ariacms.php")) {
    require_once("../../../include/ariacms.php");
} else {
    echo "Missing System File";
    exit();
}
$database = new database($ariaConfig_server, $ariaConfig_username, $ariaConfig_password, $ariaConfig_database);
$ariacms = new ariacms();

$id_user = $_REQUEST['id'];

$query = "SELECT * FROM `e4_users`  WHERE user_type = 'admin' and permission = 10 ORDER BY id DESC";
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
            ORDER BY time_update DESC;";
$database->setQuery($query);
$lists = $database->loadObjectList();

/** Check thanh toán mượn sách trong năm hiện tại hay chưa */
$namhientai = date('Y');
$date_start = strtotime($namhientai.'-1-1');
$date_end   = strtotime(($namhientai+1).'-1-1');

$query = "SELECT * FROM `e4_thanhtoan` WHERE (time_update > {$date_start} AND time_update < {$date_end}) AND id_user =  ". $id_user;
$database->setQuery($query);
$check = $database->loadObjectList();

$checkthanhtoan = True;
if(!$check || $detail['notiensach'] > 0) $checkthanhtoan = False;
?>
<section class="content" id="phieumuon">
    <div class="row">
        <div class="col-md-4">
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <h3 class="profile-username text-center">Thông tin sinh viên</h3>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <label for="status">Sinh viên:</label>
                            <select id="sinhvien" name="sinhvien" class="form-control select2" onchange="getDataStudent()">
                                <option value=""> - Chọn -</option>>
                                <?php foreach ($student as $value){?>
                                    <option value="<?= $value -> id?>" <?php if($id_user == $value -> id) echo 'selected'?>><?= $value -> masv ."-" . $value -> fullname?></option>
                                <?php }?>
                            </select>
                            <img src="../templates/emac/images/loading-icon.gif" style="width: 50%;display: none" class="text-center" id="loading" >
                        </li>
                        <li class="list-group-item">
                            Lớp
                            <a class="pull-right"><?php echo $detail['lop'] ?></a>
                        </li>
                        <li class="list-group-item">
                            khoa
                            <a class="pull-right"><?php echo $detail['khoa'] ?></a>
                        </li>
                        <li class="list-group-item">
                            Mail
                            <a class="pull-right"><?php echo $detail['email'] ?></a>
                        </li>

                    </ul>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

        <div class="col-md-8">

            <div class="box">
                <div class="box-header">
                    <h4 class="pull-left">Danh sách mượn sách mới</h4>
                    <button class="btn btn-warning pull-right" onclick="addRow()">Thêm dòng mới <i class="fa fa-plus"></i></button>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <form method="post" action="index.php?module=cart&task=cart_add">
                        <input type="hidden" name="id_sinhvien" value="<?= $detail['id']?>">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th class="col-md-3">Mã sách/Tên sách</th>
                                <th class="col-md-2">Hình ảnh</th>
                                <th class="col-md-2">Giá sách</th>
                                <th class="col-md-2">Trạng thái</th>
                                <th class="col-md-2">Số lượng còn</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>

                            <tbody id="table_frames">

                            <tr class="valign-middle" id="row0">
                                <td>1</td>
                                <td>
                                    <select id="idsach0" name="id_sach[]" class="form-control select2" onchange="chooseBook(0)" required>
                                        <option value="">-Chọn sách-</option>
                                        <?php foreach ($books as $value){?>
                                            <option  value="<?= $value -> id?>" <?php if($value -> soluong < 1) echo "disabled"?>><?= $value -> masach .'-'. $value -> tensach?></option>
                                        <?php }?>
                                    </select>
                                </td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a onclick="delete_img(0)"><i class="fa fa-trash text-red" data-toggle="tooltip" title="Xóa" data-original-title="Xóa"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <button class="btn btn-success pull-right" name="submitCart" value="submit" type="submit" >Thêm vào danh sách</button>
                    </form>
                </div><!-- /.box-body -->
            </div>
            <?php if($lists){?>
            <div class="box">
                <div class="box-header">
                    <h4 class="pull-left">Danh sách mượn - trả sách</h4>
                    <h4 class="pull-right text-danger">Tổng tiền nợ sách báo mất: <?= $ariacms->formatPrice($detail['notiensach']) ?></h4>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <form method="post" action="index.php?module=cart&task=cart_edit&id_detail=<?= $value->id ?>">
                        <button class="btn btn-primary pull-right" type="submit" name="submit" value="update">Cập nhật thay đổi</i></button>
                        <input type="hidden" name="submitCart" value="cart_edit_detail">
                        <input type="" class="form-control" name="id_change" value="" id="id_change" placeholder="Danh sách thay đổi trạng thái"  >
                        <input type="hidden" name="id_user" value="<?=$detail['id']?>" id="id_user" >
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã sách/Tên sách</th>
                                <th >Hình ảnh</th>
                                <th >Giá sách</th>
                                <th >Trạng thái</th>
                                <th >Số lượng</th>
                                <th >Thời gian</th>
                                <!--                                <th>Thao tác</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            $sum = 0;
                            $total = 0;
                            foreach ($lists as $value) {
                                $i++;
                                $total  += $sum;
                                ?>
                                <tr class="<?= ($i % 2 == 1) ? 'bg-gray-light' : ''; ?> valign-middle">
                                    <input type="hidden" name="muonsach[<?= $i - 1?>][id]" value="<?= $value -> id?>">
                                    <input type="hidden" name="muonsach[<?= $i - 1?>][status_old]" value="<?= $value -> status?>">
                                    <input type="hidden" name="muonsach[<?= $i - 1?>][giasach]" value="<?= $value -> giasach?>">
                                    <input type="hidden" name="muonsach[<?= $i - 1?>][id_sach]" value="<?= $value -> id_sach?>">
                                    <td><?=$i?></td>
                                    <td>
                                        <?= $value->masach .'<br>'.$value->tensach ?>
                                    </td>
                                    <td>
                                        <img src="<?= $value->image ?>" style="height:100px" />
                                    </td>
                                    <td>
                                        <?= $value->giasach ?>
                                    </td>
                                    <td>
                                        <select id="status" name="muonsach[<?= $i - 1?>][status_new]" class="form-control select2" onchange="change(<?= $i - 1?>)">
                                            <option <?= ($value->status == '0') ? 'selected' : ''; ?> value="0">Đang mượn</option>
                                            <option <?= ($value->status == '1') ? 'selected' : ''; ?> value="1">Đã trả</option>
                                            <option <?= ($value->status == '2') ? 'selected' : ''; ?> value="2">Báo mất</option>
                                            <option <?= ($value->status == '3') ? 'selected' : ''; ?> value="3">Quá hạn</option>
                                        </select>
                                    </td>
                                    <td><?= $value->soluong ?></td>
                                    <td><?= Date("H:i:s d/m/Y", $value->time_update ) ?></td>
                                    <!--td>
                                            <a href="?module=cart&task=cart_delete&id_detail=<?= $value->id ?>" onclick="return confirmAction();"><i class="fa fa-trash text-red" data-toggle="tooltip" title="Xóa" data-original-title="Xóa"></i></a>
                                            <input class="hidden" name="submitDetail" type="submit">
                                        </td -->
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        <button class="btn btn-primary pull-right" type="submit" name="submit" value="update">Cập nhật thay đổi</i></button>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <?php }?>
        </div><!-- /.col -->
    </div><!-- /.row -->
</section>
