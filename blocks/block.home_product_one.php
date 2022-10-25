<?php
global $database;
global $ariacms;
global $params;
global $taxonomies;

$i = $count = 0;
$home_taxonomies = array();
foreach ($taxonomies as $taxonomy) {
	if ($taxonomy->taxonomy == 'product_group' && $taxonomy->position == 'home' && $taxonomy->status == 'active' && $taxonomy->count > 0) {
		$home_taxonomies[$i] = $taxonomies[$count];
		$i++;
	}
	$count++;
}

$query = "SELECT GROUP_CONCAT('', b.term_taxonomy_id) AS groups, a.*
		FROM e4_posts a
			JOIN e4_term_relationships b ON (b.term_taxonomy_id = " . $home_taxonomies[0]->id . " OR b.term_taxonomy_id = " . $home_taxonomies[1]->id . " ) AND a.id = b.object_id
		WHERE a.post_type = 'product' AND a.post_status = 'active'
		GROUP BY a.id
		ORDER by a.id desc";
$database->setQuery($query);
$products = $database->loadObjectList();
if ($products) {
?>

    <div class="max-width-wp">
        <div id="collection-newest" class="row slide-collection" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
        <?php
        $i = 0;
        foreach ($products as $product) {
            $checkItem = explode(',', $product->groups);
            if (in_array($home_taxonomies[0]->id, $checkItem) && $i < 8) {
                $i++;
            ?>
            <div class="col-md-3 col-xs-12 item" style="position:relative;">
                <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>" alt="MS: 161538">
                    <img class="img-desk" alt="MS: 161538" src="<?= ($product->image_thumb != '') ? $product->image_thumb : $product->image ?>" />

                </a>
                <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>"><p style="text-align: center; margin-top: 15px;"><?= $product->{$params->title} ?></p></a>
            </div>
            <?php
                    }
                }
            ?>
        </div>
        <p style="text-align: center;"><a class="button-view" style="font-size: 16px; padding: 12px 20px; color: #000; border-color: #000; margin-top: 0px;" href="san-pham.html">SHOP NOW</a></p>
    </div>
<?php
}
?>