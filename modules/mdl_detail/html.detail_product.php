<?php
global $ariacms;
global $params;
global $ariaConfig_template;
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

	<meta property="og:image" content="<?= ($detail['image'] != '') ? $detail['image'] : $detail['image_thumb']; ?>">
    <?= $ariacms->getBlock("head"); ?>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/playfair-display.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/sf-ui-display.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/roboto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/basis-grotesque-pro-font.css" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/general60e4.css" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/app.min60e4.css" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/loaders.mine209.css" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/mobile.min60e4.css" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/photoswipe.min.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/default-skin/default-skin.min.css" rel="stylesheet" />


    <!--end css old version-->

    <link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/resetc619.css">
    <link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/styles60e4.css">
    <link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/bootstrap-4.4.1-dist/css/bootstrap.min3661.css">
    <link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/sub-menu41d2.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/kendo-ui/css/kendo.common-material.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/kendo-ui/css/kendo.material.min.css" />


    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/select2/select2.4.0.6.min.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/slick-carousel/slick.min.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/slick-carousel/slick-theme.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/owl-carousel2-2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/owl-carousel2-2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/owl-carousel2-2.3.4/assets/owl.theme.green.css" rel="stylesheet" />
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jquery-3.4.1.minc619.js"></script>
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jquery-3.2.1.minc619.js"></script>

    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/site-dchicf9e3.css" rel="stylesheet" />

    <style>

        .title-product-maxmatch, .title-product-related {
        }
        /*tooltip*/
        /* START TOOLTIP STYLES */
        [tooltip] {
            position: relative; /* opinion 1 */
        }

        /* Applies to all tooltips */
        [tooltip]::before,
        [tooltip]::after {
            text-transform: none; /* opinion 2 */
            font-size: .9em; /* opinion 3 */
            line-height: 1;
            user-select: none;
            pointer-events: none;
            position: absolute;
            display: none;
            opacity: 0;
        }

        [tooltip]::before {
            content: '';
            border: 5px solid transparent; /* opinion 4 */
            z-index: 1001; /* absurdity 1 */
        }

        [tooltip]::after {
            content: attr(tooltip); /* magic! */
            /* most of the rest of this is opinion */
            font-family: Helvetica, sans-serif;
            text-align: center;
            /*
            Let the content set the size of the tooltips
            but this will also keep them from being obnoxious
            */
            min-width: 3em;
            max-width: 21em;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 1ch 1.5ch;
            border-radius: .3ch;
            box-shadow: 0 1em 2em -.5em rgba(0, 0, 0, 0.35);
            background: #333;
            color: #fff;
            z-index: 1000; /* absurdity 2 */
        }

        /* Make the tooltips respond to hover */
        [tooltip]:hover::before,
        [tooltip]:hover::after {
            display: block;
        }

        /* don't show empty tooltips */
        [tooltip='']::before,
        [tooltip='']::after {
            display: none !important;
        }

        /* FLOW: UP */
        [tooltip]:not([flow])::before,
        [tooltip][flow^="up"]::before {
            bottom: calc(100% + 13px);
            border-bottom-width: 0;
            border-top-color: #333;
        }

        [tooltip]:not([flow])::after,
        [tooltip][flow^="up"]::after {
            bottom: calc(100% + 18px);
        }

        [tooltip]:not([flow])::before,
        [tooltip]:not([flow])::after,
        [tooltip][flow^="up"]::before,
        [tooltip][flow^="up"]::after {
            left: 46%;
            transform: translate(-50%, -.5em);
        }

        /* FLOW: DOWN */
        [tooltip][flow^="down"]::before {
            top: 100%;
            border-top-width: 0;
            border-bottom-color: #333;
        }

        [tooltip][flow^="down"]::after {
            top: calc(100% + 5px);
        }

        [tooltip][flow^="down"]::before,
        [tooltip][flow^="down"]::after {
            left: 50%;
            transform: translate(-50%, .5em);
        }

        /* FLOW: LEFT */
        [tooltip][flow^="left"]::before {
            top: 50%;
            border-right-width: 0;
            border-left-color: #333;
            left: calc(0em - 5px);
            transform: translate(-.5em, -50%);
        }

        [tooltip][flow^="left"]::after {
            top: 50%;
            right: calc(100% + 5px);
            transform: translate(-.5em, -50%);
        }

        /* FLOW: RIGHT */
        [tooltip][flow^="right"]::before {
            top: 50%;
            border-left-width: 0;
            border-right-color: #333;
            right: calc(0em - 5px);
            transform: translate(.5em, -50%);
        }

        [tooltip][flow^="right"]::after {
            top: 50%;
            left: calc(100% + 5px);
            transform: translate(.5em, -50%);
        }

        /* KEYFRAMES */
        @keyframes tooltips-vert {
            to {
                opacity: .9;
                transform: translate(-50%, 0);
            }
        }

        @keyframes tooltips-horz {
            to {
                opacity: .9;
                transform: translate(0, -50%);
            }
        }

        /* FX All The Things */
        [tooltip]:not([flow]):hover::before,
        [tooltip]:not([flow]):hover::after,
        [tooltip][flow^="up"]:hover::before,
        [tooltip][flow^="up"]:hover::after,
        [tooltip][flow^="down"]:hover::before,
        [tooltip][flow^="down"]:hover::after {
            animation: tooltips-vert 300ms ease-out forwards;
        }

        [tooltip][flow^="left"]:hover::before,
        [tooltip][flow^="left"]:hover::after,
        [tooltip][flow^="right"]:hover::before,
        [tooltip][flow^="right"]:hover::after {
            animation: tooltips-horz 300ms ease-out forwards;
        }
        /***************************************************/
        .info-product .name, .product-name {
            font-size: 14px;
            font-family: 'roboto-light';
            padding: 5px 0;
        }

        .price-detail {
            font-family: "Basis-Grotesque-Pro-Light";
            font-size: 16px;
        }

        .product-ms {
            font-family: "Basis-Grotesque-Pro-Light";
            font-size: 14px;
        }

        .price-detail .origin {
            color: #000;
            font-size: 18px;
        }

        .price-detail .sale {
            color: #d33200 !important;
            font-size: 18px;
        }

        price-detail-child {
            font-family: "Basis-Grotesque-Pro-Light";
            font-size: 12px;
        }

        .price-detail-child .sale {
            color: #d33200 !important;
            font-size: 13px;
            font-family: "Basis-Grotesque-Pro-Light";
        }

        .price-detail-child .origin {
            color: #000;
            font-size: 11px;
            font-family: "Basis-Grotesque-Pro-Light";
        }

        body {
            margin-top: 0 !important;
        }

        .font-roboto-thin {
            font-family: roboto-thin;
        }

        .font-roboto-light {
            font-family: roboto-light;
        }

        .z-index-99999 {
            z-index: 99999;
        }

        .card.card-body {
            border: none;
        }

        .info {
            width: 370px;
        }

        .mobile {
            display: none;
        }

        .circle_border span {
            width: auto;
            height: auto;
        }

        .owl-carousel.slide-review .owl-dots {
            position: absolute;
            bottom: 0;
            margin: auto;
            left: 0;
            right: 0;
        }

        #product-detail {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .img-related-product, .img-mix-and-max {
            max-width: 255px;
        }

        .img-mix-and-max {
            /*max-height: 274px;
            width: 100%;
            height: 100%;*/
        }

        .slide-mixmatch, .slide-relate {
            padding-bottom: 20px;
        }

        .info-product .name, .product-name {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .slide-relate .item, .slide-mixmatch .item {
            padding: 0 5px;
        }

        @media(min-width: 1200px) {
            #product-detail {
                margin: 30px 150px;
            }
        }

        @media(max-width: 1200px) {
            #product-detail,
            #product-relate {
                font-size: 0.9rem;
            }
        }

        @media(max-width:992px) {
            .desktop {
                display: none !important;
            }

            .mobile {
                display: block;
            }

            #product-detail,
            #product-relate {
                font-size: 0.9rem;
            }
        }

        @media(max-width:768px) {
            .slide-relate .item, .slide-mixmatch .item {
                padding: 0 2.5px;
            }

            .size-info-mobile {
                display: block !important;
            }

            [tooltip]:not([flow])::before,
            [tooltip]:not([flow])::after,
            [tooltip][flow^="up"]::before,
            [tooltip][flow^="up"]::after {
                display: none;
            }

            .info-product .name, .product-name, .price-detail {
                font-size: 11px;
            }

            .title-product-maxmatch, .title-product-related {
                font-size: 16px;
            }

            .info-product-fix .origin, .info-product-fix .sale {
                width: 100%;
                text-align: left;
                margin-right: 0;
                float: left;
                line-height: 18px;
            }

            .slide-mixmatch, .slide-relate {
                padding-bottom: 15px;
            }
        }

        .fix-css-color {
            width: 100%;
            float: left;
        }
    </style>


</head>

<body>
<script>
    //fbq('track', 'ViewContent', {
    //    value: 10.00,
    //    currency: 'USD',
    //});</script>
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
        <?= $ariacms->getBlock("header"); ?>
        <style>
            .content-box-gift {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                width: 80%;
                text-align: left;
                float: left;
                padding: 5px 0;
                background-color: #fff7e4;
                margin: 5px 0; font-size:11px; background-color:#fff7e4;
            }

            .buy-box-gift {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                width: 20%;
                float: right;
                text-align: right;
                color: #de5d39 !important;
                padding: 6px 0;
                margin: 5px 0;
                background-color: #fff7e4;
            }

            .gift-box {
                border-radius: 2px;
                border: 1px solid rgb(243 82 82);
                box-sizing: border-box;
                color: #de5d39;
                padding: 2px 5px;
            }
        </style>
    </div>
</div>
<div class="container-fluid">
    <div class="row" id="begin-body" style="padding-top: 56px;">
        <div class="col-12">
            <div id="product-detail">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="row desktop">
                            <?php for($i = 0; $i< 3; $i++){?>
                                <div class="col-6 form-group">
                                    <div class="view-image">
                                        <img class="w-100" style="cursor:pointer" src="<?= $images[$i]->image_link?>" alt="">
                                    </div>
                                </div>
                            <?php }?>
                            <?php if(count($images) > 3){?>
                            <div class="col-6 form-group ">
                                <div class="position-relative view-image">
                                    <img class="w-100" src="<?= $images[$i]->image_link?>" alt="">
                                    <div class="position-absolute w-100 h-100" style="top:0; background-color:#b5b5b5; opacity:0.7">
                                    </div>
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center" style="cursor:pointer;top:0">
                                        <span style="font-size:5rem; color:#ffffff">+<?= count($images)?></span>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="form-group mobile">
                            <div class="owl-carousel slide-review owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                        <?php for($i = 0; $i< 4; $i++){?>
                                        <div class="owl-item">
                                            <div class="item view-image">
                                                <img class="w-100" style="cursor:pointer;" src="<?= $images[$i]->image_link?>" alt="">
                                            </div>
                                        </div>
                                        <?php }?>

                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev">
                                        <span aria-label="Previous">‹</span>
                                    </button>
                                    <button type="button" role="presentation" class="owl-next">
                                        <span aria-label="Next">›</span>
                                    </button>
                                </div>
                                <div class="owl-dots">
                                    <button role="button" class="owl-dot active"><span></span></button>
                                    <button role="button" class="owl-dot"><span></span></button>
                                    <button role="button" class="owl-dot"><span></span></button>
                                    <button role="button" class="owl-dot"><span></span></button>
                                </div>
                            </div>




                        </div>
                    </div>

                    <div class="col-12 col-md-5 d-flex justify-content-center">
                        <div class="text-center info font-roboto-light">
                            <div>
                                <div class="text-uppercase product-name"><?= $detail[$params->title] ?></div>
                                <div class="product-ms">MS: <?= $detail['meta_product_code'] ?></div>
                            </div>
                            <div class="info-product mt-2">
                                <div class="form-group price-detail">
                                    <?php if($detail['product_sale'] > 0 && $detail['price_status'] != 'deactive'){?>

                                        <span class="sale"><?= $ariacms->formatPrice($detail['product_sale'])?> VNĐ</span>

                                    <?php
                                    }if($detail['product_price'] > 0  && $detail['price_status'] != 'deactive'){
                                    ?>

                                        <span class="mr-3 origin" style="font-size:14px;"><strike><?= $ariacms->formatPrice($detail['product_price'])?> VNĐ</strike></span>

                                    <?php }?>

                                </div>
                                <div class="color form-group fix-css-color">
                                    <div class="label form-group">
                                        <?= $images[0] -> title_vi?>
                                    </div>
                                    <div>
                                        <?php
                                        $array_url  = [$images[0] -> image_link];
                                        $string_url = "";
                                        $array_id   = [];
                                        $string_id   = "";
                                        $color = $images[0] -> title_en;
                                        $color_title = $images[0] -> title_vi;
                                        $color_number = 1;

                                        for($i = 1; $i < (count($images) - 1); $i++){
                                            //echo $i;
                                            if($images[$i] -> title_en == $color) {
                                                // add array color
                                                array_push($array_url, $images[$i]->image_link);
                                                array_push($array_id, $images[$i]->image_id);
                                            }else{
                                                $string_url = implode(",",$array_url);
                                                $string_id = implode(",",$array_id);
                                            ?>
                                                <span class="circle <?php if($color_number == 1) echo 'active' ?>" style="background-color: <?=$color?>" data-name="<?=$color_title?>" data-id="<?=$array_id[0]?>" data-size-ids="<?=$string_id?>" data-urls="<?=$string_url?>"></span>
                                        <?php
                                            $array_url = [];
                                            $string_url = "";
                                            $array_id   = [];
                                            $string_id   = "";
                                            $color = $images[$i] -> title_en;
                                            $color_title = $images[$i] -> title_vi;
                                            $color_number ++;

                                            }
                                        }
                                        $index_last = count($images) - 1;
                                        if($images[$index_last] -> title_en != $color){
                                            array_push($array_url, $images[$index_last]->image_link);
                                            array_push($array_id, $images[$index_last]->image_id);
                                            $string_url = implode(",",$array_url);
                                            $string_id = implode(",",$array_id);
                                            ?>
                                            <span class="circle " style="background-color: <?=$color?>" data-name="<?=$color_title?>" data-id="<?=$array_id[0]?>" data-size-ids="<?=$string_id?>" data-urls="<?=$string_url?>"></span>
                                            <span class="circle" style="background-color: <?=$images[$index_last] -> title_en?>" data-name="<?=$images[$index_last] -> title_vi?>" data-id="<?=$images[$index_last] ->image_id?>" data-size-ids="" data-urls="<?=$images[$index_last] ->image_link?>"></span>
                                            <?php
                                        }else{
                                            array_push($array_url, $images[$index_last]->image_link);
                                            array_push($array_id, $images[$index_last]->image_id);
                                            $string_url = implode(",",$array_url);
                                            $string_id = implode(",",$array_id);
                                        ?>
                                            <span class="circle " style="background-color: <?=$color?>" data-name="<?=$color_title?>" data-id="<?=$array_id[0]?>" data-size-ids="<?=$string_id?>" data-urls="<?=$string_url?>"></span>
                                        <?php }?>
                                    </div>

                                </div>
<!--                                <div class="size">-->
<!--                                                            <span class="tool-tip">-->
<!--                                    <span class="product-feature-size active circle circle_border" data-id="1">-->
<!--                                        <span class="name">S</span>-->
<!--                                    </span>-->
<!--                                </span>-->
<!--                                    <span class="tool-tip">-->
<!--                                    <span class="product-feature-size  circle circle_border" data-id="2">-->
<!--                                        <span class="name">M</span>-->
<!--                                    </span>-->
<!--                                </span>-->
<!--                                    <span class="tool-tip">-->
<!--                                    <span class="product-feature-size  circle circle_border" data-id="3">-->
<!--                                        <span class="name">L</span>-->
<!--                                    </span>-->
<!--                                </span>-->
<!--                                </div>-->
                                <div class="size-info-mobile d-none text-danger">

                                </div>
                            </div>

                            <div class="size-guide form-group mt-2" style="cursor:pointer; text-decoration:underline">
                                Hướng dẫn chọn size
                            </div>
<!--                            <div class="btn add-to-cart text-white w-100" id="btn-add-cart">Thêm vào giỏ hàng</div>-->

                            <div class="btn add-to-cart text-white w-100 hidden" style="margin-top:20px;" id="btn-process-order">Xử lý đơn hàng</div>


                            <div id="accordion">
                                <hr style="opacity:0">
                                <div class="detail-product">
                                    <div class="">
                                        <a class="" data-toggle="collapse" href="#togglDetailProduct" role="button" aria-expanded="false" aria-controls="togglDetailProduct">
                                            Mô tả sản phẩm
                                        </a>
                                        <span class="toggle-plus float-right cursor-pointer" data-toggle="collapse" href="#togglDetailProduct" role="button" aria-expanded="false" aria-controls="togglDetailProduct">+</span>
                                        <span class="toggle-minus  float-right cursor-pointer d-none" data-toggle="collapse" href="#togglDetailProduct" role="button" aria-expanded="false" aria-controls="togglDetailProduct">-</span>
                                    </div>
                                    <div class="collapse font-roboto-thin" id="togglDetailProduct" data-parent="#accordion">
                                        <div class="card card-body">
                                            <?= $ariacms->convertEditor($detail[$params->content]) ?>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="guid-protect">
                                    <div class="">
                                        <a class="" data-toggle="collapse" href="#togglGuidProtect" role="button" aria-expanded="false" aria-controls="togglGuidProtect">
                                            Hướng dẫn bảo quản
                                        </a>
                                        <span class="toggle-plus float-right cursor-pointer" data-toggle="collapse" href="#togglGuidProtect" role="button" aria-expanded="false" aria-controls="togglGuidProtect">+</span>
                                        <span class="toggle-minus  float-right cursor-pointer d-none" data-toggle="collapse" href="#togglGuidProtect" role="button" aria-expanded="false" aria-controls="togglGuidProtect">-</span>
                                    </div>
                                    <div class="collapse font-roboto-thin" id="togglGuidProtect" data-parent="#accordion">
                                        <div class="card card-body">

                                            <?= $ariacms->convertEditor($detail['meta_highlight']) ?>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="mb-5">
                                <a class="mr-3" href="<?= $ariacms->web_information->facebook ?>">Facebook</a>
                                <a class="mr-3" href="<?= $ariacms->web_information->twitter?>">Instagram</a>
                                <a class="mr-3" href="<?= $ariacms->web_information->youtube?>">Youtube</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="photoWipe" class="d-none">
                    <!-- Root element of PhotoSwipe. Must have class pswp. -->
                    <div class="pswp z-index-99999" tabindex="-1" role="dialog" aria-hidden="true">

                        <!-- Background of PhotoSwipe.
                        It's a separate element as animating opacity is faster than rgba(). -->
                        <div class="pswp__bg"></div>

                        <!-- Slides wrapper with overflow:hidden. -->
                        <div class="pswp__scroll-wrap">

                            <!-- Container that holds slides.
                            PhotoSwipe keeps only 3 of them in the DOM to save memory.
                            Don't modify these 3 pswp__item elements, data is added later on. -->
                            <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                            </div>

                            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                            <div class="pswp__ui pswp__ui--hidden">

                                <div class="pswp__top-bar">

                                    <!--  Controls are self-explanatory. Order can be changed. -->

                                    <div class="pswp__counter"></div>

                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>


                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                                    <!-- element will get class pswp__preloader--active when preloader is running -->
                                    <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                            <div class="pswp__preloader__cut">
                                                <div class="pswp__preloader__donut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

                                <div class="pswp__caption">
                                    <div class="pswp__caption__center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" id="product-relate">

            <?php
            foreach ($product_relateds as $product) {
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>">
                            <img class="img-fluid" src="<?= ($product->image_thumb != '') ? $product->image_thumb : $product->image ?>" alt="<?= $product->{$params->title} ?>">
                        </a>
                        <div class="product-details">
                            <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>">
                                <h6><?= $product->{$params->title} ?></h6>
                            </a>
                            <div class="price">
                                <?= ($product->product_sale > 0 && $product->price_status != 'deactive') ? '<h6>' . $ariacms->formatPrice($product->product_sale) . '</h6>' : '<h6>' . _CONTACT . '</h6>'; ?>
                                <?= ($product->product_price > 0 && $product->price_status != 'deactive') ? '<h6 class="l-through">' . $ariacms->formatPrice($product->product_price) . ' ₫</h6>' : ""; ?>
                            </div>
                            <div class="prd-bottom">
                                <a href="javascript:void(0)" item-id="<?= $product->id ?>" onclick="cartAdd(<?= $product->id ?>)" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text"><?= _ADD_TO_CART ?></p>
                                </a>
                                <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text"><?= _DETAIL ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <?php if($product_relateds){?>
            <div class="row mb-5  d-flex justify-content-center" style="background-color:#f6f6f6">
                <div class="col-12">
                    <h4 class="text-center text-uppercase mt-md-5 mt-mb-5 mt-4 mb-4 title-product-maxmatch">Mix And Match</h4>
                    <div class="owl-carousel owl-theme slide-mixmatch d-flex justify-content-center" style="overflow:hidden">
                        <?php foreach ($product_relateds as $product) {?>
                        <div class="item">
                            <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>" class="text-dark">
                                <div class="product-thumbnail">
                                    <img class="img-mix-and-max" src="<?= $product->image ?>" alt=" <?= $product->{$params->title} ?>">
                                </div>
                            </a>

                            <div class="info-product info-product-fix p-1">
                                <div class="font-roboto-light product-name">
                                    <?= $product->{$params->title} ?>
                                </div>
                                <div class="price-detail-child">
                                    <span class="origin"><?= $ariacms->formatPrice($product->product_sale) ?> VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php }?>
            <?php if($products){?>
            <div class="row mb-5  d-flex justify-content-center" style="background-color:#f6f6f6">
                <div class="col-12">
                    <h4 class="text-center  mt-md-5 mt-4 mb-md-5 mb-4 title-product-related">SẢN PHẨM MỚI NHẤT</h4>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme slide-relate d-flex justify-content-center" style="overflow:hidden">
                        <?php foreach ($products as $product){?>
                        <div class="item">
                            <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>" class="text-dark">
                                <div class="product-thumbnail">
                                    <img class="img-related-product" src="<?= $product->image ?>" alt=" <?= $product->{$params->title} ?>">
                                </div>
                            </a>

                            <div class="info-product info-product-fix p-1">
                                <div class="name font-roboto-light">
                                    <?= $product->{$params->title} ?>
                                </div>
                                <div class="price-detail-child">
                                    <span class="origin"><?= $ariacms->formatPrice($product->product_sale) ?> VNĐ</span>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- Set up your HTML -->
        <div class=" d-none" id="view-image-fixed">
            <div class="container-fluid align-items-center d-flex">
                <div class="owl-carousel owl-theme slie-viewall d-flex justify-content-center owl-loaded owl-drag" style="margin:0 30px; overflow:hidden">





                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 50px;">
                            <?php foreach ($images as $image){?>
                            <div class="owl-item active" style="width: auto; margin-right: 10px;">
                                <div class="item view-image">
                                    <img class="img-fixed" style="width: 73px; opacity: 1;" src="<?= $image->image_link?>">
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                        <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                    </div>
                    <div class="owl-dots disabled"></div></div>
            </div>
        </div>






    </div>
</div>


	<?= $ariacms->getBlock("footer"); ?>
    <style>
        .event-handmade_desktop {
            position: fixed;
            top: 93px;
            left: 25px;
            z-index: 1000;
            display: block !important;
            bottom: 48px !important;
        }

        .event-handmade_mobile {
            display: none !important;
        }

        /*.event-handmade_desktop img {
            width: 30%;
        }*/

        @media(max-width: 767px) {
            .event-handmade_desktop {
                display: none !important;
            }

            .event-handmade_mobile {
                position: fixed;
                top: auto;
                bottom: 0px;
                left: 0;
                /*bottom: 39px;
                left: 10px;*/
                z-index: 1000;
                display: block !important;
            }

            .event-handmade_mobile img {
                width: 100%;
                /*width: 18%;*/
            }
        }
    </style>
    <?php
        $query = "SELECT * FROM `e4_web_image` WHERE position = 'size'";
        $database->setQuery($query);
        $sizes = $database->loadRow();
    ?>
    <!--Old scrip-->
    <!-- Vuejs -->

    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/simply-toast.min.js"></script>
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/fansi.prototype0290.js"></script>
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/typeahead/typeahead.bundle.min.js"></script>
    <!-- JQUERY SELECT2 INPUT -->
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/select2/select2.4.0.6.full.min.js"></script>
    <!--Site js-->
    <script type="text/javascript">
        var IsHomepage = false;
    </script>
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/site60e4.js"></script>
    <!-- Request access token -->
    <script type="text/javascript">var __RequestVerificationToken = "CfDJ8N9LW0FJ59ZPouBHdG2QRKZ27lrQN_mGD36EecxqS2n0BJ-oXa_kNfVaUfVNMai1YAkUOtkF7jqa0LZvszcaGAAX3dX3cOzAoN4CIoEX13MJLauGq8Zu3Ambl7XJ6seLCrLqY4TsniJT1-TskahT0Sc";</script>

    <!--end old scrip-->
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/photoswipe.js"></script>
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/photoswipe-ui-default.js"></script>
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/owl-carousel2-2.3.4/owl.carousel.min.js"></script>
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/slick-carousel/slick.js"></script>
    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/site/san-pham3860.js"></script>
    <script type="text/javascript" src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/kendo-ui/js/kendo.all.min.js"></script>

    <script>
        jQuery(document).ready(function () {
            /*fix header fixed*/
            var topmenu_height = $("#top-menu").height();
            var toptitle_height = $("#top-title").height();
            var isHomepage = false;
            if (!isHomepage) {

                if (window.innerWidth > 768) {
                    $("#begin-body").css("padding-top", topmenu_height + toptitle_height);
                } else {
                    $("#begin-body").css("padding-top", $("#header-mobile").height() + toptitle_height);
                }
            }

            /*fix auto height paper*/
            setAutoHeight();
            $(window).resize(function () {
                setAutoHeight();
            });
        });

        function setAutoHeight() {
            var news_Width = $(".paper-second-column .item").width();
            if (window.innerWidth < 768) {
                $(".paper-second-column .item a img").css({ "width": news_Width, "height": news_Width });
            } else {
                $(".paper-second-column .item a img").css({ "width": news_Width, "height": news_Width });
            }
        }
        /*close mini cart*/
        function closeBox() {
            if ($(".mini-cart").css("right") != "0px") {
                $(".mini-cart").css("right", "0px")
            } else {
                $(".mini-cart").css("right", "-100%")
            }
        }
    </script>

    <!--For submenu-->
    <script type="text/javascript">
        var isHome = true;
        var isCheckHomePage = false;
        if (isCheckHomePage) {
            isHome = true;
        } else {
            isHome = false;
        }
        var isMobile = false;

        if (window.innerWidth <= 768) {
            var isMobile = true;
        }

        function headerRemove() {
            $("#desktop-header-logo").attr("src", $("#desktop-header-logo").attr("data-logo-white"));
            $("#top-menu").removeClass("top-menu-move");
            $("#top-title").removeClass("top-title-move");
            /*set active icon color right menu*/
            $(".ic-search").removeClass("ic-search-move");
            $(".ic-user").removeClass("ic-user-move");
            $(".ic-shopping-cart").removeClass("ic-shopping-cart-move");
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop >= 10) {
                $(".header#partialviews").css("display", "none");
            }
        }

        function headerAdd() {
            $("#desktop-header-logo").attr("src", $("#desktop-header-logo").attr("data-logo-black"));
            $("#top-menu").addClass("top-menu-move");
            $("#top-title").addClass("top-title-move");
            /*set active icon color right menu*/
            $(".ic-search").addClass("ic-search-move");
            $(".ic-user").addClass("ic-user-move");
            $(".ic-shopping-cart").addClass("ic-shopping-cart-move");
            $(".header#partialviews").css("display", "block");
        }

        function headerMobileRemove() {
            $('#header-mobile').removeClass('active');
            $("#header-logo").attr("src", $("#header-logo").attr("data-logo-black"));
            $("#header-mobile").removeClass("header-m-move");
            $("#top-title").removeClass("top-title-move");
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop >= 10) {
                $(".header#partialviews").css("display", "none");
            }
        }

        function headerMobileAdd() {
            $('#header-mobile').addClass('active');
            $("#header-logo").attr("src", $("#header-logo").attr("data-logo-white"));
            $("#header-mobile").addClass("header-m-move");
        }

        var lastScrollTop = 0;

        /* Menu when body begin scroll*/
        jQuery(window).on('scroll', function () {
            var tmpToggle = $('#menu-m-btn').data('toggle');
            var height = $(this).scrollTop();
            var st = window.pageYOffset || document.documentElement.scrollTop;
            if (st > lastScrollTop) {
                /* downscroll code*/
                if (!isMobile) {
                    headerRemove();
                }
                else {
                    if (!tmpToggle) {
                        headerMobileRemove();
                    }
                }
            } else {
                /* upscroll code*/
                if (!isMobile) {
                    if (height <= 0) {
                        if (isHome) {
                            headerRemove();
                        }
                    } else {
                        headerAdd();
                    }
                }
                else {
                    if (!tmpToggle) {
                        if (isHome) {
                            if (height <= 0) {
                                $("#header-logo").attr("src", $("#header-logo").attr("data-logo-white"));
                                $("#header-mobile").removeClass("header-m-move");
                                $('#header-mobile').addClass('active');
                            }
                        }
                        else {
                            $("#header-logo").attr("src", $("#header-logo").attr("data-logo-black"));
                        }

                        $("#header-mobile").addClass("header-m-move");
                        $("#top-title").addClass("top-title-move");
                        $(".header#partialviews").css("display", "block");
                    }
                }
            }
            lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling


            /* begin for old effect menu
                var height = $(this).scrollTop();
                if (height > 0) {
                    headerAdd();
                    if (isMobile) {
                        if (isHome) {
                            headerMobileRemove();
                        } else {
                            headerMobileRemove();
                        }
                    }
                }
            if (height <= 0) {
                    if (isHome) {
                        headerRemove();
                    }
                    if (isMobile) {
                        if (isHome) {
                            headerMobileAdd();
                        }
                    }
                }*/
        });
        /* end for old effect menu */

        /*Load default when body at any where position*/
        jQuery(document).ready(function () {
            if (!isHome) {
                headerAdd();
                if (isMobile) {
                    headerMobileRemove();
                }
            }
            /* begin for old effect menu*/
            /*if (window.scrollY <= 0) {
                if (isHome) {
                    headerRemove();
                }
                else {
                    headerAdd();
                }
                if (isMobile) {
                    if (isHome) {
                        headerMobileAdd();
                    } else {
                        headerMobileRemove();
                    }
                }

            } else {
                headerAdd();
                if (isMobile) {
                    if (isHome) {
                        headerMobileRemove();
                    } else {
                        headerMobileRemove();
                    }
                }
            }*/
            /*end for old effect menu */


            /*When hover and show submenu*/
            $(".dropdown").hover(
                function () {
                    headerAdd();
                    $(this).find('.sub-menu').addClass('dropdown-menu-active');
                    $(this).find('.sub-menu').stop().fadeIn("fast");
                },
                function () {
                    if (window.scrollY <= 0) {
                        if (isHome) {
                            headerRemove();
                        }
                    }
                    $(this).find('.sub-menu').removeClass('dropdown-menu-active');
                    $(this).find('.sub-menu').stop().fadeOut("fast");
                });

            /* Set Menu Mobile Wrap
            if (window.innerWidth <= 768) {
                if (!isHome) {
                    $('#header-mobile').removeClass('active');
                    $("#header-logo").attr("src", $("#header-logo").attr("data-logo-black"));
                }
                $(".menu-m-wrap2").height(600);
                $(window).resize(function () {
                    $(".menu-m-wrap2").height(600);
                });
            }*/

            /* Toggle submenu-child*/
            $(".submenu-child-toggle").bind("click", function () {
                var i = $(this).find("i");
                if (i.text() == "+") {
                    i.text("-");
                } else {
                    i.text("+");
                }
                $(this).parent().find(".ul-submenu-m-wrap").slideToggle();
            });

            $('.search-box-btn').click(function () {
                $('.search-box-wp').toggleClass('hidden');
                $('#search-box-header').focus();

                var icLoggedIn = $('.area-login').find('.ic-loggedin');
                if (icLoggedIn.length > 0) {
                    $('#search-box-header').addClass('search-box-loggin');
                } else {
                    $('#search-box-header').removeClass('search-box-loggin');
                }

            });

            $('.search-box-close').click(function () {
                $('.search-box-wp').addClass('hidden');
            });

            $('.ic-shopping-cart').click(function () {
                if ($(".mini-cart").css("right") != "0px") {
                    $(".mini-cart").css("right", "0px")
                } else {
                    $(".mini-cart").css("right", "-100%")
                }
            });
            /*End menu mobile*/

            /*serach product*/
            (function () {
                var bestPictures = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    remote: {
                        url: F.url('san-pham/search.html'),
                        prepare: function (query, settings) {
                            /*settings.type = "POST";*/
                            settings.contentType = "application/json; charset=UTF-8";
                            /*settings.data = JSON.stringify({ sku: query });*/
                            settings.url += F.http_build_query({ sku: query });

                            return settings;
                        }
                    }
                });

                $('.search-box').typeahead(null, {
                    name: 'best-pictures',
                    display: 'value',
                    source: bestPictures,
                    templates: {
                        suggestion: function (data) {
                            var html = '<div>';
                            html += '<a href="' + F.url(data.html) + '"><img src="' + data.featuredImage + '" /></a>';
                            html += '<a class="product-name" href="' + F.url(data.html) + '">' + data.name + '</a>';
                            html += '</div>';
                            return html;
                        }
                    }
                });

                //$('#search-box-btn').bind('click', function () {
                //    $('.search-box-wp').toggleClass('hidden');
                //    $('#search-box-header').focus();
                //    $('#search-box-header2').focus();
                //});

                //$('.search-box-close').bind('click', function () {
                //    $('.search-box-wp').addClass('hidden');
                //});
            })();


            /*bind slide video*/
            //$(".slide-video").each(function () {
            //    $("#" + $(this).attr("id")).kendoMediaPlayer({
            //        autoPlay: true,
            //        navigatable: true,
            //        autoRepeat: true,
            //        mute: true,
            //        media: {
            //            title: $(this).attr("data-video-name"),
            //            source: $(this).attr("data-link-video")
            //        }
            //    });
            //});
        });

        // show hướng dẫn chọn size
        $('#product-detail .size-guide').bind('click', function () {

            var url = window.location.href
            var arr = url.split("/");
            var result = arr[0] + "//" + arr[2];
            var image = result + '/upload/images/size-guide.png'
            BindPhotoWipe(image);
        });

        /*Trigger delete cart item*/
        function _DeleteCartItem(itemId) {
            $('#confirmDeleteItem').modal('show');
            $('#btnDeleteCartItem').data('item-id', itemId);
        }

        /*close mini cart*/
        function closeMenuM(t) {
            /*Begin menu mobile*/
            var currentToggle = $(t).data('toggle');
            if (currentToggle == false) {
                $("#menu-m").addClass("active");
                $(".ic-menu").addClass("active");
                $(t).data('toggle', true);
                if (window.innerWidth <= 768) {
                    if (isHome) {
                        $('header').removeClass('active');
                        $("#header-logo").attr("src", $("#header-logo").attr("data-logo-black"));
                    }
                }
            } else {
                $("#menu-m").removeClass("active");
                $(".ic-menu").removeClass("active");
                $(t).data('toggle', false);
                if (isMobile) {
                    if (isHome) {
                        if (window.scrollY <= 0) {
                            $('header').addClass('active');
                            $("#header-logo").attr("src", $("#header-logo").attr("data-logo-white"));
                        }
                    }
                }
            }
        }


    </script>

    <script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jquery.matchHeight/jquery.matchHeight.min.js"></script>
    <script>
        $(document).ready(function () {
            // On page load
            pageLoad();
            var x = window.matchMedia("(max-width: 768px)")
            //$('.slide-slicks').slick({
            //    infinite: false,
            //    speed: 300,
            //    slidesToShow: 1,
            //    variableWidth: true
            //});
            $('.img-mix-and-max,img-related-product').matchHeight(
                {
                    byRow: true,
                    property: 'height',
                    target: null,
                    remove: false
                }
            );

            $('[data-toggle="tooltip"]').tooltip();
            //pageLoad();
            BindCollapse();
            $('.owl-carousel.slide-review').owlCarousel({
                //loop: true,
                margin: 10,
                dots: true,
                items: 1,
                //otsEach:true,

            });
            $('.owl-carousel.slide-test').owlCarousel({
                //loop: true,
                margin: 10,
                dots: true,
                items: 1,
                autoWidth: true,
                //otsEach:true,

            });

            $(".owl-carousel.slie-viewall").owlCarousel({
                margin: 10,
                autoWidth: true,
                dots: false,
            });
            if (x.matches) { // If media query matches
                $(".owl-carousel.slide-relate").owlCarousel({
                    autoWidth: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            autoWidth: false
                        },
                        300: {
                            items: 3,
                            autoWidth: false
                        },
                        600: {
                            items: 4,
                            autoWidth: false
                        },
                        1000: {
                            items: 5
                        }
                    }
                });
                $(".owl-carousel.slide-mixmatch").owlCarousel({
                    autoWidth: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            autoWidth: false
                        },
                        300: {
                            items: 3,
                            autoWidth: false
                        },
                        600: {
                            items: 4,
                            autoWidth: false
                        },
                        1000: {
                            items: 5
                        }
                    }
                });
            }


        });

        var cartItem = {
            productId: 18960,
            sizeId: 139,
            colorId: 4,
            quantity: 1,
            //__RequestVerificationToken: __RequestVerificationToken
        };
        var product = {
            Id : 18960,
            Name: 'Áo chiết eo ôm lệch vai',
            Price: '890.000',
            SpecialPrice: '267.000',
            UrlImage: 'https://static.dchic.vn/uploads/media/2021/08/IMG_1483-1-598763416.jpg',
            Url : '/san-pham/ao-chiet-eo-om-lech-vai-8641105.html'

        }
        SetProductviewed(product);
        //function ShowIconToggle(T) {
        //    let plus = T.parent().find('.toggle-plus');
        //    let minus = T.parent().find('.toggle-minus');
        //    if (plus.hasClass('d-none')) {
        //        plus.removeClass('d-none');
        //    }
        //    else {
        //        plus.addClass('d-none');
        //    }

        //    if (minus.hasClass('d-none')) {
        //        minus.removeClass('d-none');
        //    }
        //    else {
        //        minus.addClass('d-none');
        //    }
        //}
        function BindCollapse() {
            $('.collapse').on('hidden.bs.collapse', function (e) {
                $(this).parent().find('.toggle-minus').addClass('d-none');
                $(this).parent().find('.toggle-plus').removeClass('d-none');
            });
            $('.collapse').on('show.bs.collapse', function (e) {
                $(this).parent().find('.toggle-minus').removeClass('d-none');
                $(this).parent().find('.toggle-plus').addClass('d-none');
            });

        }
    </script>
</body>

</html>