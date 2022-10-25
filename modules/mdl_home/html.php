<?php
class View
{
	static function viewhome($home_configs, $home_config_details)
	{
		global $ariacms;
		global $params;
		global $taxonomies;
		global $database;
		global $ariaConfig_template;
?>
		<!DOCTYPE html>
		<html lang="vi">

		<head>
			<title><?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?></title>
			<meta name="description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />
			<meta name="keywords" content="<?= ($ariacms->web_information->{$params->meta_keyword} != '') ? $ariacms->web_information->{$params->meta_keyword} : $ariacms->web_information->{$params->name}; ?>" />
			<meta property="og:title" content="<?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?>" />
			<meta property="og:description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />
			<meta property="og:image" content="<?= $ariacms->web_information->{'image-icon'} ?>">
			<?= $ariacms->getBlock("home_head"); ?>
		</head>

		<body>
        <script>
            fbq('track', 'ViewContent', {
                value: 10.00,
                currency: 'USD',
            });</script>
        <!--Chặn copy ảnh-->
        <script type="text/javascript">
            function nocontext(e) {
                var clickedTag = (e == null) ? event.srcElement.tagName : e.target.tagName;
                if (clickedTag == "IMG")
                    return false;
            }
            document.oncontextmenu = nocontext;
        </script>

        <style>

            img {
                -webkit-user-drag: none;
                user-drag: none;
                -webkit-touch-callout: none;
            }
        </style>

        <div class="w-100 float-left">
            <!--Begin header-->
            <div class="header" id="partialviews">


                <style>
                    @font-face {
                        font-family: 'uvf didot';
                        src: url('<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/uvn%20didot/UVF%20DIDOT.TTF') format('truetype');
                    }
                    .flagship{
                        font-family: 'uvf didot', sans-serif!important;
                        color: #911E1E!important;
                        font-weight: 900!important;
                    }
                </style>



                <?= $ariacms->getBlock("home_header") ?>
              </div>
            </div>
        </div>
        <div class="container-fluid">
            <!--Begin body-->

            <div class="row" id="begin-body">
                <!--Begin primary banner-->
                <div class="slide-slicks primary-banner" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
                    <div class="position-relative">
                        <a href="flagship-store.html" alt="Flagship Store">
                            <img class="img-desk" alt="Flagship Store" src="<?= $ariacms->web_information->{'image-background-header'}?>" />

                        </a>
                    </div>
                </div>
			<?php
			if ($home_configs[0] && $home_configs[0]->status == "active") {
			?>
                <div class="slide-slicks second-banner" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
                <?php
                foreach ($home_config_details as $home_config_detail) {
                    if ($home_configs[0]->id == $home_config_detail->parent && $home_config_detail->status == 'active') {?>

                            <div>
                                <a href="san-pham.html" alt="Sản phẩm">
                                    <img class="img-desk" alt="" src="<?= $home_config_detail->image ?>" />

                                </a>
                            </div>

                        <?php
                        }
                    }
                ?>
                </div>
			<?php
			}?>

			<?= $ariacms->getBlock("home_product_one") ?>

            <?= $ariacms->getBlock("home_product_two") ?>

                </div>
            </div>
			<?php //$ariacms->getBlock("footer_product") ?>

			<?= $ariacms->getBlock("footer") ?>

			<?= $ariacms->getBlock("home_footer_script") ?>

			<script>
				var days = parseInt($(".days").text());
				var hours = parseInt($(".hours").text());
				var minutes = parseInt($(".minutes").text());
				var seconds = parseInt($(".seconds").text());
				var endtime = days * 24 * 60 * 60 + hours * 60 * 60 + minutes * 60 + seconds;
				var deadline = new Date(Date.parse(new Date()) + endtime * 1000);
				initializeClock('clockdiv', deadline);
			</script>

		</body>

		</html>
<?php
	}
}
?>