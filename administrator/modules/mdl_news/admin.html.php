<?php
class View
{
	static function showNewsManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý bài viết</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách bài viết
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function news_view($news, $totalRows, $maxRows, $curPg, $users, $taxonomies)
	{
		include("admin.html.news_view.php");
	}

	static function news_add_view($taxonomies, $users)
	{
		include("admin.html.news_add_view.php");
	}

	static function news_edit_view($taxonomies, $users, $term_taxonomy_id_list, $news_detail, $news)
	{
		include("admin.html.news_edit_view.php");
	}
}
?>