<?php
class View
{
	static function showProductTypeManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý phân loại sản phẩm</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách phân loại
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function product_type_view()
	{
		include("admin.html.product_type_view.php");
	}
}
?>