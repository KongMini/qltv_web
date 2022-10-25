<?php
class View
{
	static function showProductManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý sản phẩm</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách sản phẩm
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function product_view($product, $totalRows, $maxRows, $curPg, $users, $taxonomies)
	{
		include("admin.html.product_view.php");
	}

	static function product_add_view($taxonomies, $users)
	{
		include("admin.html.product_add_view.php");
	}

	static function product_edit_view($taxonomies, $users, $term_taxonomy_id_list, $product_detail, $products, $images)
	{
		include("admin.html.product_edit_view.php");
	}
}
?>