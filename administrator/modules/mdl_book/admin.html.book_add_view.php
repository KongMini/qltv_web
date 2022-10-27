<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" action="?module=book&task=book_add" name="book_add" id="book_add" class="form-horizontal">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">Thêm thông tin sách</h4>
					</div><!-- /.box-header -->
					<div class="box-body ">
						<div class="nav-tabs-custom">

							<div class="tab-content">
								<div class="active tab-pane" id="info_general">
									<div class="form-group">
										<div class="col-md-8">
											<div class="form-group">
												<div class="col-md-12">
													<label class="" for="tensach">Tên sách <span class="text-red">*</span></label>
													<input class="form-control" name="tensach" id="tensach" type="text" required value="" />
												</div>

											</div>
											<div class="form-group">
												<div class="col-sm-6 col-md-6 col-lg-6">
													<label class="" for="image">Ảnh đại diện<span class="text-red">*</span>:</label>
													<img style="height:75px;" id="newimage" txthide="image" class="choiceImg cursor margin" src="templates/aptcms/dist/img/noimage.png"  onclick="openPopupImg('image')" data-toggle="tooltip" title="Nhấn để chọn ảnh đại diện" />
													</div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <input class="form-control " id="image" name="image" type="text" placeholder="Đường dẫn ảnh..." value="" required />
                                                </div>
											</div>

											<div class="form-group">

												<div class="col-md-12">
													<label for="mota" class="">Mô tả</label>
													<textarea class="form-control ckeditor" name="mota" id="mota"></textarea>
												</div>
											</div>

										</div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="" for="masach">Mã sản phẩm<span class="text-red">*</span><em class="text-red" id="result_masach"></em></label>
                                                    <input class="form-control" name="masach" id="masach" type="text" value="" required onkeyup="check_value_exist2('', '#masach', 'e4_book', 'masach', '#result_masach', 'Mã sách');" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="" for="giasach">Giá sách<span class="text-red">*</span></label>
                                                    <input class="form-control" name="giasach" id="giasach" type="number" value="" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="" for="soluong">Số lượng<span class="text-red">*</span></label>
                                                    <input class="form-control" name="soluong" id="soluong" type="number" value="" required/>
                                                </div>
                                            </div>
											<div class="form-group">
												<div class="col-md-12">
													<label class="">Danh mục sách <span class="text-red">*</span></label>
													<select class="form-control select2" id="danhmucsach" name="danhmucsach"  data-placeholder="Chọn danh mục..." style="width: 100%;" required>
                                                        <option value="">- Chọn -</option>
                                                        <?php
                                                        foreach ($book_category as $value) {
                                                            echo '<option value="' . $value->id . '">' . $value->tieude . '</option>';
                                                        }
                                                        ?>
													</select>
												</div>
											</div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="">Tác giả <span class="text-red">*</span></label>
                                                    <select class="form-control select2" id="tacgia" name="tacgia"  data-placeholder="Chọn tác giả..." style="width: 100%;" required>
                                                        <option value="">- Chọn -</option>
                                                        <?php
                                                        foreach ($book_author as $value) {
                                                                echo '<option value="' . $value->id . '">' . $value->tentacgia . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="">Nhà xuất bản<span class="text-red">*</span></label>
                                                    <select class="form-control select2" id="nhaxuatban" name="nhaxuatban"  data-placeholder="Chọn nhà xuất bản..." style="width: 100%;" required>
                                                        <option value="">- Chọn -</option>
                                                        <?php
                                                        foreach ($book_nxb as $value) {
                                                            echo '<option value="' . $value->id . '">' . $value->tennhaxuatban . '</option>';
                                                        }
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
								<button type="submit" class="btn btn-primary" id="btn_submit" name="submit" value="book_add">Cập nhật</button>
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
    function check_value_exist2(value, input, t, c, id_result, error) {
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
                    document.getElementById("btn_submit").disabled = true;
                }else{
                    document.getElementById("btn_submit").disabled = false;
                }
            }
        });
    }
</script>