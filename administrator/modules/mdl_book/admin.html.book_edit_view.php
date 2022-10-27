<?php
global $ariacms;

$src = 'templates/aptcms/dist/img/noimage.png';
if($book_detail['image']){
    $src = $book_detail['image'];
}

?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" action="?module=book&task=book_edit&id=<?= $book_detail['id'] ?>" name="book_edit" id="book_edit" class="form-horizontal">
				<div class="box">
					<div class="box-body ">
						<div class="nav-tabs-custom">
							<div class="tab-content">
								<div class="active tab-pane" id="info_general">
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <input class="form-control" name="id" id="id" type="hidden" required value="<?=$book_detail['id']?>" />
                                                    <label class="" for="tensach">Tên sách <span class="text-red">*</span></label>
                                                    <input class="form-control" name="tensach" id="tensach" type="text" required value="<?=$book_detail['tensach']?>"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <label class="" for="image">Ảnh đại diện<span class="text-red">*</span>:</label>
                                                    <img style="height:75px;" id="newimage" txthide="image" class="choiceImg cursor margin" src="<?= $src?>"  onclick="openPopupImg('image')" data-toggle="tooltip" title="Nhấn để chọn ảnh đại diện" />
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <input class="form-control " id="image" name="image" type="text" placeholder="Đường dẫn ảnh..." value="<?= $src?>" required />
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label for="content_vi" class="">Mô tả</label>
                                                    <textarea class="form-control ckeditor" name="mota" id="mota"><?=$book_detail['mota']?></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="" for="masach">Mã sản phẩm<span class="text-red">*</span><em class="text-red" id="result_masach"></em></label>
                                                    <input class="form-control" name="masach" id="masach" type="text" value="<?=$book_detail['masach']?>" required onchange="check_value_exist2('', '#masach', 'e4_book', 'masach', '#result_masach', 'Mã sách', 'btn_submit');" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="" for="giasach">Giá sách<span class="text-red">*</span></label>
                                                    <input class="form-control" name="giasach" id="giasach" type="number" value="<?=$book_detail['giasach']?>" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="" for="soluong">Số lượng<span class="text-red">*</span></label>
                                                    <input class="form-control" name="soluong" id="soluong" type="number" value="<?=$book_detail['soluong']?>" required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="">Danh mục sách <span class="text-red">*</span></label>
                                                    <select class="form-control select2" id="danhmucsach" name="danhmucsach"  data-placeholder="Chọn danh mục..." style="width: 100%;" required>
                                                        <option value="">- Chọn -</option>
                                                        <?php
                                                        foreach ($book_category as $value) {?>
                                                            <option <?php if($value->id == $book_detail['danhmucsach']) echo "selected"?> value="<?= $value->id ?>"><?= $value->tieude ?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="">Tác giả <span class="text-red">*</span></label>
                                                    <select class="form-control select2" id="tacgia" name="tacgia"  data-placeholder="Chọn tác giả..." style="width: 100%;" required>
                                                        <option value="">- Chọn -</option>
                                                        <?php
                                                        foreach ($book_author as $value) {?>
                                                            <option  <?php if($value->id == $book_detail['tacgia']) echo "selected"?> value="<?= $value->id ?>"><?= $value->tentacgia?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="">Nhà xuất bản<span class="text-red">*</span></label>
                                                    <select class="form-control select2" id="nhaxuatban" name="nhaxuatban"  data-placeholder="Chọn nhà xuất bản..." style="width: 100%;" required>
                                                        <option value="">- Chọn -</option>
                                                        <?php
                                                        foreach ($book_nxb as $value) {?>
                                                            <option  <?php if($value->id == $book_detail['nhaxuatban']) echo "selected"?> value="<?= $value->id ?>"><?= $value->tennhaxuatban?></option>
                                                        <?php }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
								</div>

							</div>
						</div>
					</div><!-- /.box-body -->
					<div class="box-footer">
						<div class="form-group">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary" id="btn_submit" name="submit" value="book_edit">Cập nhật</button>
							</div>
						</div>
					</div>
				</div><!-- /.box -->
			</form>
		</div><!-- /.col -->
	</div><!-- /.row -->
</section>
<style>
    div.ck-editor__editable {
        height: 200px !important;
        overflow: scroll;
    }
</style>
<script>
    function check_value_exist2(value, input, t, c, id_result, error, id_btn) {
        var input = $(input).val();
        var _url = "ajax/ajax.check_value_exist.php";
        $.ajax({
            url: _url,
            data: "input=" + input + "&t=" + t + "&c=" + c + "&error=" + error + "&value=" + value,
            cache: false,
            context: document.body,
            success: function(data) {
                $(id_result).html(data);
                if(data.includes("đã tồn tại")){
                    $(id_btn).disabled = true;
                }else{
                    $(id_btn).disabled = false;
                }
            }
        });
    }
</script>