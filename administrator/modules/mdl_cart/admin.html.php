<?php
class View
{
	static function cartManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý mượn trả</h1>
			<ol class="breadcrumb">
				<li><a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>"><i class="fa fa-list"></i> Danh sách</a></li>
			</ol>
		</section>
<?php
	}
	static function cart_view($carts, $totalRows, $maxRows, $curPg)
	{
		include("admin.html.cart_view.php");
	}
    static function cart_add($student)
    {
        include("admin.html.cart_add.php");
    }
	static function cart_edit($student, $lists, $books, $detail, $id_user, $check)
	{
		include("admin.html.cart_edit.php");
	}
}
?>