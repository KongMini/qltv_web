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
<link rel="icon" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/<?= $ariacms->web_information->{'image-icon'} ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!--css old version-->
<link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/playfair-display.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/sf-ui-display.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/roboto.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/basis-grotesque-pro-font.css" />
<link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/general0adc.css?v=1655546038162" />
<link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/app.min0adc.css?v=1655546038162" />
<link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/loaders.mine209.css?v=1.0.0" />
<link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/mobile.min0adc.css?v=1655546038162" />
<link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/photoswipe.min.css" rel="stylesheet" />
<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/default-skin/default-skin.min.css" rel="stylesheet" />


<!--end css old version-->

<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/resetc619.css?v=1.0">
<link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/styles0adc.css?v=1655546038162">
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

<link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/site-dchic.css" rel="stylesheet" />
<style>


    .opacity-1 {
        opacity: 1;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }

    #modelCart {
        font-family: roboto-light;
    }
    /*the container must be positioned relative:*/
    #modelCart .product-viewed .viewed-container {
        overflow: hidden;
        /*overflow-x: scroll;*/
    }

    #modelCart .product-viewed .viewed-container .item {
        width: auto;
        font-size: 14px;
        max-width: 130px;
    }

    /*#modelCart .product-viewed .viewed-container .item img {
                height: 150px
            }*/

    #modelCart .product-viewed .name {
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        text-transform: uppercase;
        font-family: 'roboto-light';
        font-size: 12px;
        margin: 5px 0;
    }

    .circle_border span {
        width: auto;
        height: auto;
    }

    /*.product-item .product-item-hot-tag.tag-right {
        width: 200px;
    }*/

    .pull-right {
        float: inherit;
        font-family: "Basis-Grotesque-Pro-Light";
        color: #000;
    }

    #begin-body .header-product .custom-select {
        position: relative;
        font-family: Arial;
        width: 130px;
        display: inline-block;
        z-index: 90;
        height: inherit;
        padding: inherit;
        font-size: 14px;
        line-height: inherit;
        color: inherit;
        vertical-align: inherit;
        background: none;
        border: inherit;
        border-radius: inherit;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .custom-select select {
        display: none !important; /*hide original SELECT element:*/
    }

    .select-selected {
        background-color: transparent;
        border-top-color: rgba(0, 0, 0, 0.1) !important;
    }
    /*style the arrow inside the select element:*/
    .select-selected:after {
        position: absolute;
        content: "";
        top: 14px;
        right: 10px;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #555 transparent transparent transparent;
    }
    /*point the arrow upwards when the select box is open (active):*/
    .select-selected.select-arrow-active:after {
        border-color: transparent transparent #555 transparent;
        top: 7px;
    }
    /*style the items (options), including the selected item:*/
    .select-items div, .select-selected {
        color: black;
        padding: 5px 10px;
        border: 1px solid transparent;
        border-color: transparent rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1);
        cursor: pointer;
        user-select: none;
    }
    /*style items (options):*/
    .select-items {
        position: absolute;
        background-color: #fff;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
    }
    /*hide the items when the select box is closed:*/
    .select-hide {
        display: none;
    }

    .select-items div:hover, .same-as-selected {
        background-color: rgba(0, 0, 0, 0.03);
    }

    .select-sale {
        position: relative;
    }

    .select-sale:hover ul {
        display: block;
    }

    .select-sale ul {
        list-style: none;
        position: absolute;
        right: 100%;
        top: 0;
        width: 100%;
        background: #FFF;
        padding: 10px 15px;
        border: 1px solid #ddd;
        display: none;
    }

    #product-listing .product-thumbnail {
        position: relative;
    }

    .modal-content {
        padding: 10px;
        border-radius: 0;
    }

    .modal {
        z-index: 9999;
    }

    .product-popup .name {
        font-family: 'roboto-light';
        font-size: 16px;
    }

    .product-popup .color-name, .product-popup .size-name {
        font-family: 'roboto-light';
        font-size: 14px;
    }

    .color-red .old-price {
    }

    .price-new, .price-old {
        font-family: "Basis-Grotesque-Pro-Light";
        font-size: 12px;
    }

    .title-product-viewed, .title-product-add {
        font-family: 'roboto-medium';
        font-size: 18px;
    }

    .product-popup {
        margin: 30px 0;
    }

    .product-viewed .price-old {
        text-decoration-line: line-through;
        text-decoration-color: #000;
    }

    .btn-action-product, .btn-action-product {
        font-family: 'roboto-light';
        padding-left: 25px;
        padding-right: 25px;
    }

    @media only screen and (max-width: 1440px) {
        #begin-body .header-product .custom-select {
            font-size: 12px;
            width: 115px;
        }

        .custom-select-item, .sort-box label {
            font-size: 12px;
        }
        /*.w-product .product-item .product-item-hot-tag.tag-right {
            width: 150px;
        }*/
    }

    @media only screen and (min-width:768px) {
        .view-add-to-cart:hover {
            opacity: 1;
        }
    }

    @media only screen and (max-width: 768px) {
        .select-items div, .select-selected {
            padding: 5px 16px;
        }

        .sort-box label {
            top: 4px;
        }

        .modal .product-popup .name, .modal .product-popup .color-name, .modal .product-popup .size-name, #begin-body .modal .color-price-sale, .modal .color-red .old-price {
            font-size: 13px;
        }

        .product-thumb .view-add-to-cart {
            display: none;
        }

        .col-12.fix-Product-viewed {
            padding-left: 0;
            padding-right: 0;
        }

        #modelCart .product-viewed .viewed-container .item {
            max-width: 85px;
        }

        .product-content .product-item {
            padding-top: 5px !important;
        }
        /*.view-add-to-cart {
            display: none;
        }*/

    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 750px;
        }

        #modelCart .product-viewed .name, .price-new, .price-old {
            font-size: 10px;
        }
    }

    @media only screen and (max-width: 360px) {
        #modelCart .info {
            display: block !important;
        }

        #modelCart .btn-end {
            width: 100% !important;
        }

        #modelCart .btn-end .btn {
            font-size: 0.9rem;
        }

        #modelCart .title {
            font-size: 0.9rem;
        }
    }

    .product-item .product-item-hot-tag.tag-bottom-right {
        border: 1.5px ridge #fff;
        background: none !important;
    }

    .product-item .product-item-hot-tag.tag-bottom-left {
        left: auto;
        right: 5px;
        top: auto;
        bottom: 5px;
    }
    @media screen and (max-width: 768px){
        /*.w-product .product-item .product-item-hot-tag.tag-right {
           width: 85px;
       }*/
    }

</style>
