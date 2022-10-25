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
?>
<div class="modal-dialog modal-lg">
	<form method="POST" action="?module=web_menu&task=web_menu_add" name="web_menu_add" id="web_menu_add" class="form-horizontal">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title">Thêm mới nhóm menu</h4>
			</div>
			<div class="modal-body modal-scroll">
				<p class="text-orange pull-left">Vui lòng nhập đầy đủ thông tin trường có dấu (<small class="text-red">*</small>).</p>
				<div class="form-group">
					<div class="col-md-12">
						<div class="form-group">
							<div class="col-md-6">
								<label class="text-danger" for="title_vi">Tiêu đề <span class="text-red">*</span></label>
								<input class="form-control" name="title_vi" id="title_vi" type="text" required value='' />
							</div>
							<div class="col-md-6">
								<label for="parent_id" class="text-danger">Vị trí hiển thị :</label>
								<select class="form-control" name="position" id="position">
									<option value="">Chọn vị trí</option>
									<option value="top" >Đầu trang</option>
									<option value="main" >Menu chính</option>
									<option value="left" >Menu trái</option>
									<option value="right" >Menu phải</option>
									<option value="footer" >Cuối trang</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<label for="order" class="text-danger">Thứ tự sắp xếp :</label>
								<input class="form-control" name="order" id="order" type="text" value="0" placeholder="Thứ tự sắp xếp..." />
							</div>
							<div class="col-md-6">
								<label class="text-danger" for="status">Trạng thái:</label>
								<select id="status" name="status" class="form-control">
									<option value="">- Chọn -</option>
									<option value="active">Hiển thị</option>
									<option value="deactive">Không hiển thị</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<label class="text-danger" for="type">Kiểu hiển thị:</label>
								<select id="type" name="type" class="form-control">
									<option value="">- Chọn -</option>
									<option value="mega">Mega menu</option>
									<option value="normal">Dropdown menu</option>
								</select>
							</div>
							<div class="col-md-6">

							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<label for="description" class="text-danger">Thông tin mô tả :</label>
								<textarea class="form-control" name="description" id="description" placeholder="Mô tả ngắn chức năng cho nhóm menu..."></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="form-group">
					<div class="col-md-offset-3 col-md-9">
						<button type="submit" class="btn btn-primary pull-left" name="submit" value="web_menu_add">Cập nhật</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng lại</button>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</form>
</div><!-- /.modal-dialog -->