<?php
class View
{
	static function moduleManagerFront()
	{
?>
		<section class="content-header">
			<h1>Quản lý Module hệ thống</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách Module
					</a>
					<a class="btn btn-warning" href="javascript:void(0);" href="javascript:void(0);" data-toggle="modal" data-target="#showCNTT" onclick="showCNTT('','ajax/module/ajax.module_add.php');">
						<i class="fa fa-plus"></i> Thêm mới
					</a>
				</li>
			</ol>
		</section>
<?php
	}

	static function module_view($modules)
	{
		include("admin.html.module_view.php");
	}
}
?>