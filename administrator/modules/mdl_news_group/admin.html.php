<?php
class View
{
	static function showNewsGroupManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý nhóm tin tức</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách nhóm
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function news_group_view()
	{
		include("admin.html.news_group_view.php");
	}
}
?>