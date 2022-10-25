<?php
class View
{
	static function analyticsCodeFront()
	{
?>
		<section class="content-header">
			<h1>Quản lý mã nhúng</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách mã nhúng
					</a>
					<a class="btn btn-warning" href="javascript:void(0);" data-toggle="modal" data-target="#showCNTT" onclick="showCNTT('','ajax/analytics_code/ajax.analytics_code_add.php');">
						<i class="fa fa-plus"></i> Thêm mới
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function analytics_code_view($analytics_codes)
	{
		include("admin.html.analytics_code_view.php");
	}
}
?>