<?php
class View
{
	static function studentManagerFront()
	{
?>
		<section class="content-header">
			<h1>Quản lý Độc giả</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách độc giả
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function student_view($students, $totalRows, $curPg, $curRow, $maxRows)
	{
		include("admin.html.student_view.php");
	}

	static function student_add_view()
	{
		include("admin.html.student_add_view.php");
	}

	static function student_edit_view($student)
	{
		include("admin.html.student_edit_view.php");
	}
}
?>