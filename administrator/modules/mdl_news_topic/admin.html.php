<?php
class View
{
	static function showNewsTopicManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý chủ đề</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách chủ đề
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function news_topic_view()
	{
		include("admin.html.news_topic_view.php");
	}
}
?>