<?php
global $ariacms;
global $database;

$query = "SELECT * FROM `e4_book`   ORDER BY id DESC";
$database->setQuery($query);
$books = $database->loadObjectList();
?>
<input type="hidden" id="id_danhsachmuon" value="0">
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
                                    <option value="<?= $value -> id?>" ><?= $value -> masv ."-" . $value -> fullname?></option>
                                <?php }?>
                            </select>
                            <a type="button" href="index.php?module=student&task=student_add&cart=1" id="btn_add_dms" class="btn btn-sm btn-primary" >Thêm sinh viên</a>

                            <img src="../templates/emac/images/loading-icon.gif" style="width: 50%;display: none" class="text-center" id="loading" >

                        </li>

                    </ul>


                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h4 class="pull-left">Tìm kiếm sách</h4>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <form method="" action="">

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th class="col-md-3">Mã sách/Tên sách</th>
                                <th class="col-md-2">Hình ảnh</th>
                                <th class="col-md-2">Giá sách</th>
                                <th class="col-md-2">Trạng thái</th>
                                <th class="col-md-2">Số lượng còn</th>
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

                            </tr>
                            </tbody>
                        </table>
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


    function getDataStudent(){
        var id = document.getElementById("sinhvien").value;
        var _url = "ajax/cart/ajax.cart_get_infor.php";
        $("#sinhvien").disabled = true;
        document.getElementById('sinhvien').disabled = true;
        document.getElementById('loading').style.display = 'block';
        $.ajax({
            url: _url,
            data: "id=" + id,
            cache: false,
            context: document.body,
            success: function(data) {
                $('#phieumuon').html(data);
                $('.select2').select2();
                document.getElementById('loading').style.display = 'none';
                $("#sinhvien").disabled = false;

                document.getElementById('id_danhsachmuon').value = 1;
            }
        });
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