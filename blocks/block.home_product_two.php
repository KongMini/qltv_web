<?php
global $database;
global $ariacms;
global $params;
global $taxonomies;

$i = $count = 0;
$home_taxonomies = array();
foreach ($taxonomies as $taxonomy) {
	if ($taxonomy->taxonomy == 'group' && $taxonomy->url_part == 'tin-noi-bat' && $taxonomy->status == 'active' && $taxonomy->count > 0) {
		$home_taxonomies[$i] = $taxonomies[$count];
		$i++;
	}
	$count++;
}

$query = "SELECT GROUP_CONCAT('', b.term_taxonomy_id) AS groups, a.*
		FROM e4_posts a
			JOIN e4_term_relationships b ON (b.term_taxonomy_id = " . $home_taxonomies[0]->id . " ) AND a.id = b.object_id
		WHERE a.post_type = 'post' AND a.post_status = 'active'
		GROUP BY a.id
		ORDER by a.id desc";
$database->setQuery($query);
$posts = $database->loadObjectList();

if ($posts) {
?>

    <div id="paper">
        <div class="max-width-wp">
            <div class="col-md-12 col-xs-12 paper-title">
                <h2 style="color: #0c0c0c; margin-top:20px "><b>Tin tức</b></h2>
            </div>
            <div class="col-md-12 col-xs-12 paper-title">
                <h5></h5>
            </div>
            <div class="row" id="content-news">
                <div class="col-md-6 col-xs-12 row paper-first-column">
                    <div class="col-md-6 col-xs-12 item">
                        <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $posts[0]->url_part . '.html'; ?>">
                            <img alt="<?= $posts[0]->{$params->title} ?>" src="<?= $posts[0]->image?>" />
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12 item first-column-title">
                        <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $posts[0]->url_part . '.html'; ?>">
                            <h5><?= $posts[0]->{$params->title} ?></h5>
                            <p><?= $posts[0]->{$params->brief}?></p>
                            <h6>
                                Xem thêm
                                <span class="border-read-more2"></span>
                            </h6>
                        </a>
                    </div>
                </div>
              <?php if( $posts[1]){?>
                <div class="col-md-6 col-xs-12 row paper-second-column">
                    <div class="col album col-md-6">
                        <div class="item">
                            <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $posts[1]->url_part . '.html'; ?>">
                                <img alt="<?= $posts[1]->{$params->title} ?>" src="<?= $posts[1]->image?>" />
                            </a>
                            <div class="album-title">
                                <h5><?= $posts[1]->{$params->title} ?></h5>
                                <h6><a href="<?= $ariacms->actual_link . 'chi-tiet/' . $posts[1]->url_part . '.html'; ?>">Xem thêm<span class="border-read-more2"></span></a></h6>
                            </div>
                        </div>

                    </div>
                    <?php }?>
                    <?php if( $posts[2]){?>
                    <div class="col album col-md-6">
                        <div class="item">
                            <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $posts[2]->url_part . '.html'; ?>">
                                <img alt="<?= $posts[2]->{$params->title} ?>" src="<?= $posts[2]->image?>" />
                            </a>
                            <div class="album-title">
                                <h5><?= $posts[2]->{$params->title} ?></h5>
                                <h6><a href="<?= $ariacms->actual_link . 'chi-tiet/' . $posts[2]->url_part . '.html'; ?>">Xem thêm<span class="border-read-more2"></span></a></h6>
                            </div>
                        </div>

                    </div>
                <?php }?>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 read-more">
            </div>
        </div>
    </div>

	<div class="col-lg-6 no-padding exclusive-right">
		<div class="active-exclusive-product-slider">
			<?php
			foreach ($albums as $product) {
				if ($product->term_taxonomy_id == $home_taxonomies[2]->id) {
			?>
					<div class="single-exclusive-slider">
						<a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>">
							<img class="img-fluid" src="<?= ($product->image_thumb != '') ? $product->image_thumb : $product->image ?>" alt="<?= $product->{$params->title} ?>">
						</a>
						<div class="product-details">
							<div class="price">
								<?= ($product->product_sale > 0 && $product->price_status != 'deactive') ? '<h6>' . $ariacms->formatPrice($product->product_sale) . '</h6>' : '<h6>' . _CONTACT . '</h6>'; ?>
								<?= ($product->product_price > 0 && $product->price_status != 'deactive') ? '<h6 class="l-through">' . $ariacms->formatPrice($product->product_price) . ' ₫</h6>' : ""; ?>
							</div>
							<a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>">
								<h4><?= $product->{$params->title} ?></h4>
							</a>
							<div class="add-bag d-flex align-items-center justify-content-center">
								<a class="add-btn" href="javascript:void(0)" item-id="<?= $product->id ?>" onclick="cartAdd(<?= $product->id ?>)"><span class="ti-bag"></span></a>
								<span class="add-text text-uppercase"><?= _ADD_TO_CART ?></span>
							</div>
						</div>
					</div>
			<?php
				}
			}
			?>
		</div>
	</div>
<?php
}
?>