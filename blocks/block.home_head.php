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
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="<?= $ariacms->web_information->{$params->name} ?>" />
<meta name="copyright" content="<?= $ariacms->web_information->{$params->name} ?>" />
<meta property="og:site_name" content="<?= $ariacms->web_information->{$params->name} ?>" />
<meta property="og:url" content="<?= $ariacms->c_url ?>" />
<meta property="og:type" content="article" />
<link rel="icon" href="<?= $ariacms->web_information->{'image-icon'} ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!--css old version-->
<link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/playfair-display.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/sf-ui-display.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/roboto.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/basis-grotesque-pro-font.css" />
<link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/general0b50.css?v=1655546037204" />
<link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/app.min0b50.css?v=1655546037204" />
<link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/loaders.mine209.css?v=1.0.0" />
<link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/mobile.min0b50.css?v=1655546037204" />
<link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/photoswipe.min.css" rel="stylesheet" />
<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/default-skin/default-skin.min.css" rel="stylesheet" />


<!--end css old version-->

<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/resetc619.css?v=1.0">
<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/styles0b50.css?v=1655546037204">
<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/bootstrap-4.4.1-dist/css/bootstrap.min3661.css?v=2.0">
<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/sub-menu41d2.css?v=5.7">
<link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/kendo-ui/css/kendo.common-material.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/kendo-ui/css/kendo.material.min.css" />


<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/select2/select2.4.0.6.min.css" rel="stylesheet" />
<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/slick-carousel/slick.min.css" rel="stylesheet" />
<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/slick-carousel/slick-theme.css" rel="stylesheet" />
<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/owl-carousel2-2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/owl-carousel2-2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/owl-carousel2-2.3.4/assets/owl.theme.green.css" rel="stylesheet" />
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jquery-3.4.1.minc619.js?v=1.0"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jquery-3.2.1.minc619.js?v=1.0"></script>

<style>

    .modal-content {
        background-color: #ffffff00;
        border: 1px solid rgba(0,0,0,0);
    }

    .modal-body {
        padding: 0;
    }

    .btn-close-popup {
        float: right;
        margin-right: 5px;
        margin-bottom: 4px;
        margin-left: 5px;
    }

    @media(max-width: 786px) {
        .modal-dialog {
            margin: auto 1.5rem;
        }
    }

    .button-view {
        font-size: 13px;
        line-height: 1;
        border-width: 2px;
        padding: 7px 40px;
        font-family: 'Basis-Grotesque-Pro-Bold';
        display: inline-block;
        border: 1px solid #000;
        margin-top: 26px;
        color: rgb(255, 255, 255);
        border-color: rgb(255, 255, 255);
        margin-left: auto;
        margin-right: auto;
    }

    .title-banner {
        font-family: 'Basis-Grotesque-Pro-Bold';
        display: inline-grid;
        /*width: 100%;*/
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        text-transform: uppercase;
    }

    @media (min-width: 1500px) {
        .title-banner-fontsize {
            font-size: 55px;
        }
    }

    @media (max-width: 1499px) {
        .title-banner-fontsize {
            font-size: 55px;
        }
    }

    @media (max-width:1499px) and (min-width: 768px) {
        .title-banner-fontsize {
            font-size: 55px;
        }
    }

    @media (max-width:767px) {
        .title-banner-fontsize {
            font-size: 38px;
        }
    }

    .title-banner-detail {
        font-family: 'Basis-Grotesque-Pro-Light';
        font-size: 14px;
        text-transform: capitalize;
    }

    .title-banner h6 {
        line-height: 0.8 !important;
    }

    .slide-slicks {
        width: 100%;
    }

    .slide-slicks img {
        width: 100%;
    }

    .slick-prev, .slick-next {
        width: 40px;
        height: 40px;
    }

    .slick-prev:before, .slick-next:before {
        width: 22px;
        height: 22px;
        transition: .5s;
        float: left;
        box-shadow: -1px 1px 0 rgba(255,255,255,0.85);
        transform: rotate(45deg);
        font-size: 0;
        font-family: none;
    }

    .slick-prev:hover > .slick-prev:before, .slick-next:hover > .slick-next:before {
        box-shadow: -2px 2px 0 rgba(255,255,255,1);
        opacity: 1;
    }

    .slick-next:before {
        transform: rotate(225deg);
    }

    .slick-arrow {
        z-index: 999;
    }

    .slick-prev {
        margin-left: 50px;
    }

    .slick-next {
        margin-right: 35px;
    }
</style>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122476596-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-122476596-1');</script>
<!-- End - Google Analytics -->
<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return; n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
        n.queue = []; t = b.createElement(e); t.async = !0;
        t.src = v; s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        '../connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1254931944640658');
    fbq('track', 'PageView');</script>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=1254931944640658&amp;ev=PageView&amp;noscript=1" />
</noscript>




<?php
if ($analytics_code) {
    foreach ($analytics_code as $analytic_code) {
        if ($analytic_code->position == 'header')
            echo $analytic_code->code;
    }
}
?>
<style>
    .img-home-thumb {
        width: 75px;
    }

    .hidden {
        display: none;
    }
    @media(min-width:767px) {
        .organic-breadcrumb {
            background: url(<?= $ariacms->web_information->{'image-background-header'} ?>) center no-repeat;
        }
    }
</style>