<?php
class View
{
	static function userManagerFront()
	{
?>
		<section class="content-header">
			<h1>Quản lý người dùng</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách người dùng
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function user_view($users, $totalRows, $curPg, $curRow, $maxRows)
	{
		include("admin.html.user_view.php");
	}

	static function user_add_view($taxonomies, $roles)
	{
		include("admin.html.user_add_view.php");
	}

	static function user_edit_view($taxonomies, $user, $roles)
	{
		include("admin.html.user_edit_view.php");
	}
}
?>