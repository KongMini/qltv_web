<?php
class View
{
	static function showBookAuthorManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý tác giả</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách tác giả
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function book_author_view($book_author, $totalRows, $maxRows, $curPg)
	{
		include("admin.html.book_author_view.php");
	}

	static function book_author_add_view()
	{
		include("admin.html.book_author_add_view.php");
	}

	static function book_author_edit_view($book_author_detail)
	{
		include("admin.html.book_author_edit_view.php");
	}
}
?>