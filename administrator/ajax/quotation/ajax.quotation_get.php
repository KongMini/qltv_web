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
$id = $_REQUEST['id'];
$query = "SELECT a.*, b.term_taxonomy_id_list FROM e4_posts a 
		LEFT JOIN ( 
				SELECT t1.object_id, GROUP_CONCAT(t1.term_taxonomy_id) AS term_taxonomy_id_list
				FROM e4_term_relationships t1 
				LEFT JOIN e4_term_taxonomy t2 ON t1.term_taxonomy_id = t2.id GROUP BY t1.object_id
				) b ON a.id = b.object_id
	WHERE a.id = $id";
$database->setQuery($query);
$quotation_detail = $database->loadRow();

?>
<div class="modal-dialog modal-wide">
	<form method="POST" action="?module=quotation&task=quotation_edit&id=<?php echo $id ?>" name="quotation_edit" id="quotation_edit" class="form-horizontal">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title">Cập nhật thông tin chi tiết</h4>
			</div>
			<div class="modal-body modal-scroll">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a aria-expanded="true" href="#info_general" data-toggle="tab">Thông tin chung <font class="text-red">*</font></a></li>
						<!-- <li><a aria-expanded="false" href="#info_document" data-toggle="tab">Thông tin tài liệu</a></li>
						<li><a aria-expanded="false" href="#info_other" data-toggle="tab">Thông tin SEO</a></li> -->
					</ul>
					<div class="tab-content">
						<div class="active tab-pane" id="info_general">
							<div class="form-group">
								<label for="title_vi" class="col-sm-6 col-md-6 col-lg-6">Tiêu đề Tiếng Việt <span class="text-red">*</span></label>
								<label for="title_en" class="col-sm-6 col-md-6 col-lg-6">Tiêu đề Tiếng Anh</label>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<input class="form-control" name="title_vi" id="title_vi" type="text" required value="<?= $quotation_detail['title_vi'] ?>" />
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<input class="form-control" name="title_en" id="title_en" type="text" value="<?= $quotation_detail['title_en'] ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="brief_vi" class="col-sm-6 col-md-6 col-lg-6">Giới thiệu Tiếng Việt</label>
								<label for="brief_en" class="col-sm-6 col-md-6 col-lg-6">Giới thiệu Tiếng Anh</label>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<textarea class="form-control" rows="3" name="brief_vi" id="brief_vi" placeholder="Tóm tắt giới thiệu ..."><?= $quotation_detail['brief_vi'] ?></textarea>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<textarea class="form-control" rows="3" name="brief_en" id="brief_en" placeholder="Tóm tắt giới thiệu..."><?= $quotation_detail['brief_en'] ?></textarea>
								</div>
							</div>
							<input class="form-control hidden" name="url_part" id="url_part" type="text" onblur="check_value_exist('', '#url_part', 'e4_posts', 'url_part', '#error_url_part', 'Đường dẫn URL');" />
						</div>

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="form-group">
					<div class="col-md-12 text-center">
						<button type="submit" class="btn btn-primary " name="submit" value="quotation_edit">Cập nhật</button>
						<button type="button" class="btn btn-default " data-dismiss="modal">Đóng lại</button>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</form>
</div><!-- /.modal-dialog -->
<script>
	$(".select2").select2();
	$('.datepicker').datepicker({
		autoclose: true,
		todayHighlight: true,
		format: 'dd/mm/yyyy',
		language: 'vn'
	});
	$(".timepicker").timepicker({
		showInputs: false
	});
</script>