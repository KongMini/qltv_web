<?php
class View
{
	static function contactManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý liên hệ</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách liên hệ
					</a>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=contact_newsletter">
						<i class="fa fa-list"></i> Danh sách Newsletter
					</a>
					<!-- <a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=contact_event">
						<i class="fa fa-list"></i> Danh sách đăng ký tư vấn
					</a> -->
				</li>
			</ol>
		</section>
<?php
	}
	static function contact_view($contacts, $totalRows, $maxRows, $curPg)
	{
		include("admin.html.contact_view.php");
	}
	static function contact_newsletter($contacts, $totalRows, $maxRows, $curPg)
	{
		include("admin.html.contact_newsletter.php");
	}
	static function contact_event($contacts, $totalRows, $maxRows, $curPg)
	{
		include("admin.html.contact_event.php");
	}
}
?>