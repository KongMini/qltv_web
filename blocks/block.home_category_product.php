<?php
global $database;
global $ariacms;
global $params;
global $taxonomies;
?>
<section class="category-area hidden-sm">
	<div class="container">
		<div class="row justify-content-center">
			<?php
			$i = 0;
			foreach ($taxonomies as $taxonomy) {
				if ($taxonomy->taxonomy == 'product_category' && $taxonomy->position == 'home' && $taxonomy->status == 'active' && $i < 5) {
					if ($i == 0) {
						echo '<div class="col-lg-8 col-md-12"><div class="row">';
					}
					if ($i == 0 || $i == 3) {
			?>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?= $taxonomy->image ?>" alt="<?= $taxonomy->{$params->title} ?>">
								<a href="<?= $ariacms->actual_link . 'san-pham/' . $taxonomy->url_part . '.html'; ?>">
									<div class="deal-details">
										<h6 class="deal-title"><?= $taxonomy->{$params->title} ?></h6>
									</div>
								</a>
							</div>
						</div>
					<?php
					} else if ($i == 1 || $i == 2) {
					?>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?= $taxonomy->image ?>" alt="<?= $taxonomy->{$params->title} ?>">
								<a href="<?= $ariacms->actual_link . 'san-pham/' . $taxonomy->url_part . '.html'; ?>">
									<div class="deal-details">
										<h6 class="deal-title"><?= $taxonomy->{$params->title} ?></h6>
									</div>
								</a>
							</div>
						</div>
					<?php
					} else {
					?>
						<div class="col-lg-4 col-md-6">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?= $taxonomy->image ?>" alt="<?= $taxonomy->{$params->title} ?>">
								<a href="<?= $ariacms->actual_link . 'san-pham/' . $taxonomy->url_part . '.html'; ?>">
									<div class="deal-details">
										<h6 class="deal-title"><?= $taxonomy->{$params->title} ?></h6>
									</div>
								</a>
							</div>
						</div>
			<?php
					}
					if ($i == 3) {
						echo '</div></div>';
					}
					$i++;
				}
			}
			?>
		</div>
	</div>
</section>