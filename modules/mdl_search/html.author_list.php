<?php
global $ariacms;
global $params;
global $ariaConfig_template;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<title>Tác giả - <?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?></title>
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
					<!-- Page head tile -->
					<div class="page-head-tile">
						<div class="container">
							<div class="page-title">
								<h1 class="title-16"><strong>Danh sách </strong>danh nhân và chuyên gia</h1>
							</div>
						</div>
					</div>
					<!-- Page head tile END -->
					<div class="section">
						<div class="team-person-blocks">
							<div class="row">
								<?php
								if ($rows) {
									$maxRows = $ariacms->web_information->product_per_page;
									$curPg = $ariacms->getParaUrl('curPg');
									if ($curPg == '') $curPg = 1;
									$curRow = ($curPg - 1) * $maxRows;
									while ($curRow < count($rows) && ($curRow < $curPg * $maxRows)) {
										$row = $rows[$curRow];
										$curRow++;
								?>
										<div class="one-third sm-half mb-ls-full">
											<div class="author-box-3" style="height:350px">
												<div class="author-photo">
													<a href="<?= $ariacms->actual_link ?>author/<?= $ariacms->utf8ToUrl($row->fullname) . '-' . $row->id . '.html' ?>">
														<img src="<?= $row->image_url ?>" height="134" width="134" alt="Spectr News Theme">
													</a>
												</div>
												<div class="author-name">
													<a href="<?= $ariacms->actual_link ?>author/<?= $ariacms->utf8ToUrl($row->fullname) . '-' . $row->id . '.html' ?>" style="text-decoration:none;"><?= $row->fullname ?></a>
												</div>
												<div class="author-description"><?= nl2br($ariacms->textLimit($row->meta_brief, 30)) ?></div>
											</div>
										</div>
								<?php
									}
								}
								?>
								<!-- Page nav -->
								<div class="page-nav">
									<?= $ariacms->paginationPublic(count($rows), $maxRows, 3) ?>
								</div>
								<!-- Page nav END -->
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