<?php
class View
{
	static function showProductTagsManager()
	{
?>
		<section class="content-header">
			<h1>Quản lý thẻ - tags sản phẩm</h1>
			<ol class="breadcrumb">
				<li>
					<a class="btn btn-warning" href="index.php?module=<?php echo $_REQUEST['module'] ?>">
						<i class="fa fa-list"></i> Danh sách tags
					</a>
				</li>
			</ol>
		</section>
<?php
	}
	static function product_tags_view()
	{
		include("admin.html.product_tags_view.php");
	}
}
?>