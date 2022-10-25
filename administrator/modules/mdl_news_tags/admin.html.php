<?php
class View
{
	static function showNewsTagsManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý thẻ - tags</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách tags
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function news_tags_view()
	{
		include("admin.html.news_tags_view.php");
	}
}
?>