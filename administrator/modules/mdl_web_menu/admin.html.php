<?php
class View
{
	static function webMenuFront()
	{
?>
		<section class="content-header">
			<h1>Quản lý menu website</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách menu
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function web_menu_view($rows)
	{
		include("admin.html.web_menu_view.php");
	}
	static function web_menu_add_view()
	{
		include("admin.html.web_menu_add_view.php");
	}
	static function web_menu_edit_view($web_menu_detail)
	{
		include("admin.html.web_menu_edit_view.php");
	}
}
?>