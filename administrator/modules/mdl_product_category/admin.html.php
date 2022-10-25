<?php
class View
{
	static function showProductCategoryManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý danh mục sản phẩm</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách danh mục
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function product_category_view()
	{
		include("admin.html.product_category_view.php");
	}
}
?>