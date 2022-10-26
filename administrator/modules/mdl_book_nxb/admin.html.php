<?php
class View
{
	static function showBookNXBManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý NXB</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách NXB
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function book_nxb_view($book_nxb, $totalRows, $maxRows, $curPg)
	{
		include("admin.html.book_nxb_view.php");
	}

	static function book_nxb_add_view()
	{
		include("admin.html.book_nxb_add_view.php");
	}

	static function book_nxb_edit_view($book_nxb_detail)
	{
		include("admin.html.book_nxb_edit_view.php");
	}
}
?>