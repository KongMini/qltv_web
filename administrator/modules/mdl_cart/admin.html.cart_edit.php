<?php
global $ariacms;

$checkthanhtoan = True;
if(!$check || $detail['notiensach'] > 0) $checkthanhtoan = False;

?>
<input type="hidden" id="id_danhsachmuon" value="1">
<section class="content" id="phieumuon">
    <div class="row">
        <div class="col-md-4">
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <h3 class="profile-username text-center">Thông tin sinh viên</h3>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            Sinh viên
                            <a class="pull-right"><?php echo $detail['masv']  ."-" . $detail['fullname']?></a>
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
                                <th class="col-md-2">Số lượng</th>
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
                                            <option  value="<?= $value -> id?>"><?= $value -> masach .'-'. $value -> tensach?></option>
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
                        <?php if(!$checkthanhtoan){?>
                        <h4 class="pull-left text-danger">Sinh viên cần thanh toán tiền mượn sách năm <?= date('Y')?> hoặc tiền nợ sách báo mất để thực hiện mượn sách</h4>
                        <?php }?>
                        <button class="btn btn-success pull-right" name="submitCart" value="submit" type="submit" <?php if(!$checkthanhtoan) echo'disabled'?>>Thêm vào danh sách</button>
                    </form>
                </div><!-- /.box-body -->
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</section>

<script>

    function change(id){
        var input_id_change = document.getElementById('id_change').value;
        document.getElementById('id_change').value = input_id_change + id + ",";
    }

    function chooseBook(id){
        var id_book = document.getElementById('idsach'+id).value;
        var _url = "ajax/cart/ajax.cart_get_book.php";
        $.ajax({
            url: _url,
            data: "id=" + id + '&id_book=' + id_book,
            cache: false,
            context: document.body,
            success: function(data) {
                $('#row'+id).html(data);
                $('.select2').select2();
            }
        });
    }


    function addRow(){
        var id = document.getElementById('id_danhsachmuon').value * 1.0;
        $("#table_frames")
            .append('<tr class="valign-middle" id ="row'+ id +'">' +
                '<td>' +(id + 1)+'</td>' +
                '<td>'+
                '<select id="idsach'+id +'" name="id_sach[]" class="form-control select2" onchange="chooseBook('+id+')">' +
                '<option value="">-Chọn sách-</option>' +
                '<?php foreach ($books as $value){
                    echo '<option value="' . $value->id . '"> ' .$value->masach .'-'. $value->tensach . '</option>';
                }?>' +
                '</select>' +
                '</td>' +
                '<td></td>' +
                '<td></td>' +
                '<td></td>' +
                '<td></td>' +
                '<td> <a onclick="delete_img('+id+')"><i class="fa fa-trash text-red" data-toggle="tooltip" title="Xóa" data-original-title="Xóa"></i></a></td>' +
                '</tr>');
        $('.select2').select2();
        document.getElementById('id_danhsachmuon').value = id + 1;
    }

    function delete_img(id){
        if(confirm("Bạn có muốn mục này")){
            $("#"+id).remove();
            document.getElementById('remove').value  += ","+id;
        }
    }
</script>