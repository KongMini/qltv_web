<?php
class View
{
	static function webHomeFront()
	{
?>
		<section class="content-header">
			<h1>Quản lý cấu hình trang chủ</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách cấu hình
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function web_home_view()
	{
		include("admin.html.web_home_view.php");
	}
	static function web_home_add_view()
	{
		include("admin.html.web_home_add_view.php");
	}
	static function web_home_edit_view($detail)
	{
		include("admin.html.web_home_edit_view.php");
	}
}
?>