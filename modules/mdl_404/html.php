<?php
class View
{
	static function viewhome()
	{
		global $ariacms;
		global $params;
?>
		<!DOCTYPE html>
		<html lang="vi">

		<head>
			<title><?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?></title>
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
							<div class="section">
								<div class="page-404 text-center">
									<div class="large-404">404</div>
									<h2>Nothing Found</h2>
									<p>Sorry, but the page you are looking not found.</p>
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
<?php
	}
}
?>