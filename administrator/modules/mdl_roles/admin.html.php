<?php
class View
{
	static function showIntroductionManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý nhóm quyền</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách nhóm
					</a>
					<a class="btn btn-warning" href="javascript:void(0);" data-toggle="modal" data-target="#showCNTT" onclick="showCNTT('','ajax/roles/ajax.roles_add.php');">
						<i class="fa fa-plus"></i> Thêm mới
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function roles_view($rows)
	{
		include("admin.html.roles_view.php");
	}
	static function roles_menu_access($row, $items_one, $items_two)
	{
		include("admin.html.roles_menu_access.php");
	}
	static function roles_module_action($row, $modules)
	{
		include("admin.html.roles_module_action.php");
	}
}
?>