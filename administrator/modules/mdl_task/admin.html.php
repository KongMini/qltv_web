<?php
class View
{
	static function tasksManagerFront()
	{
?>
		<section class="content-header">
			<h1>Quản lý Task - Modules</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách Task - Module
					</a>
					<a class="btn btn-warning" href="javascript:void(0);" data-toggle="modal" data-target="#showCNTT" onclick="showCNTT('','ajax/module/ajax.module_add.php');">
						<i class="fa fa-plus"></i> Thêm mới Module
					</a>
				</li>
			</ol>
		</section>
<?php
	}

	static function task_view($modules)
	{
		include("admin.html.task_view.php");
	}
}
?>