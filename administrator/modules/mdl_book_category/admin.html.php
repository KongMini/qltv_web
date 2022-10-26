<?php
class View
{
	static function showBookCategoryManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý danh mục sách</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách danh mục sách
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function book_category_view($book_category, $totalRows, $maxRows, $curPg)
	{
		include("admin.html.book_category_view.php");
	}

	static function book_category_add_view()
	{
		include("admin.html.book_category_add_view.php");
	}

	static function book_category_edit_view($book_category_detail)
	{
		include("admin.html.book_category_edit_view.php");
	}
}
?>