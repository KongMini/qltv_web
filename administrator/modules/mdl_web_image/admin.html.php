<?php
class View
{
	static function webImageFront()
	{
?>
		<section class="content-header">
			<h1>Quản lý hình ảnh hệ thống</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách hình ảnh
					</a>
					<a class="btn btn-warning" href="javascript:void(0);" data-toggle="modal" data-target="#showCNTT" onclick="showCNTT('','ajax/web_image/ajax.web_image_add.php');">
						<i class="fa fa-plus"></i> Thêm mới
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function web_image_view($web_images)
	{
		include("admin.html.web_image_view.php");
	}
}
?>