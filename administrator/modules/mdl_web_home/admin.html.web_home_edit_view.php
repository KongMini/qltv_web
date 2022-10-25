<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" action="?module=web_home&task=web_home_edit&id=<?= $detail['id'] ?>" name="web_home_edit" id="web_home_edit" class="form-horizontal">
				<div class="box">
					<div class="box-body ">
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
								<li class="active"><a aria-expanded="true" href="#info_general" data-toggle="tab">Thông tin chi tiết cấu hình <font class="text-red">*</font></a></li>
								<li class="pull-right"><button type="submit" class="btn btn-primary" name="submit" value="web_home_edit">Cập nhật</button></li>
							</ul>
							<div class="tab-content">
								<div class="active tab-pane" id="info_general">
									<div class="form-group">
										<div class="col-md-9">
											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="title_vi">Tiêu đề <span class="text-red">*</span></label>
													<input class="form-control" name="title_vi" id="title_vi" type="text" required value='<?= $detail['title_vi'] ?>' />
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="brief_vi">Giới thiệu</label>
													<textarea class="form-control" rows="3" name="brief_vi" id="brief_vi" placeholder="Tóm tắt giới thiệu bản tin..."><?= $detail['brief_vi'] ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="content_vi" class="text-danger col-sm-12 col-md-12 col-lg-12">Nội dung Tiếng Việt</label>
												<div class="col-sm-12 col-md-12 col-lg-12">
													<textarea class="form-control" name="content_vi" id="content_vi"><?= $detail['content_vi'] ?></textarea>
												</div>
												<script type="text/javascript">
													CKEDITOR.replace('content_vi', {
														// Reset toolbar settings, so full toolbar will be generated automatically.
														removeButtons: null,
														height: 500,
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
										<div class="col-md-3">
											<div class="form-group">
												<div class="col-md-12">
													<label for="parent_id" class="text-danger">Thuộc cấu hình cha :</label>
													<select name="parent" id="parent" class="form-control select2">
														<option value="0">Vui lòng chọn</option>
														<?php echo  $ariacms->printMenuOption('e4_web_home', 'id', 'title_vi', '', '', $detail['parent'], ''); ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label for="link" class="text-danger">Địa chỉ nút liên kết :</label>
													<input class="form-control" name="link" id="link" type="text" value="<?php echo $detail['link'] ?>" placeholder="Địa chỉ url cho nút trong nội dung cấu hình nếu có..." />
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label for="link_name" class="text-danger">Tên nút liên kết :</label>
													<input class="form-control" name="link_name" id="link_name" type="text" value="<?php echo $detail['link_name'] ?>" placeholder="Tên hiển thị trên nút liên kết..." />
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label for="icon" class="text-danger">Vị trí mapping menu :</label>
													<input class="form-control" name="icon" id="icon" type="text" value="<?php echo $detail['icon'] ?>" placeholder="Id liên kết với menu..." />
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="status">Trạng thái và hiển thị:</label>
													<select id="status" name="status" class="form-control">
														<option value="">- Chọn -</option>
														<option <?= ($detail['status'] == 'active') ? 'selected' : ''; ?> value="active">Đã xuất bản</option>
														<option <?= ($detail['status'] == 'deactive') ? 'selected' : ''; ?> value="deactive">Không được duyệt</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label for="image" class="text-danger">Ảnh đại diện:</label>
													<?php if ($detail['image'] != '') { ?>
														<img style="height:75px;" id="newimage" txthide="image" class="choiceImg cursor margin" src="<?php echo $detail['image'] ?>" onclick="openPopupImg('image')" data-toggle="tooltip" title="Nhấn để đổi ảnh đại diện" />
													<?php } else { ?>
														<img style="height:75px;" id="newimage" txthide="image" class="choiceImg cursor margin" src="templates/aptcms/dist/img/noimage.png" onclick="openPopupImg('image')" data-toggle="tooltip" title="Nhấn để chọn ảnh đại diện" />
													<?php } ?>
													<input class="form-control " id="image" name="image" type="text" placeholder="Đường dẫn ảnh..." value="<?= $detail['image'] ?>" />
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
								<button type="submit" class="btn btn-primary" name="submit" value="web_home_edit">Cập nhật</button>
							</div>
						</div>
					</div>
				</div><!-- /.box -->
			</form>
		</div><!-- /.col -->
	</div><!-- /.row -->
</section>