<?php
class View
{
	static function showBookManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý sách</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách sách
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function book_view($book, $totalRows, $maxRows, $curPg, $users, $book_category, $book_author, $book_nxb)
	{
		include("admin.html.book_view.php");
	}

	static function book_add_view($book_category, $book_author, $book_nxb,$users)
	{
		include("admin.html.book_add_view.php");
	}

	static function book_edit_view($taxonomies, $users, $term_taxonomy_id_list, $book_detail, $books, $images)
	{
		include("admin.html.book_edit_view.php");
	}
}
?>