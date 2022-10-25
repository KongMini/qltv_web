<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">

			<div class="box">
				<div class="box-body ">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="<?= ($_GET['tab'] == 'info_list') ? '' : 'active' ?>"><a aria-expanded="true" href="#info_general" data-toggle="tab">Thông tin chi tiết <small class="text-red">*</small></a></li>
							<li class="<?= ($_GET['tab'] == 'info_list') ? 'active' : '' ?>"><a aria-expanded="false" href="#info_list" data-toggle="tab">Danh sách link - liên kết</a></li>
						</ul>
						<div class="tab-content">
							<div class="<?= ($_GET['tab'] == 'info_list') ? '' : 'active' ?> tab-pane" id="info_general">
								<form method="POST" action="?module=web_menu&task=web_menu_edit&id=<?= $web_menu_detail['id'] ?>" name="web_menu_edit" id="web_menu_edit" class="form-horizontal">
									<div class="form-group">
										<div class="col-md-12">
											<div class="form-group">
												<div class="col-md-6">
													<label class="text-danger" for="title_vi">Tiêu đề <span class="text-red">*</span></label>
													<input class="form-control" name="title_vi" id="title_vi" type="text" required value='<?= $web_menu_detail['title_vi'] ?>' />
												</div>
												<div class="col-md-6">
													<label for="parent_id" class="text-danger">Vị trí hiển thị :</label>
													<select class="form-control" name="position" id="position">
														<option value="">Chọn vị trí</option>
														
														<option value="main" <?php echo ($web_menu_detail['position'] == 'main') ? 'selected="selected"' : '' ?>>Menu chính</option>
														<option value="left" <?php echo ($web_menu_detail['position'] == 'left') ? 'selected="selected"' : '' ?>>Menu trái</option>
														<option value="right" <?php echo ($web_menu_detail['position'] == 'right') ? 'selected="selected"' : '' ?>>Menu phải</option>
														<option value="footer" <?php echo ($web_menu_detail['position'] == 'footer') ? 'selected="selected"' : '' ?>>Cuối trang</option>
														<option value="top" <?php echo ($web_menu_detail['position'] == 'top') ? 'selected="selected"' : '' ?>>Menu phụ đầu trang</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-6">
													<label for="order" class="text-danger">Thứ tự sắp xếp :</label>
													<input class="form-control" name="order" id="order" type="text" value="<?php echo $web_menu_detail['order'] ?>" placeholder="Thứ tự sắp xếp..." />
												</div>
												<div class="col-md-6">
													<label class="text-danger" for="status">Trạng thái:</label>
													<select id="status" name="status" class="form-control">
														<option value="">- Chọn -</option>
														<option <?= ($web_menu_detail['status'] == 'active') ? 'selected' : ''; ?> value="active">Hiển thị</option>
														<option <?= ($web_menu_detail['status'] == 'deactive') ? 'selected' : ''; ?> value="deactive">Không hiển thị</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-6">
													<label class="text-danger" for="type">Kiểu hiển thị:</label>
													<select id="type" name="type" class="form-control">
														<option value="">- Chọn -</option>
														<option <?= ($web_menu_detail['type'] == 'mega') ? 'selected' : ''; ?> value="mega">Mega menu</option>
														<option <?= ($web_menu_detail['type'] == 'normal') ? 'selected' : ''; ?> value="normal">Dropdown menu</option>
													</select>
												</div>
												<div class="col-md-6">

												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label for="description" class="text-danger">Thông tin mô tả :</label>
													<textarea class="form-control" name="description" id="description" placeholder="Mô tả ngắn chức năng cho nhóm menu..."><?= $web_menu_detail['description'] ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<button type="submit" class="btn btn-primary" name="submit" value="web_menu_edit">Cập nhật</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>

							<div class="<?= ($_GET['tab'] == 'info_list') ? 'active' : '' ?> tab-pane" id="info_list">
								<form method="POST" action="?module=web_menu&task=web_link_edit&id=<?= $web_menu_detail['id'] ?>&tab=info_list" name="web_link_edit" id="web_link_edit" class="form-horizontal">
									<div class="form-group">
										<div class="col-md-9">
											<table class="table table-bordered table-hover">
												<thead>
													<tr>
														<th>Tên tiếng Việt</th>
														<th>Tên tiếng Anh</th>
														<th class="col-md-4">Đường dẫn URL</th>
														<th class="col-md-1">Sắp xếp</th>
														<th class="col-md-1">Thao tác</th>
													</tr>
												</thead>
												<tbody>
													<?php Model::PrintMenuAction('e4_web_menu', $web_menu_detail['id'], ''); ?>
												</tbody>
											</table>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<div class="col-md-12">
													<label id="title_form" class="form-control btn btn-success">Thêm mới liên kết - link cho menu</label>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label for="parent" class="text-danger">Thuộc menu *:</label>
													<select name="parent" id="parent" class="form-control" required>
														<?php echo  $ariacms->printMenuOption('e4_web_menu', 'id', 'title_vi', '', '', $web_menu_detail['id'], ''); ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="type">Kiểu hiển thị:</label>
													<select id="type" name="type" class="form-control">
														<option value="">- Chọn -</option>
														<option value="mega">Mega menu</option>
														<option value="normal">Dropdown menu</option>
														<option value="hot">Hot menu</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label for="title_vi" class="text-danger">Tên Tiếng Việt *:</label>
													<input class="form-control" name="title_vi" id="title_vi" type="text" value="" placeholder="Tên hiển thị khi ngôn ngữ là Tiếng Việt..." required />
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label for="title_en" class="text-danger">Tên Tiếng Anh :</label>
													<input class="form-control" name="title_en" id="title_en" type="text" value="" placeholder="Tên hiển thị khi ngôn ngữ là Tiếng Anh..." />
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label for="url_html" class="text-danger">Đường dẫn URL *:</label>
													<input class="form-control" name="url_html" id="url_html" type="text" value="" placeholder="Đường dẫn liên kết..." required />
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label for="order" class="text-danger">Vị trí sắp xếp :</label>
													<input class="form-control" name="order" id="order" type="text" value="0" placeholder="" />
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="status">Trạng thái:</label>
													<select id="status" name="status" class="form-control" required>
														<option value="active">Hiển thị</option>
														<option value="deactive">Không hiển thị</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="hidden" value="" id="id_link" name="id" />
													<button type="submit" class="btn btn-success" name="submit" id="web_link_submit" value="web_link_add">Thêm mới</button>
													<a href="javascript:void(0);" class="btn btn-success pull-right hidden" id="reset_add_link" onclick="showAdd(<?= $web_menu_detail['id'] ?>);">Thêm mới link</a>
												</div>
											</div>

										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
			</form>
		</div><!-- /.col -->
	</div><!-- /.row -->
</section>

<script>
	function updateLink(id) {
		var f = "id=" + id;
		var _url = "ajax/web_menu/ajax.web_menu_get.php";
		$.ajax({
			url: _url,
			data: f,
			cache: false,
			context: document.body,
			success: function(data) {
				console.log(data);
				var object = {};
				var form = $('#web_link_edit');
				if (typeof data != 'undefined') {
					object = $.parseJSON(data);
				}
				if (!$.isEmptyObject(object)) {
					form.find('#title_form').text("Cập nhật liên kết - link cho menu");
					form.find('#title_form').removeClass("btn-success");
					form.find('#title_form').addClass("btn-primary");
					form.find('#parent').val(object.parent)
					form.find('#title_vi').val(object.title_vi);
					form.find('#title_en').val(object.title_en);
					form.find('#url_html').val(object.url_html);
					form.find('#order').val(object.order);
					form.find('#status').val(object.status);
					form.find('#type').val(object.type);
					form.find('#web_link_submit').val("web_link_edit");
					form.find('#web_link_submit').text("Cập nhật");
					form.find('#web_link_submit').removeClass("btn-success");
					form.find('#web_link_submit').addClass("btn-primary");

					form.find('#id_link').val(object.id);
					form.find('#reset_add_link').removeClass("hidden");
				}
			}
		});
	}

	function showAdd(parent) {
		var form = $('#web_link_edit');
		form.find('#title_form').text("Thêm mới liên kết - link cho menu");
		form.find('#title_form').addClass("btn-success");
		form.find('#title_form').removeClass("btn-primary");
		form.find('#parent').val(parent)
		form.find('#title_vi').val("");
		form.find('#title_en').val("");
		form.find('#url_html').val("");
		form.find('#order').val(0);
		form.find('#status').val("active");
		form.find('#type').val("");
		form.find('#web_link_submit').val("web_link_add");
		form.find('#web_link_submit').text("Thêm mới");
		form.find('#web_link_submit').addClass("btn-success");
		form.find('#web_link_submit').removeClass("btn-primary");

		form.find('#reset_add_link').addClass("hidden");
	}
</script>