<?php
class View
{
	static function showNewsManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý Admin menu</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách Menu
					</a>
					<a class="btn btn-warning" href="javascript:void(0);" href="javascript:void(0);" data-toggle="modal" data-target="#showCNTT" onclick="showCNTT('','ajax/menu_admin/ajax.menu_admin_add.php');">
						<i class="fa fa-plus"></i> Thêm mới
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function menu_admin_view($menu_admins)
	{
		include("admin.html.menu_admin_view.php");
	}
}
?>