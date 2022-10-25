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
							<ul class="nav nav-tabs">
								<li class="active"><a aria-expanded="true" href="#info_general" data-toggle="tab">Thông tin cơ bản <font class="text-red">*</font></a></li>
								<li><a aria-expanded="false" href="#info_document" data-toggle="tab">Thông tin mở rộng</a></li>
								<li class="pull-right"><button type="submit" class="btn btn-primary" name="submit" value="user_edit">Cập nhật</button></li>
							</ul>
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

									<div class="form-group">
										<label for="user_type" class="col-sm-6 col-md-6 col-lg-6">Tại khoản hệ thống <span class="text-red">*</span></label>
										<label for="permission" class="col-sm-6 col-md-6 col-lg-6">Nhóm quyền <span class="text-red">*</span></label>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<select class="form-control" name="user_type" id="user_type" required>
												<option value="">Vui lòng chọn</option>
												<option value='admin' <?= ($user["user_type"] == 'admin') ? 'selected' : "" ?>>Admin Web</option>
												<option value='public' <?= ($user["user_type"] == 'public') ? 'selected' : "" ?>>Public Web</option>
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

									<div class="form-group">
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
													<img style="height:75px;" id="newImg" txthide="image_url" class="choiceImg cursor margin" src="<?php echo $user['image_url'] ?>" onclick="fcall.fcChoiceImg(this);" data-toggle="tooltip" title="Nhấn để đổi ảnh đại diện" />
												<?php } else { ?>
													<img style="height:75px;" id="newImg" txthide="image_url" class="choiceImg cursor margin" src="templates/aptcms/dist/img/no-image.png" onclick="fcall.fcChoiceImg(this);" data-toggle="tooltip" title="Nhấn để chọn ảnh đại diện" />
												<?php } ?>
											</label>
											<input class="form-control" id="image_url" name="image_url" type="text" placeholder="Đường dẫn ảnh..." value="<?= $user["image_url"] ?>" />
										</div>
									</div>

								</div>

								<div class=" tab-pane" id="info_document">
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

									<!-- <div class="form-group">
										<div class="col-md-12">
											<label>Gắn thẻ - tags
												<input value="" type="text" placeholder="Thêm tags..." id="tags_title">
												<button type="button" id="btn_add_tags" class="btn btn-sm btn-warning">Thêm</button>
											</label>
											<select class="form-control select2" id="post_tags" name="taxonomy[]" multiple="multiple" data-placeholder="Chọn danh mục..." style="width: 100%;">
												<?php
												foreach ($taxonomies as $taxonomy) {
													if ($taxonomy->taxonomy == 'post_tags' && $taxonomy->parent == 0) {
														$selected = (in_array($taxonomy->id, $term_taxonomy_id_list)) ? 'selected' : '';
														echo '<option ' . $selected . ' value="' . $taxonomy->id . '">' . $taxonomy->title_vi . '</option>';
														if ($taxonomy->sub > 0) {
															foreach ($taxonomies as $taxonomy_sub) {
																if ($taxonomy->id == $taxonomy_sub->parent) {
																	$selected = (in_array($taxonomy_sub->id, $term_taxonomy_id_list)) ? 'selected' : '';
																	echo '<option ' . $selected . ' value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
																}
															}
														}
													}
												}
												?>
											</select>
										</div>
									</div> -->

									<div class="form-group">
										<label for="meta_content" class="col-sm-12 col-md-12 col-lg-12">Giới thiệu chi tiết</label>
										<div class="col-sm-12 col-md-12 col-lg-12">
											<textarea class="form-control" name="meta_content" id="meta_content"><?= $user["meta"]->meta_content ?></textarea>
										</div>
										<script type="text/javascript">
											CKEDITOR.replace('meta_content', {
												// Reset toolbar settings, so full toolbar will be generated automatically.
												removeButtons: null,
												height: 450,
												entities: false,
												fullPage: true,
												// Image browser
												filebrowserImageBrowseUrl: filemanageUrl,
												filebrowserImageUploadUrl: filemanageUrl,
												// allow style and css
												allowedContent: true,
												// auto wrap content in p tag
												autoParagraph: false
											});
										</script>
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
	/** Add tags */
	$("#btn_add_tags").click(function() {
		var tags = $("#tags_title").val();
		if (tags.trim() == '') return;
		var _url = "ajax/user/ajax.user_add_tags.php";
		$.ajax({
			url: _url,
			data: "tags=" + tags,
			cache: false,
			context: document.body,
			success: function(data) {
				var obj = JSON.parse(data);
				var appendContent;
				if (obj.exist) {
					/** Tags is exist in DB */
					$("#post_tags option[value='" + obj.id + "']").prop('selected', true);
				} else if (!obj.exist) {
					/** Tags is created */
					appendContent = '<option value="' + obj.id + '" selected>' + obj.title_vi + '</option>';
					$("#post_tags").append(appendContent);
				} else {
					console.log("Has error in progress update DB");
				}
				$("#post_tags").select2();
			}
		});
	});
	$("#tags_title").keypress(function(event) {
		// Number 13 is the "Enter" key on the keyboard
		if (event.keyCode === 13) {
			// Cancel the default action, if needed
			event.preventDefault();
			$("#btn_add_tags").click();
		}
	});
</script>