<?php
global $database;
global $ariacms;
global $params;
$query = "SELECT * FROM e4_posts WHERE post_type = 'post' and post_status = 'active' ORDER BY id desc LIMIT 0, 4";
$database->setQuery($query);
$posts = $database->loadObjectList();
$monthTitle = array("",	"Jan",	"Feb",	"Mar",	"Apr",	"May",	"Jun",	"Jul",	"Aug",	"Sep",	"Oct",	"Nov",	"Dec");
?>
<div class="row">
	<?php
	foreach ($posts as $post) {
		$fullDate = explode('/', $ariacms->unixToDate($post->post_created, '/'));
	?>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class=" list-item box-blogs view-list">
				<div class="item-blogs clearfix">
					<div class="img-blogs">
						<a class="img-news" href="<?= $ariacms->actual_link . 'chi-tiet/' . $post->url_part . '.html'; ?>">
							<img src="<?= ($post->image_thumb != "") ? $post->image_thumb : $post->image ?>">
						</a>
						<div class="date_added">
							<p class="dm"><?= $fullDate[0] ?></p>
							<p class="my"><span><?= $monthTitle[(int) $fullDate[1]] ?></span><?= $fullDate[2] ?></p>
						</div>
					</div>
					<div class="info">
						<h2 title="<?= $post->{$params->title} ?>" class="title-blogs-item">
							<a href="<?= $ariacms->actual_link . 'chi-tiet/' . $post->url_part . '.html'; ?>">
								<?= $ariacms->textLimit($post->{$params->title}, 8) ?>
							</a>
						</h2>
						<p class="desc-blogs">
							<?= $ariacms->textLimit($post->{$params->brief}, 20) ?>
						</p>
						<a class="readmore" href="<?= $ariacms->actual_link . 'chi-tiet/' . $post->url_part . '.html'; ?>">
							<i class="fa fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
</div>