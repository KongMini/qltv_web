<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" action="?module=student&task=student_edit&id=<?= $student['id'] ?>" name="form_student_edit" id="form_student_edit" class="form-horizontal" onSubmit="return checkInput();">
				<div class="box">
					<div class="box-body ">
						<div class="nav-tabs-custom">
                            <div class="tab-content">
                                <div class="active tab-pane" id="info_general">
                                    <div class="form-group">
                                        <label for="fullname" class="col-sm-6 col-md-6 col-lg-6">Mã SV<span class="text-red">*</span> <em class="text-red" id="result_masv"></em></label>
                                        <label for="email" class="col-sm-6 col-md-6 col-lg-6">Email <span class="text-red">*</span><em class="text-red" id="result_email"></em></label>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <input class="form-control" name="masv" id="masv" type="text" required value="<?= $student['masv']?>" onblur="check_value_exist('', '#masv', 'e4_users', 'masv', '#result_masv', 'Mã SV');" />
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <input class="form-control" name="email" id="email" type="text" value="<?= $student['email']?>" required onblur="check_value_exist('', '#email', 'e4_users', 'email', '#result_email', 'Email');" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-6 col-md-6 col-lg-6">Họ và tên <span class="text-red">*</span></label>
                                        <label for="title_en" class="col-sm-6 col-md-6 col-lg-6">Mật khẩu <span class="text-red">*</span></label>

                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <input class="form-control" name="fullname" id="fullname" type="text" required value="<?= $student['fullname']?>" required />
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <input class="form-control" name="password" type="password" id="newPassword" value="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_public" class="col-sm-6 col-md-6 col-lg-6">Lớp<span class="text-red">*</span> </label>
                                        <label for="title_en" class="col-sm-6 col-md-6 col-lg-6">Nhập lại mật khẩu <span class="text-red">*</span></label>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <input class="form-control" name="lop" id="lop" type="text" required value="<?= $student['lop']?>" required/>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <input class="form-control" type="password" id="confirmPassword" name="repassword" value="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dienthoai" class="col-sm-6 col-md-6 col-lg-6">Điện thoại<span class="text-red">*</span> </label>
                                        <label for="facebook" class="col-sm-6 col-md-6 col-lg-6">Facebook<span class="text-red">*</span> </label>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <input class="form-control" name="dienthoai" id="dienthoai" type="text" value="<?= $student['dienthoai']?>"/>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <input class="form-control" name="facebook" id="facebook" type="text" value="<?= $student['facebook']?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label for="meta_brief">Khoa <span class="text-red">*</span> </label>
                                            <input class="form-control" name="khoa" id="khoa" type="text" value="<?= $student['khoa']?>" required/>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label for="image_url">Ảnh đại diện
                                                <img style="height:75px;" id="newimage" txthide="image" class="choiceImg cursor margin" src="templates/aptcms/dist/img/noimage.png"  onclick="openPopupImg('image')" data-toggle="tooltip" title="Nhấn để chọn ảnh đại diện"  />
                                            </label>
                                            <input class="form-control " id="image" name="image_url" type="text" placeholder="Đường dẫn ảnh..." value="<?= $student['image_url']?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div><!-- /.box-body -->
					<div class="box-footer">
						<div class="form-group">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary" name="submit" value="student_edit">Cập nhật</button>
							</div>
						</div>
					</div>
				</div><!-- /.box -->
			</form>
		</div><!-- /.col -->
	</div><!-- /.row -->
</section>
<script>
	function checkInput() {
		if ((document.form_student_edit.newPassword.value) != (document.form_student_edit.confirmPassword.value)) {
			alert("Mật khẩu không trùng khớp!");
			document.form_student_edit.confirmPassword.focus();
			return false;
		}
		return true;
	}
</script>