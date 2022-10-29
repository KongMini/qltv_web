<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" action="?module=user&task=user_edit&id=<?= $user['id'] ?>" name="form_user_edit" id="form_user_edit" class="form-horizontal" onSubmit="return checkInput();">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">Thông tin chi tiết bài viết</h4>
					</div><!-- /.box-header -->
					<div class="box-body ">
						<div class="nav-tabs-custom">

							<div class="tab-content">
								<div class="active tab-pane" id="info_general">
									<div class="form-group">
										<label for="fullname" class="col-sm-6 col-md-6 col-lg-6">Họ và tên <span class="text-red">*</span></label>
										<label for="email" class="col-sm-6 col-md-6 col-lg-6">Account <span class="text-red">*</span><em class="text-red" id="result_email"></em></label>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<input class="form-control" name="fullname" id="fullname" type="text" required value="<?= $user["fullname"] ?>" />
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<input class="form-control" name="email" id="email" type="text" value="<?= $user["email"] ?>" required onblur="check_value_exist('<?= $user['email'] ?>', '#email', 'e4_users', 'email', '#result_email', 'Email');" />
										</div>
									</div>

									<div class="form-group">
										<label for="password" class="col-sm-6 col-md-6 col-lg-6">Mật khẩu</label>
										<label for="title_en" class="col-sm-6 col-md-6 col-lg-6">Nhập lại mật khẩu</label>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<input class="form-control" name="password" type="password" id="newPassword" value="" placeholder="Để trống nếu không muốn thay đổi mật khẩu cũ..." />
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<input class="form-control" type="password" id="confirmPassword" value="" placeholder="Để trống nếu không muốn thay đổi mật khẩu cũ..." />
										</div>
									</div>

									<div class="form-group ">
										<label for="user_type" class="col-sm-6 col-md-6 col-lg-6">Tại khoản hệ thống <span class="text-red">*</span></label>
										<label for="permission" class="col-sm-6 col-md-6 col-lg-6">Nhóm quyền <span class="text-red">*</span></label>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<select class="form-control" name="user_type" id="user_type" required>
												<option value='admin' <?= ($user["user_type"] == 'admin') ? 'selected' : "" ?>>Admin Web</option>
											</select>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<select class="form-control" name="permission" id="permission" required>
												<option value="">Vui lòng chọn</option>
												<?php
												foreach ($roles as $role) {
													if ($role->id == $user["permission"]) $sl = 'selected="selected"';
													else $sl = '';
													echo '<option value=' . $role->id . ' ' . $sl . '>- - ' . $role->role_code . '</option>';
												}
												?>
											</select>
										</div>
									</div>

									<div class="form-group hidden">
										<label for="status_public" class="col-sm-6 col-md-6 col-lg-6">Nhóm người dùng</label>
										<label for="publish" class="col-sm-6 col-md-6 col-lg-6">Trạng thái sử dụng</label>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<select class="form-control" name="status_public" id="status_public">
												<option value="">Người dùng mặc định</option>
											</select>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<select class="form-control" name="publish" id="publish">
												<option value="">Vui lòng chọn</option>
												<option value='0' <?= ($user["publish"] == '0') ? 'selected' : "" ?>>Chưa kích hoạt</option>
												<option value='1' <?= ($user["publish"] == '1') ? 'selected' : "" ?>>Đang sử dụng</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-6 col-md-6 col-lg-6">
											<label for="meta_brief">Giới thiệu ngắn</label>
											<textarea class="form-control" rows="5" name="meta_brief" id="meta_brief" placeholder="Tóm tắt giới thiệu..."><?= $user["meta"]->meta_brief ?></textarea>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<label for="image_url">Ảnh đại diện
												<?php if ($user['image_url'] != '') { ?>
													<img style="height:75px;" id="image" txthide="image_url" class="choiceImg cursor margin" src="<?php echo $user['image_url'] ?>" onclick="openPopupImg('image')" data-toggle="tooltip" title="Nhấn để đổi ảnh đại diện" />
												<?php } else { ?>
													<img style="height:75px;" id="image" txthide="image_url" class="choiceImg cursor margin" src="templates/aptcms/dist/img/no-image.png" onclick="openPopupImg('image')" data-toggle="tooltip" title="Nhấn để chọn ảnh đại diện" />
												<?php } ?>
											</label>
											<input class="form-control" id="image_url" name="image_url" type="text" placeholder="Đường dẫn ảnh..." value="<?= $user["image_url"] ?>" />
										</div>
									</div>
                                    <div class="form-group">
                                        <label for="mobifone" class="col-sm-6 col-md-6 col-lg-6">Điện thoại</label>
                                        <label for="facebook" class="col-sm-6 col-md-6 col-lg-6">Facebook</label>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <input class="form-control" name="mobifone" id="mobifone" type="text" value="<?= $user["mobifone"] ?>" />
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <input class="form-control" name="facebook" id="facebook" type="text" value="<?= $user["facebook"] ?>" />
                                        </div>
                                    </div>
								</div>



							</div>
						</div>
					</div><!-- /.box-body -->
					<div class="box-footer">
						<div class="form-group">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary" name="submit" value="user_edit">Cập nhật</button>
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
		if ((document.form_user_edit.newPassword.value) != (document.form_user_edit.confirmPassword.value)) {
			alert("Mật khẩu không trùng khớp!");
			document.form_user_edit.confirmPassword.focus();
			return false;
		}
		return true;
	}
</script>