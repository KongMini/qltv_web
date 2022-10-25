<?php
global $database;
global $ariacms;
global $params;
global $taxonomies;

$i = $count = 0;
$home_taxonomies = array();
foreach ($taxonomies as $taxonomy) {
	if ($taxonomy->taxonomy == 'product_group' && $taxonomy->position == 'footer' && $taxonomy->status == 'active' && $taxonomy->count > 0) {
		$home_taxonomies[$i] = $taxonomies[$count];
		$i++;
	}
	$count++;
}

$query = "SELECT b.term_taxonomy_id, a.*
		FROM e4_posts a
			JOIN e4_term_relationships b ON b.term_taxonomy_id = " . $home_taxonomies[0]->id . " AND a.id = b.object_id
		WHERE a.post_type = 'product' AND a.post_status = 'active'
		GROUP BY a.id
		ORDER by a.id desc
		LIMIT 0, 9";
$database->setQuery($query);
$products = $database->loadObjectList();
if ($products) {
?>

	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1><?= $home_taxonomies[0]->{$params->title} ?></h1>
						<p><?= $home_taxonomies[0]->{$params->brief} ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<?php
						foreach ($products as $product) {
							if ($product->term_taxonomy_id == $home_taxonomies[0]->id) {
						?>
								<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
									<div class="single-related-product d-flex">
										<a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>">
											<img class="img-home-thumb" src="<?= ($product->image_thumb != '') ? $product->image_thumb : $product->image ?>" alt="<?= $product->{$params->title} ?>">
										</a>
										<div class="desc">
											<a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>" class="title"><?= $product->{$params->title} ?></a>
											<div class="price">
												<?= ($product->product_sale > 0 && $product->price_status != 'deactive') ? '<h6>' . $ariacms->formatPrice($product->product_sale) . '</h6>' : '<h6>' . _CONTACT . '</h6>'; ?>
												<?= ($product->product_price > 0 && $product->price_status != 'deactive') ? '<h6 class="l-through">' . $ariacms->formatPrice($product->product_price) . ' ₫</h6>' : ""; ?>
											</div>
										</div>
									</div>
								</div>
						<?php
							}
						}
						?>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="<?= $ariacms->actual_link . 'san-pham/' . $home_taxonomies[0]->url_part . '.html'; ?>" target="_blank">
							<img class="img-fluid d-block mx-auto" src="<?= $home_taxonomies[0]->image ?>" alt="<?= $home_taxonomies[0]->{$params->title} ?>">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
}
?>