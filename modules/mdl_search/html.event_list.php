<?php
global $ariacms;
global $params;
global $ariaConfig_template;
global $analytics_code;
switch ($_SESSION['steam_lang']) {
  case 'vi':
    $dateLang = 'vi-VN';
    break;
  case 'en':
    $dateLang = 'en-US';
    break;
  default:
    $dateLang = 'vi-VN';
    break;
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<title>Sự kiện - <?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?></title>
	<meta name="description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />
	<meta name="keywords" content="<?= ($ariacms->web_information->{$params->meta_keyword} != '') ? $ariacms->web_information->{$params->meta_keyword} : $ariacms->web_information->{$params->name}; ?>" />
	<meta property="og:title" content="<?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?>" />
	<meta property="og:description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="<?= $ariacms->web_information->{$params->name} ?>" />
	<meta name="copyright" content="<?= $ariacms->web_information->{$params->name} ?>" />
	<meta property="og:site_name" content="<?= $ariacms->web_information->{$params->name} ?>" />
	<meta property="og:url" content="<?= $ariacms->c_url ?>" />
	<meta property="og:type" content="article" />
	<link rel="icon" href="<?= $ariacms->web_information->{'image-icon'} ?>">

	<meta name="theme-color" content="#ffffff" />
	<!-- Web Fonts  -->
	<link href='<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/cssce56.css?family=Noto+Sans:400,700,400italic,700italic%7CInconsolata:400,700%7CMontserrat:400,700' rel='stylesheet' type='text/css' />

	<!-- build:css css/icons.css -->

	<!-- Icon Fonts  -->
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/font-awesome.css" />
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/linecons.css" />
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/fontello.css" />

	<!-- endbuild -->
	<!-- build:css css/vendor.css -->

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/jquery-ui.css" />
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/jquery-ui.structure.css" />
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/vendor/animate.css/animate.css" />
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/vendor/owl-carousel/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/vendor/owl-carousel/owl-carousel/owl.transitions.css" />
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/vendor/slick-carousel/slick/slick.css" />
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/vendor/Swiper/dist/css/swiper.css" />
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/vendor/magnific-popup/dist/magnific-popup.css" />

	<!-- endbuild -->
	<!-- build:css css/main.css -->

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/main.css" />

	<!-- endbuild -->

	<?php
	if ($analytics_code) {
		foreach ($analytics_code as $analytic_code) {
			if ($analytic_code->position == 'header')
				echo $analytic_code->code;
		}
	}
	?>
	<script>
		var options = {
			weekday: 'long',
			year: 'numeric',
			month: 'long',
			day: 'numeric'
		};
		var post_dates = {
			year: 'numeric',
			month: 'long',
			day: 'numeric'
		};
		var date = new Date();
		var langCode = '<?= $dateLang ?>';
	</script>
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?= $ariacms->actual_link ?>administrator/templates/aptcms/plugins/datepicker/datepicker3.css" />
	<style>
		.lbs {
			width: 24px;
			height: 24px;
			font-size: 20px;
		}
	</style>
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
										<a href="javascript:void(0)">Sự kiện</a>
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
														<label class="label-tp-1">Từ khóa sự kiện</label>
														<input type="text" class="input-tp-1" name="keysearch" value="<?= urldecode($ariacms->getParaUrl('keysearch')) ?>">
													</div>
													<div class="checkout-line">
														<div class="col-row">
															<div class="col-one-third sm-col-half mb-ls-full">
																<label class="label-tp-1">Từ ngày</label>
																<input type="text" class="input-tp-1 datepicker" name="date_from" value="<?= urldecode($ariacms->getParaUrl('date_from')) ?>">
															</div>
															<div class="col-one-third sm-col-half mb-ls-full">
																<label class="label-tp-1">Đến ngày</label>
																<input type="text" class="input-tp-1 datepicker" name="date_to" value="<?= urldecode($ariacms->getParaUrl('date_to')) ?>">
															</div>
															<div class="col-one-third sm-col-half mb-ls-full">
																<label class="label-tp-1">Địa điểm</label>
																<select class="select-pt-1 js-select" name="address">
																	<option value="">Tất cả</option>
																	<?php
																	foreach ($addresses as $address) {
																		$selected = ($address->public_place == urldecode($ariacms->getParaUrl('address'))) ? 'selected' : '';
																		echo '<option value="' . $address->public_place . '" ' . $selected . '>' . $address->public_place . '</option>';
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

																	<div class="meta-tp-2">
																		<div class="date">
																			<i class="li_calendar"></i>
																			<span>
																				<?= $ariacms->unixToDate($new->public_date, '/') ?>
																			</span>
																		</div>
																		<div class="date">
																			<span>
																				<?= $new->public_place ?>
																			</span>
																		</div>
																	</div>
																	<div class="meta-tp-2">
																		<div class="date">
																			<i class="li_clock"></i>
																			<span>
																				<?= $new->public_time ?>
																			</span>
																		</div>
																		<div class="date">
																			<span>
																				<?= ($new->product_price > 0) ? $ariacms->formatPrice($new->product_price) : "Miễn phí"; ?>
																			</span>
																		</div>
																	</div>

																	<p class="p"><?= $new->{$params->brief} ?></p>

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
	<!-- datepicker -->
	<script src="<?= $ariacms->actual_link ?>administrator/templates/aptcms/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script>
		$('.datepicker').datepicker({
			autoclose: true,
			todayHighlight: true,
			format: 'dd/mm/yyyy',
			language: 'vn'
		});
	</script>

</body>

</html>