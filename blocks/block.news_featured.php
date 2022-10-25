<?php
global $database;
global $ariacms;
global $params;
global $ariaConfig_template;
$query = "SELECT * FROM e4_term_taxonomy WHERE taxonomy = 'group' and position = 'home' AND status = 'active' LIMIT 0,1";
$database->setQuery($query);
$type_home = $database->loadRow();
$query = "SELECT a.*, c.ca_title_vi, c.ca_title_en, c.ca_url_part, c.fullname, c.id as user_id 
		FROM e4_posts a
			JOIN e4_users c ON a.user_created = c.id
			JOIN (
				SELECT t1.object_id
				FROM e4_term_relationships t1 WHERE t1.term_taxonomy_id = " . $type_home['id'] . "
				) d ON a.id = d.object_id
			LEFT JOIN (
				SELECT t1.object_id, t2.title_vi AS ca_title_vi, t2.title_en AS ca_title_en, t2.url_part as ca_url_part
				FROM e4_term_relationships t1 
					JOIN e4_term_taxonomy t2 ON t1.term_taxonomy_id = t2.id AND t2.taxonomy = 'category' GROUP BY t1.object_id
				) c ON a.id = c.object_id
		WHERE a.post_type = 'post'  AND a.post_status = 'active'
		order by a.id desc LIMIT 0, 3";
$database->setQuery($query);
$posts = $database->loadObjectList();
?>
<div class="wpb_column vc_column_container vc_col-sm-6">
	<div class="vc_column-inner">
		<div class="wpb_wrapper">
			<div class="vc_row wpb_row vc_inner vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<h2 style="text-align: left" class="vc_custom_heading heading_style_2"><?= $type_home[$params->title] ?></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1513235637026">
				<div class="wpb_column vc_column_container vc_col-sm-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class=" ">
								<div class="recent-news-shortcode-wrap list ">
									<div class="recent-news-container">
										<?php
										foreach ($posts as $post) {
										?>
											<article class="recent-news-item">
												<div class="post-thumbnail">
													<div class="post-image">
														<img width="1170" height="750" src="<?= ($post->image_thumb != "") ? $post->image_thumb : $post->image ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?= $post->{$params->title} ?>" />
													</div>
													<div class="overlay-bg">
													</div>
												</div>
												<div class="post-content">
													<div class="post-meta">
														<div class="post-meta-date"><?= $ariacms->unixToDate($post->post_created, '/') ?></div>
														<div class="post-meta-author">
															<a href="<?= $ariacms->actual_link . 'tin-tuc/' . $post->ca_url_part . '.html'; ?>"><?= $post->{$params->title_ca} ?></a>
														</div>
													</div>
													<h3 class="entry-title"><a href="<?= $ariacms->actual_link . 'chi-tiet/' . $post->url_part . '.html'; ?>"><?= $ariacms->textLimit($post->{$params->title}, 8) ?></a></h3>
													<div class="post-excerpt">
														<?= $ariacms->textLimit($post->{$params->brief}, 15) ?>
													</div>
												</div>
											</article>
										<?php
										}
										?>
									</div>
									<!-- <a style="color: #75b239;display: block;font-weight: 500;text-transform: uppercase;-webkit-transition: all 0.3s;-o-transition: all 0.3s;transition: all 0.3s;" href="<?= $ariacms->actual_link . 'tic-tuc/' . $type_home['url_part'] . '.html'; ?>" class="department-viewmore"><i class="icofont icofont-caret-right"></i>Xem thêm</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>