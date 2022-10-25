<?php
global $database;
global $ariacms;
global $params;
global $taxonomies;
$i = 0;
$home_taxonomies = array();
$taxonomies_id = array();
foreach ($taxonomies as $taxonomy) {
	if ($taxonomy->taxonomy == 'group' && $taxonomy->position == 'right' && $taxonomy->status == 'active' && $taxonomy->count > 0) {
		$taxonomies_id[$i] = $taxonomy->id;
		$home_taxonomies[$i] = $taxonomy;
		$i++;
	}
}
$query = "SELECT a.*, GROUP_CONCAT(b.term_taxonomy_id) AS groups
							FROM e4_posts a
								JOIN e4_term_relationships b ON b.term_taxonomy_id IN (" . implode(',', $taxonomies_id) . ") AND a.id = b.object_id
							WHERE a.post_type = 'post' AND a.post_status = 'active'
							GROUP BY a.id
							ORDER by a.id desc
							";
$database->setQuery($query);
$posts = $database->loadObjectList();
?>
<div class="blog_right_sidebar">
	<?php
	if ($home_taxonomies) {
		foreach ($home_taxonomies as $home_taxonomy) {
	?>
			<aside class="single_sidebar_widget popular_post_widget">
				<h3 class="widget_title"><?= $home_taxonomy->{$params->title} ?></h3>
				<?php
				$count = 0;
				foreach ($posts as $post) {
					if (in_array($home_taxonomy->id, explode(',', $post->groups))) {
						$count++;
						if ($count <= 5) {
				?>
							<div class="media post_item">
								<?php
								if ($post->image || $post->image_thumb) {
								?>
									<a alt="<?= $post->{$params->title} ?>" class="img-news" href="<?= $ariacms->actual_link . 'chi-tiet/' . $post->url_part . '.html'; ?>">
										<img src="<?= ($post->image_thumb) ? $post->image_thumb : $post->image ?>" style="width: 75px;">
									</a>
								<?php
								}
								?>
								<div class="media-body">
									<a title="<?= $post->{$params->title} ?>" href="<?= $ariacms->actual_link . 'chi-tiet/' . $post->url_part . '.html'; ?>">
										<h3><?= $ariacms->textLimit($post->{$params->title}, 6) ?></h3>
									</a>
									<p><?= $ariacms->unixToTime($post->post_created, ':') ?> <?= $ariacms->unixToDate($post->post_created, '/') ?></p>
								</div>
							</div>
				<?php
						}
					}
				}
				?>
				<div class="br"></div>
			</aside>

	<?php
		}
	}
	?>
	<?php
	foreach ($ariacms->web_information->image as $image) {
		if ($image->position == 'right-banner-news') {
	?>
			<aside class="single_sidebar_widget ads_widget">
				<a href="<?= ($image->link) ? $image->link : 'javascript:void(0)' ?>">
					<img class="img-fluid" src="<?= $image->image ?>" alt="<?= $image->{$params->title} ?>">
				</a>
				<div class="br"></div>
			</aside>
	<?php
		}
	}
	?>

	<aside class="single_sidebar_widget post_category_widget">
		<h4 class="widget_title" style="margin-bottom: 15px;"><?= _NEWS_CATEGORY ?></h4>
		<ul class="list cat-list">
			<?php
			foreach ($taxonomies as $taxonomy) {
				if ($taxonomy->taxonomy == 'category' && $taxonomy->parent == 0 && $taxonomy->position == 'left') {
			?>
					<li>
						<a href="<?= $ariacms->actual_link . 'tin-tuc/' . $taxonomy->url_part . '.html'; ?>" class="d-flex justify-content-between">
							<p><strong><?= $taxonomy->{$params->title} ?></strong></p>
							<p><?= $taxonomy->count + $taxonomy->total_count ?></p>
						</a>
					</li>

					<?php
					if ($taxonomy->submenu > 0) {
					?>
						<ul class="list cat-list">
							<?php
							foreach ($taxonomies as $taxonomy_sub) {
								if ($taxonomy->id == $taxonomy_sub->parent && $taxonomy_sub->position == 'left') {
							?>
									<li>
										<a href="<?= $ariacms->actual_link . 'tin-tuc/' . $taxonomy_sub->url_part . '.html'; ?>" class="d-flex justify-content-between">
											<p>-- <?= $taxonomy_sub->{$params->title} ?></p>
											<p><?= $taxonomy_sub->count + $taxonomy_sub->total_count ?></p>
										</a>
									</li>
							<?php
								}
							}
							?>
						</ul>
					<?php
					}
					?>
					</li>
			<?php
				}
			}
			?>
		</ul>
		<div class="br"></div>
	</aside>

	<aside class="single-sidebar-widget tag_cloud_widget">
		<h4 class="widget_title">Tags</h4>
		<ul class="list">
			<?php
			foreach ($taxonomies as $taxonomy) {
				if ($taxonomy->taxonomy == 'post_tags') {
			?>
					<li>
						<a href="<?= $ariacms->actual_link . 'tin-tuc/' . $taxonomy->url_part . '.html'; ?>">
							<?= $taxonomy->{$params->title} ?>
						</a>
					</li>
			<?php
				}
			}
			?>
		</ul>
	</aside>

</div>
