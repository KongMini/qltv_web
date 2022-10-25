<?php
global $ariacms;
global $params;
global $taxonomies;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<title><?= ($detail[$params->meta_title] != '') ? $detail[$params->meta_title] : $detail[$params->title]; ?></title>

	<meta name="description" content="<?= ($detail[$params->meta_description] != '') ? $detail[$params->meta_description] : $detail[$params->brief] ?>" />
	<meta name="keywords" content="<?= ($detail[$params->meta_keyword] != '') ? $detail[$params->meta_keyword] : $detail[$params->title]; ?>" />
	<meta property="og:title" content="<?= ($detail[$params->meta_title] != '') ? $detail[$params->meta_title] : $detail[$params->title]; ?>" />
	<meta property="og:description" content="<?= ($detail[$params->meta_description] != '') ? $detail[$params->meta_description] : $detail[$params->brief]; ?>" />
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
										<a href="<?= $ariacms->actual_link . 'thu-vien-sach.html' ?>">Thư viện sách</a>
										<i class="fa fa-angle-right"></i>
									</li>
									<li class="bc-item">
										<a href="javascript:void(0)"><?= $detail[$params->title] ?></a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="section">
						<div class="row">
							<div class="content">
								<div class="pst-block">
									<div class="pst-block-main">
										<div class="post-content">
											<div class="shop-product-item">
												<?php
												if ($detail['image'] != '') {
												?>
													<div class="half">
														<figure class="shop-product-img">
															<?= ($detail['image'] != '') ? '<img style="width:100%" src="' . $detail['image'] . '" alt="' . $detail[$params->title] . '">' : '' ?>
														</figure>
													</div>
												<?php
												}
												?>
												<div class="<?= ($detail['image'] != '') ? 'half' : 'full'; ?>">
													<h2 class="shop-product-title"><?= $detail[$params->title] ?></h2>
													<div class="shop-product-price">Tác giả: <?= ($detail['fullname']) ? '<a href="' . $ariacms->actual_link . 'author/' . $ariacms->utf8ToUrl($detail['fullname']) . '-' . $detail['user_id'] . '.html">' . $detail['fullname'] . '</a>' : "Đang cập nhật"; ?></div>
													<div class="shop-product-price">Thể loại: <?= ($author['title_vi']) ? '<a href="' . $ariacms->actual_link . 'books/' . $author['url_part'] . '.html">' . $author['title_vi'] . '</a>' : "Đang cập nhật"; ?></div>
													<div class="shop-product-price">Giá niêm yết: <?= ($detail['product_price'] > 0) ? $ariacms->formatPrice($detail['product_price']) : "Miễn phí"; ?></div>
													<div class="shop-product-price">
														Năm phát hành:
														<span>
															<?= $detail['meta_year_public'] ?>
														</span>
													</div>
													<div class="shop-product-price">
														Số trang:
														<span>
															<?= $detail['meta_page'] ?>
														</span>
													</div>
													<?php
													if ($detail['meta_file_audio'] != '' || $detail['meta_file_pdf'] != '') {
													?>
														<div class="shop-product-price">
															Tài liệu sách:
															<a target="_blank" style="padding:15px" href="<?= $detail['meta_file_audio'] ?>">File Audio</a>
															<a target="_blank" style="padding:15px" href="<?= $detail['meta_file_pdf'] ?>">File PDF</a>
														</div>
													<?php
													}
													?>

													<p class="shop-product-description"><strong><?= nl2br($detail[$params->brief]) ?></strong></p>
												</div>
											</div>
											<div class="product-description">
												<?= $ariacms->convertEditor($detail[$params->content]) ?>
											</div>

											<div class="pst-box">
												<div class="pst-box-head">
													<div class="title-blc-1">
														<h4>Sách cùng danh mục</h4>
													</div>
													<div class="navs js-pst-navs"></div>
												</div>
												<div class="pst-box-main">
													<div class="pst-box-inner js-pst-block-2">
														<?php
														if ($relateds) {
															foreach ($relateds as $related) {
														?>
																<div class="one-third">
																	<article class="post post-tp-30">
																		<figure>
																			<?php
																			if ($related->image_thumb != '') {
																				echo '<img style="width:222px; height:300px;" src="' . $related->image_thumb . '" alt="' . $related->{$params->title} . '">';
																			} else if ($related->image != '') {
																				echo '<img style="width:222px; height:300px;" src="' . $related->image . '" alt="' . $related->{$params->title} . '">';
																			}
																			?>
																		</figure>
																		<h3 class="title-6"><a href="<?= $ariacms->actual_link . 'chi-tiet/' . $related->url_part . '.html'; ?>"><?= $related->{$params->title} ?></a></h3>

																	</article>
																</div>
														<?php
															}
														}
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- Right side bar -->
							<?= $ariacms->getBlock('right_side_bar') ?>
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