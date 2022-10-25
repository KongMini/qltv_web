<?php
global $ariacms;
global $params;
global $ariaConfig_template;
global $taxonomies;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<title><?= _SEARCH . ' ' . _NEWS ?> - <?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?></title>
	<meta name="description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />
	<meta name="keywords" content="<?= ($ariacms->web_information->{$params->meta_keyword} != '') ? $ariacms->web_information->{$params->meta_keyword} : $ariacms->web_information->{$params->name}; ?>" />
	<meta property="og:title" content="<?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?>" />
	<meta property="og:description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />
	<?= $ariacms->getBlock("head"); ?>
</head>

<body>
	<!-- Loader -->
	<div class="page-loader">
		<div class="loader">
			<div class="flipper">
				<div class="front"></div>
				<div class="back"></div>
			</div>
		</div>
	</div>
	<!-- Loader END-->
	<div class="main-wrapper">

		<?= $ariacms->getBlock('header') ?>

		<div class="inner-wrapper">

			<!-- Left sidebar -->
			<?= $ariacms->getBlock('left_sticky_bar') ?>

			<div class="main">
				<!-- Content -->
				<div class="main-content">
					<div class="page-head-tile">
						<div class="container">
							<div class="breadcrumbs-block">
								<ul class="breadcrumbs">
									<li class="bc-item">
										<a href="<?= $ariacms->actual_link ?>"><i class="fa fa-home"></i> <?= _HOME ?></a>
										<i class="fa fa-angle-right"></i>
									</li>
									<li class="bc-item">
										<a href="javascript:void(0)">Tin tức</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="section">
						<div class="row">
							<div class="section">
								<div class="pst-block">
									<div class="checkout">
										<div class="pst-block-main">
											<div class="post-content">
												<form method="get" action="<?= $ariacms->$c_url ?>">
													<div class="title-blc-5">
														<h3 class="title-27">Tìm kiếm</h3>
													</div>
													<div class="checkout-line">
														<label class="label-tp-1">Từ khóa</label>
														<input type="text" class="input-tp-1" name="keysearch" value="<?= urldecode($ariacms->getParaUrl('keysearch')) ?>">
													</div>
													<div class="checkout-line">
														<div class="col-row">
															<div class="col-one-third sm-col-half mb-ls-full">
																<label class="label-tp-1">Thời gian</label>
																<select class="select-pt-1 js-select" name="date">
																	<option value="">Tất cả</option>
																	<option value="1" <?= ($ariacms->getParaUrl('date') == 1) ? 'selected' : '' ?>>1 ngày qua</option>
																	<option value="7" <?= ($ariacms->getParaUrl('date') == 7) ? 'selected' : '' ?>>1 tuần qua</option>
																	<option value="30" <?= ($ariacms->getParaUrl('date') == 30) ? 'selected' : '' ?>>1 tháng qua</option>
																	<option value="365" <?= ($ariacms->getParaUrl('date') == 365) ? 'selected' : '' ?>>1 năm qua</option>
																</select>
															</div>
															<div class="col-one-third sm-col-half mb-ls-full">
																<label class="label-tp-1">Chuyên mục</label>
																<select class="select-pt-1 js-select" name="category">
																	<option value="">Tất cả</option>
																	<?php
																	foreach ($taxonomies as $taxonomy) {
																		if ($taxonomy->taxonomy == 'category' && $taxonomy->parent == 0) {
																			$selected = ($taxonomy->id == $ariacms->getParaUrl('category')) ? 'selected' : '';
																			echo '<option value="' . $taxonomy->id . '" ' . $selected . '>' . $taxonomy->{$params->title} . '</option>';
																			foreach ($taxonomies as $sub_taxonomy) {
																				if ($taxonomy->id == $sub_taxonomy->parent) {
																					$selected = ($sub_taxonomy->id == $ariacms->getParaUrl('category')) ? 'selected' : '';
																					echo '<option value="' . $sub_taxonomy->id . '" ' . $selected . '>- - ' . $sub_taxonomy->{$params->title} . '</option>';
																				}
																			}
																		}
																	}
																	?>
																</select>
															</div>
															<div class="col-one-third sm-col-half mb-ls-full">
																<label class="label-tp-1">Tác giả</label>
																<select class="select-pt-1 js-select" name="author">
																	<option value="">Tất cả</option>
																	<?php
																	foreach ($authors as $author) {
																		$selected = ($author->id == $ariacms->getParaUrl('author')) ? 'selected' : '';
																		echo '<option value="' . $author->id . '" ' . $selected . '>' . $author->fullname . '</option>';
																	}
																	?>
																</select>
															</div>
														</div>
													</div>
													<div class="checkout-line">
														<div class="remember">
															<button class="btn-7" type="submit" name="btnSubmit" value="search">Tìm kiếm</button>
														</div>
													</div>
												</form>
											</div>
											<?php
											if (count($news)) {
											?>
												<div class="post-content">
													<div class="title-blc-5">
														<h3 class="title-27">Tìm thấy <?= count($news) ?> bản tin</h3>
													</div>

													<div class="posts">
														<?php
														if ($news) {
															$maxRows = $ariacms->web_information->posts_per_page;
															$curPg = $ariacms->getParaUrl('curPg');
															if ($curPg == '') $curPg = 1;
															$curRow = ($curPg - 1) * $maxRows;
															while ($curRow < count($news) && ($curRow < $curPg * $maxRows)) {
																$new = $news[$curRow];
																$curRow++;
														?>
																<article class="post post-tp-24">
																	<figure>
																		<?php
																		if ($new->image || $new->image_thumb) {
																		?>
																			<a href="<?= $ariacms->actual_link . 'chi-tiet/' . $new->url_part . '.html'; ?>">
																				<img src="<?= ($new->image_thumb) ? $new->image_thumb : $new->image ?>" style="height: 189px; width:270px;" alt="<?= $new->{$params->title} ?>" class="adaptive" />
																			</a>
																			<div class="ptp-24-overlay">
																				<div class="ptp-24-data">
																					<a href="javascript:void(0)">
																						<i class="li_eye"></i><?= $new->visited_count ?>
																					</a>
																				</div>
																			</div>
																		<?php
																		}
																		?>
																	</figure>
																	<h3 class="title-14"><a href="<?= $ariacms->actual_link . 'chi-tiet/' . $new->url_part . '.html'; ?>"><?= $new->{$params->title} ?></a></h3>
																	<p class="p"><?= $new->{$params->brief} ?></p>
																	<div class="meta-tp-2">
																		<div class="date"><span><?= $ariacms->unixToDate($new->post_created, '/') ?> <?= $ariacms->unixToTime($new->post_created, ':') ?></span></div>
																		<div class="category">
																			<a href="<?= $ariacms->actual_link . $ariacms->getParam("module") . '/' . $new->ca_url_part . '.html'; ?>"><i class="li_pen"></i><span><?= $new->{$params->title_ca} ?></span></a>
																		</div>
																	</div>
																</article>
														<?php
															}
														}
														?>
													</div>

													<div class="page-nav">
														<?= $ariacms->paginationPublic(count($news), $maxRows, 3) ?>
													</div>
												</div>
											<?php
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- Content END -->
				<!-- Footer -->
				<?= $ariacms->getBlock('footer') ?>
				<!-- Footer END -->
			</div>
		</div>
	</div>

	<!-- Aside menu -->
	<?= $ariacms->getBlock('aside_menu') ?>
	<?= $ariacms->getBlock("footer_script"); ?>
</body>

</html>