<?php
global $ariacms;
global $params;
global $taxonomies;
global $ariaConfig_template;
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
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/playfair-display.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/sf-ui-display.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/roboto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/basis-grotesque-pro-font.css" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/general237b.css?v=1655546280484" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/app.min237b.css?v=1655546280484" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/loaders.mine209.css?v=1.0.0" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/mobile.min237b.css?v=1655546280484" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/photoswipe.min.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/default-skin/default-skin.min.css" rel="stylesheet" />


    <!--end css old version-->

    <link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/resetc619.css?v=1.0">
    <link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/styles237b.css?v=1655546280484">
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

    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/workmark/workmark.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/album8ad3.css?123213" rel="stylesheet" />
    <style>
        .deltai-title{
            text-align: justify;
            font-weight: lighter;
            font-size: 1rem;
            line-height: 2;
        }
        .bg-more-albums {
            background-image: url('<?= $ariacms->actual_link ?>upload/images/bg-more-stories.png');
            background-position: center center;
            background-size: cover;
        }
        ul.list-album li .item-thumb{
            padding-top: 100%;
        }
        ul.list-album li .item-thumb-abs{
            display:block;
        }
        .more-albums{
            padding-left: 1.25rem!important;
            padding-right: 1.25rem!important;
        }
        .album-wrap{
            width:100%;
            float:left;
            text-align: center;
        }
        .v-gallery {
            width: 100%;
            float: left;
            overflow: hidden
        }

        .list-album a:hover {
            color: inherit;
        }
        ul.album-filter {
            display: inline-block;
        }
        ul.album-filter li {
            float: left;
            padding: 7px 25px;
            font-size: 16px;
            color: #5F5F5F;
            cursor: pointer;
        }
        ul.list-album li .album-info{
            padding:0;
        }
        ul.list-album li .album-info strong:hover, .list-album a:hover {
            opacity: 1.7;
        }
        @media(min-width:1400px){
            ul.list-album li .album-info p, ul.list-album li .album-info strong{
                font-size:14px;
                margin-top: 30px !important;
            }
            .more-ambul{font-size:11px;}
        }
        @media(min-width: 1200px) {
            .body-content {
                width: 100%;
                padding-left: 10%;
                padding-right: 10%;
            }
        }

        ul.album-filter li {
            font-size: 1rem;
            color: #000000;
            font-family: 'roboto-light';
            font-weight: 600;
            text-transform: uppercase;
        }

        ul.album-filter li:hover {
            border-bottom: none;
        }

        @media(max-width: 576px) {
            /*.list-album.list-item-div .item-div {
                width: 50% !important;
            }*/
            /*.list-album.list-item-div .item-div:first-child {
                padding-left: 5px !important;
                padding-right:0px !important;
            }*/

            /*.list-album.list-item-div .item-div:last-child {
                padding-left: 1.25px !important;
            }*/
            ul.list-album{
                padding-right:5px !important;
                margin-top: 0!important;
            }
            .list-album.list-item-div .item-div {
                padding-left: 5px !important;
                padding-right: 0px !important;
            }

            ul.list-album li .album-info {
                font-size: 1rem;
            }

            .album-detail-wrap .page-title-head p.subtitle-time {
                font-size: 0.7rem !important;
                padding-top: 0px;
            }

            .items-thumb {
                padding-left: 0;
            }

            p.subtitle-time {
                font-size: 11px !important;
            }

            .item-div .detail-title-ambull {
                padding-left: 0;
            }

            .album-des h4 i.fa-quote-right {
                top: 10px;
            }

            .album-des h4 i.fa-quote-left {
                top: -10px;
            }

            .album-des h4 i.fas {
                font-size: 10px;
                position: relative;
                color: #808080;
            }

            ul.list-album li .album-info strong {
                font-size: 12px;
            }

            .album-detail-wrap .col-12 {
                padding-left: 10px;
                padding-right: 10px;
            }
        }
    </style>

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

        <div id="app" class="page-wrap album-wrap album-detail-wrap w-100 float-left">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="margin: 0px auto;">
                <div class="page-title-head">
                    <strong>BỘ SƯU TẬP</strong>
                    <h2><?=$detail[$params->title]?></h2>
                    <p class="subtitle-time" style="display: none;">
                        <i class="fa fa-clock"></i>
                        11:30 09/06/2022
                    </p>
                </div>
                <div class="album-des">
                    <h3 class="col-xs-12 deltai-title">
                        <?= $ariacms->convertEditor($detail[$params->content]) ?>
                    </h3>
                </div>
            </div>
            <div class="col-12 float-left">
                <div class="w-100 float-left">
                    <div>
                        <div class="v-gallery"><!---->
                            <div class="light-gallery row album-detail-listing" style="position: relative; height: <?= (floor(count($images) / 4) + 1 ) * 537.571 ?>px;">
                                <?php
                                $left = 361.714;
                                $top = 537.571;
                                foreach ($images as $key => $image){
                                    $turn = floor($key / 4);
                                    $index = $key % 4;
                                    ?>
                                        <div style="position: absolute; left: <?= $left * $index ?>px; top: <?= $turn * $top?>px;" data-title="<?=$detail[$params->title] . $key?>" data-id="<?= $image->image_id ?>" data-index="0" data-thumbnail="<?= $image->image_link ?>" class="col-xs-12 col-sm-4 col-md-3 album-item" >
                                            <div class="album-detail-item">
                                                <div class="album-detail-item-abs album-detail-img-wrap">
                                                    <img src="<?= $image->image_link ?>" alt="<?=$detail[$params->title] . $key?>">
                                                </div>
                                            </div>
                                        </div>
                                <?php }?>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-more-albums">
            <div class="col-lg-9 col-md-9 col-sm-12 col-12 " style="margin: 0 auto;">
                <div class="page-wrap album-wrap">

                    <ul class="row album-filter">
                        <li class="">Bộ sưu tập mới</li>
                    </ul>
                    <ul class="row list-album list-item-div mt-2 mb-5">
                        <li class="col- col-sm-4 col-md-4 item-div float-left col-4  pl-1 pr-1 more-albums">
                            <?php foreach ($relateds as $related){?>
                            <a href="/chi-tiet/<?= $related->url_part?>.html">

                                <div class="items-thumb col-md-12 col-sm-12 pr-0 float-left pl-sm-0">
                                    <div class="col-12 float-left p-0">
                                        <div class="item-thumb item-thumb-first">
                                            <div class="item-thumb-abs">
                                                <img src="<?= $related->image?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 detail-title-ambull col-sm-12 float-left pr-0 pl-0">
                                    <div class="col-xs-12 album-info p-0">
                                        <div class="col-xs-12 album-info">
                                            <strong class="w-100 float-left mb-1 mt-md-2 mt-2 mb-md-2 mb-1"><?= $related->{$params->title}?></strong>
                                        </div>
                                    </div>
                                </div>

                            </a>
                            <?php }?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </div>
</div>
<?= $ariacms->getBlock('footer') ?>
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

<!--Old scrip-->
<!-- Vuejs -->



<script type="text/javascript" src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/dist/js/appe209.js?v=1.0.0"></script>

<script>
    var albumId = 1;
    var listImages = [
        {
            "index":0,
            "id":7868,
            "href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6257-1 copy-1 copy-1 copy-831837775.jpg",
            "title":"_KNN6257-1 copy-1 copy-1 copy.jpg",
            "thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6257-1 copy-1 copy-1 copy-831837775-427x640.jpg",
            "thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6257-1 copy-1 copy-1 copy-831837775-513x768.jpg",
            "type":"text/html",
            "tags":[]
        }
        ,{"index":1,"id":7864,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5969-1 copy-1 copy-1 copy-907365068.jpg","title":"_KNN5969-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5969-1 copy-1 copy-1 copy-907365068-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5969-1 copy-1 copy-1 copy-907365068-513x768.jpg","type":"text/html","tags":[]},{"index":2,"id":7860,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5936-1 copy-1 copy-1 copy-562383357.jpg","title":"_KNN5936-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5936-1 copy-1 copy-1 copy-562383357-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5936-1 copy-1 copy-1 copy-562383357-513x768.jpg","type":"text/html","tags":[{"tagUuid":"4ce16e80-2892-11ea-9f41-65fd9cfe13e3","positionX":65.69201,"positionY":72.26563,"mediaId":7860,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"}]},{"index":3,"id":7862,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5942-1 copy-1 copy-1 copy-293044261.jpg","title":"_KNN5942-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5942-1 copy-1 copy-1 copy-293044261-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5942-1 copy-1 copy-1 copy-293044261-513x768.jpg","type":"text/html","tags":[{"tagUuid":"558b4bf0-2892-11ea-9f41-65fd9cfe13e3","positionX":69.20078,"positionY":92.44792,"mediaId":7862,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"}]},{"index":4,"id":7855,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5890-1 copy-1 copy-336562665.jpg","title":"_KNN5890-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5890-1 copy-1 copy-336562665-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5890-1 copy-1 copy-336562665-513x768.jpg","type":"text/html","tags":[{"tagUuid":"635543d0-2892-11ea-9f41-65fd9cfe13e3","positionX":61.20858,"positionY":89.32292,"mediaId":7855,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"}]},{"index":5,"id":7857,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5774-1 copy-1 copy-713185829.jpg","title":"_KNN5774-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5774-1 copy-1 copy-713185829-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5774-1 copy-1 copy-713185829-513x768.jpg","type":"text/html","tags":[{"tagUuid":"6877f650-2892-11ea-9f41-65fd9cfe13e3","positionX":63.35283,"positionY":78.51563,"mediaId":7857,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"},{"tagUuid":"70fce6a0-2892-11ea-9f41-65fd9cfe13e3","positionX":69.00585,"positionY":34.50521,"mediaId":7857,"productId":12751,"sku":"181247","price":1950000.0,"productSlug":"ao-dai-theu-hoa-mau-don-8036560","productName":"Áo Dài thêu hoa mẫu đơn"}]},{"index":6,"id":7856,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5836-1 copy-1 copy-201685523.jpg","title":"_KNN5836-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5836-1 copy-1 copy-201685523-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5836-1 copy-1 copy-201685523-513x768.jpg","type":"text/html","tags":[{"tagUuid":"874fed80-2892-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":35.15625,"mediaId":7856,"productId":12751,"sku":"181247","price":1950000.0,"productSlug":"ao-dai-theu-hoa-mau-don-8036560","productName":"Áo Dài thêu hoa mẫu đơn"}]},{"index":7,"id":7859,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5721-1 copy-1 copy-854317829.jpg","title":"_KNN5721-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5721-1 copy-1 copy-854317829-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5721-1 copy-1 copy-854317829-513x768.jpg","type":"text/html","tags":[{"tagUuid":"89e71320-2892-11ea-9f41-65fd9cfe13e3","positionX":64.32749,"positionY":41.53646,"mediaId":7859,"productId":12751,"sku":"181247","price":1950000.0,"productSlug":"ao-dai-theu-hoa-mau-don-8036560","productName":"Áo Dài thêu hoa mẫu đơn"}]},{"index":8,"id":7874,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6262-1 copy-20210000.jpg","title":"_KNN6262-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6262-1 copy-20210000-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6262-1 copy-20210000-513x768.jpg","type":"text/html","tags":[{"tagUuid":"8f6d6970-2892-11ea-9f41-65fd9cfe13e3","positionX":62.5731,"positionY":40.23438,"mediaId":7874,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"},{"tagUuid":"a222d730-2892-11ea-9f41-65fd9cfe13e3","positionX":62.76803,"positionY":76.95313,"mediaId":7874,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"}]},{"index":9,"id":7875,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6281-1 copy-1 copy-1 copy-863549633.jpg","title":"_KNN6281-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6281-1 copy-1 copy-1 copy-863549633-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6281-1 copy-1 copy-1 copy-863549633-513x768.jpg","type":"text/html","tags":[{"tagUuid":"ad139760-2892-11ea-9f41-65fd9cfe13e3","positionX":61.9883,"positionY":44.14063,"mediaId":7875,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":10,"id":7872,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6289-1 copy-1 copy-1 copy-695143035.jpg","title":"_KNN6289-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6289-1 copy-1 copy-1 copy-695143035-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6289-1 copy-1 copy-1 copy-695143035-513x768.jpg","type":"text/html","tags":[{"tagUuid":"b14951d0-2892-11ea-9f41-65fd9cfe13e3","positionX":68.03119,"positionY":52.73438,"mediaId":7872,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":11,"id":7835,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5145-1 copy-1 copy-951660118.jpg","title":"_KNN5145-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5145-1 copy-1 copy-951660118-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5145-1 copy-1 copy-951660118-513x768.jpg","type":"text/html","tags":[{"tagUuid":"b4e53d40-2892-11ea-9f41-65fd9cfe13e3","positionX":63.74269,"positionY":46.48438,"mediaId":7835,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":12,"id":7838,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5182-1 copy-1 copy-994429955.jpg","title":"_KNN5182-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5182-1 copy-1 copy-994429955-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5182-1 copy-1 copy-994429955-513x768.jpg","type":"text/html","tags":[{"tagUuid":"b83f64c0-2892-11ea-9f41-65fd9cfe13e3","positionX":66.8616,"positionY":31.90104,"mediaId":7838,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":13,"id":7837,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5173-1 copy-1 copy-455075256.jpg","title":"_KNN5173-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5173-1 copy-1 copy-455075256-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5173-1 copy-1 copy-455075256-513x768.jpg","type":"text/html","tags":[{"tagUuid":"bb78bdd0-2892-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":41.66667,"mediaId":7837,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":14,"id":7834,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5166-1 copy-1 copy-463582072.jpg","title":"_KNN5166-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5166-1 copy-1 copy-463582072-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5166-1 copy-1 copy-463582072-513x768.jpg","type":"text/html","tags":[{"tagUuid":"bf627b20-2892-11ea-9f41-65fd9cfe13e3","positionX":63.93762,"positionY":33.07292,"mediaId":7834,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":15,"id":7829,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4825-1 copy-1 copy-1 copy-86526630.jpg","title":"_KNN4825-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4825-1 copy-1 copy-1 copy-86526630-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4825-1 copy-1 copy-1 copy-86526630-513x768.jpg","type":"text/html","tags":[{"tagUuid":"c21a4820-2892-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":43.09896,"mediaId":7829,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":16,"id":7824,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4805-1 copy-1 copy-1 copy-811634785.jpg","title":"_KNN4805-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4805-1 copy-1 copy-1 copy-811634785-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4805-1 copy-1 copy-1 copy-811634785-513x768.jpg","type":"text/html","tags":[{"tagUuid":"c4a8e240-2892-11ea-9f41-65fd9cfe13e3","positionX":61.59844,"positionY":45.96354,"mediaId":7824,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"},{"tagUuid":"ca0d0a90-2892-11ea-9f41-65fd9cfe13e3","positionX":63.54776,"positionY":74.47917,"mediaId":7824,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"}]},{"index":17,"id":7826,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4735-1 copy-14350809.jpg","title":"_KNN4735-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4735-1 copy-14350809-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4735-1 copy-14350809-513x768.jpg","type":"text/html","tags":[{"tagUuid":"a3f6ba90-2897-11ea-9f41-65fd9cfe13e3","positionX":48.73294,"positionY":74.86979,"mediaId":7826,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"},{"tagUuid":"a7caf410-2897-11ea-9f41-65fd9cfe13e3","positionX":53.21637,"positionY":54.94792,"mediaId":7826,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":18,"id":7825,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4779-1 copy-281868612.jpg","title":"_KNN4779-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4779-1 copy-281868612-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4779-1 copy-281868612-513x768.jpg","type":"text/html","tags":[{"tagUuid":"aa77eba0-2897-11ea-9f41-65fd9cfe13e3","positionX":52.04678,"positionY":47.26563,"mediaId":7825,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":19,"id":7877,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6388-1 copy-1 copy-1 copy-769107885.jpg","title":"_KNN6388-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6388-1 copy-1 copy-1 copy-769107885-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6388-1 copy-1 copy-1 copy-769107885-513x768.jpg","type":"text/html","tags":[{"tagUuid":"ad7ca020-2897-11ea-9f41-65fd9cfe13e3","positionX":65.10721,"positionY":46.35417,"mediaId":7877,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":20,"id":7878,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6308-1 copy-1 copy-1 copy-863279996.jpg","title":"_KNN6308-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6308-1 copy-1 copy-1 copy-863279996-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6308-1 copy-1 copy-1 copy-863279996-513x768.jpg","type":"text/html","tags":[{"tagUuid":"b1924f70-2897-11ea-9f41-65fd9cfe13e3","positionX":68.81092,"positionY":39.97396,"mediaId":7878,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":21,"id":7876,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6351-1 copy-1 copy-1 copy-440745957.jpg","title":"_KNN6351-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6351-1 copy-1 copy-1 copy-440745957-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6351-1 copy-1 copy-1 copy-440745957-513x768.jpg","type":"text/html","tags":[{"tagUuid":"b4ca48f0-2897-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":42.1875,"mediaId":7876,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":22,"id":7873,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6389-1 copy-1 copy-1 copy-999711308.jpg","title":"_KNN6389-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6389-1 copy-1 copy-1 copy-999711308-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6389-1 copy-1 copy-1 copy-999711308-513x768.jpg","type":"text/html","tags":[{"tagUuid":"b785bf70-2897-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":82.29167,"mediaId":7873,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":23,"id":7847,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5544-1 copy-1 copy-654594903.jpg","title":"_KNN5544-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5544-1 copy-1 copy-654594903-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5544-1 copy-1 copy-654594903-513x768.jpg","type":"text/html","tags":[{"tagUuid":"ba5189a0-2897-11ea-9f41-65fd9cfe13e3","positionX":65.88694,"positionY":44.40104,"mediaId":7847,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"},{"tagUuid":"82ce9c60-2898-11ea-9f41-65fd9cfe13e3","positionX":63.54776,"positionY":76.95313,"mediaId":7847,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"}]},{"index":24,"id":7852,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5547-1 copy-343201080.jpg","title":"_KNN5547-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5547-1 copy-343201080-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5547-1 copy-343201080-513x768.jpg","type":"text/html","tags":[{"tagUuid":"bd513510-2897-11ea-9f41-65fd9cfe13e3","positionX":60.81871,"positionY":41.27604,"mediaId":7852,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"},{"tagUuid":"7d1e76f0-2898-11ea-9f41-65fd9cfe13e3","positionX":59.45419,"positionY":77.86458,"mediaId":7852,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"}]},{"index":25,"id":7848,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5617-1 copy-255864221.jpg","title":"_KNN5617-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5617-1 copy-255864221-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5617-1 copy-255864221-513x768.jpg","type":"text/html","tags":[{"tagUuid":"c2f7bd90-2897-11ea-9f41-65fd9cfe13e3","positionX":64.91228,"positionY":39.45313,"mediaId":7848,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":26,"id":7851,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5498-1 copy-1 copy-560154208.jpg","title":"_KNN5498-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5498-1 copy-1 copy-560154208-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5498-1 copy-1 copy-560154208-513x768.jpg","type":"text/html","tags":[{"tagUuid":"c52d1420-2897-11ea-9f41-65fd9cfe13e3","positionX":53.21637,"positionY":50.52083,"mediaId":7851,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":27,"id":7850,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5592-1 copy-1 copy-896810329.jpg","title":"_KNN5592-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5592-1 copy-1 copy-896810329-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5592-1 copy-1 copy-896810329-513x768.jpg","type":"text/html","tags":[{"tagUuid":"c7b96450-2897-11ea-9f41-65fd9cfe13e3","positionX":61.01365,"positionY":47.00521,"mediaId":7850,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":28,"id":7830,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4871-1 copy-83580140.jpg","title":"_KNN4871-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4871-1 copy-83580140-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4871-1 copy-83580140-513x768.jpg","type":"text/html","tags":[{"tagUuid":"caec06a0-2897-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":52.47396,"mediaId":7830,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":29,"id":7831,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4925-1 copy-1 copy-361250934.jpg","title":"_KNN4925-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4925-1 copy-1 copy-361250934-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4925-1 copy-1 copy-361250934-513x768.jpg","type":"text/html","tags":[{"tagUuid":"cdeac7b0-2897-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":43.09896,"mediaId":7831,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"},{"tagUuid":"8ca5af30-2898-11ea-9f41-65fd9cfe13e3","positionX":68.61598,"positionY":86.97917,"mediaId":7831,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"}]},{"index":30,"id":7827,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4890-1 copy-1 copy-129559085.jpg","title":"_KNN4890-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4890-1 copy-1 copy-129559085-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4890-1 copy-1 copy-129559085-513x768.jpg","type":"text/html","tags":[{"tagUuid":"9dd31d60-2898-11ea-9f41-65fd9cfe13e3","positionX":65.10721,"positionY":73.69792,"mediaId":7827,"productId":12744,"sku":"480390","price":900000.0,"productSlug":"quan-suong-cap-3p-6982449","productName":"Quần suông cạp 3p"}]},{"index":31,"id":7828,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4672-1 copy-1 copy-458432161.jpg","title":"_KNN4672-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4672-1 copy-1 copy-458432161-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4672-1 copy-1 copy-458432161-513x768.jpg","type":"text/html","tags":[]},{"index":32,"id":7869,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6100-1 copy-1 copy-1 copy-611618159.jpg","title":"_KNN6100-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6100-1 copy-1 copy-1 copy-611618159-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6100-1 copy-1 copy-1 copy-611618159-513x768.jpg","type":"text/html","tags":[{"tagUuid":"a593ac40-2898-11ea-9f41-65fd9cfe13e3","positionX":64.71735,"positionY":47.65625,"mediaId":7869,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":33,"id":7867,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6044-1 copy-1 copy-307831891.jpg","title":"_KNN6044-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6044-1 copy-1 copy-307831891-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6044-1 copy-1 copy-307831891-513x768.jpg","type":"text/html","tags":[{"tagUuid":"a85193c0-2898-11ea-9f41-65fd9cfe13e3","positionX":58.67446,"positionY":37.23958,"mediaId":7867,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":34,"id":7863,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6072-1 copy-1 copy-1 copy-940072437.jpg","title":"_KNN6072-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6072-1 copy-1 copy-1 copy-940072437-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6072-1 copy-1 copy-1 copy-940072437-513x768.jpg","type":"text/html","tags":[{"tagUuid":"ac2a6120-2898-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":38.67188,"mediaId":7863,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":35,"id":7866,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6006-1 copy-628111526.jpg","title":"_KNN6006-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6006-1 copy-628111526-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6006-1 copy-628111526-513x768.jpg","type":"text/html","tags":[{"tagUuid":"ae7eb160-2898-11ea-9f41-65fd9cfe13e3","positionX":64.32749,"positionY":33.46354,"mediaId":7866,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":36,"id":7865,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6196-1 copy-1 copy-448252344.jpg","title":"_KNN6196-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6196-1 copy-1 copy-448252344-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6196-1 copy-1 copy-448252344-513x768.jpg","type":"text/html","tags":[{"tagUuid":"b1d4e140-2898-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":49.47917,"mediaId":7865,"productId":12707,"sku":"181229","price":1950000.0,"productSlug":"ao-dai-theu-hoa-la-sen-6915987","productName":"Áo Dài thêu hoa lá sen"}]},{"index":37,"id":7871,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6215-1 copy-1 copy-457744618.jpg","title":"_KNN6215-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6215-1 copy-1 copy-457744618-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6215-1 copy-1 copy-457744618-513x768.jpg","type":"text/html","tags":[{"tagUuid":"b44b8690-2898-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":46.61458,"mediaId":7871,"productId":12707,"sku":"181229","price":1950000.0,"productSlug":"ao-dai-theu-hoa-la-sen-6915987","productName":"Áo Dài thêu hoa lá sen"}]},{"index":38,"id":7870,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN6157-1 copy-1 copy-1 copy-652252355.jpg","title":"_KNN6157-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN6157-1 copy-1 copy-1 copy-652252355-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN6157-1 copy-1 copy-1 copy-652252355-513x768.jpg","type":"text/html","tags":[{"tagUuid":"b698d1f0-2898-11ea-9f41-65fd9cfe13e3","positionX":66.2768,"positionY":38.67188,"mediaId":7870,"productId":12707,"sku":"181229","price":1950000.0,"productSlug":"ao-dai-theu-hoa-la-sen-6915987","productName":"Áo Dài thêu hoa lá sen"}]},{"index":39,"id":7861,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5688-1 copy-1 copy-249751499.jpg","title":"_KNN5688-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5688-1 copy-1 copy-249751499-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5688-1 copy-1 copy-249751499-513x768.jpg","type":"text/html","tags":[{"tagUuid":"baccdeb0-2898-11ea-9f41-65fd9cfe13e3","positionX":58.2846,"positionY":41.14583,"mediaId":7861,"productId":12715,"sku":"181233","price":1950000.0,"productSlug":"ao-dai-gam-co-tau-8641877","productName":"Áo Dài gấm cổ tàu"},{"tagUuid":"bf3e1b80-2898-11ea-9f41-65fd9cfe13e3","positionX":55.16569,"positionY":72.52604,"mediaId":7861,"productId":12744,"sku":"480390","price":900000.0,"productSlug":"quan-suong-cap-3p-6982449","productName":"Quần suông cạp 3p"}]},{"index":40,"id":7858,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5710-1 copy-1 copy-564535135.jpg","title":"_KNN5710-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5710-1 copy-1 copy-564535135-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5710-1 copy-1 copy-564535135-513x768.jpg","type":"text/html","tags":[{"tagUuid":"c2b78ad0-2898-11ea-9f41-65fd9cfe13e3","positionX":60.81871,"positionY":81.51042,"mediaId":7858,"productId":12744,"sku":"480390","price":900000.0,"productSlug":"quan-suong-cap-3p-6982449","productName":"Quần suông cạp 3p"}]},{"index":41,"id":7854,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5644-1 copy-1 copy-564661534.jpg","title":"_KNN5644-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5644-1 copy-1 copy-564661534-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5644-1 copy-1 copy-564661534-513x768.jpg","type":"text/html","tags":[]},{"index":42,"id":7853,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5642-1 copy-1 copy-772220118.jpg","title":"_KNN5642-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5642-1 copy-1 copy-772220118-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5642-1 copy-1 copy-772220118-513x768.jpg","type":"text/html","tags":[]},{"index":43,"id":7833,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4964-1 copy-1 copy-1 copy-444527918.jpg","title":"_KNN4964-1 copy-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4964-1 copy-1 copy-1 copy-444527918-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4964-1 copy-1 copy-1 copy-444527918-513x768.jpg","type":"text/html","tags":[{"tagUuid":"c7770eb0-2898-11ea-9f41-65fd9cfe13e3","positionX":60.42885,"positionY":63.93229,"mediaId":7833,"productId":12722,"sku":"480395","price":750000.0,"productSlug":"quan-ong-suong-cap-1p-455921","productName":"Quần ống suông cạp 1p"}]},{"index":44,"id":7836,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5061-1 copy-1 copy-795587975.jpg","title":"_KNN5061-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5061-1 copy-1 copy-795587975-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5061-1 copy-1 copy-795587975-513x768.jpg","type":"text/html","tags":[]},{"index":45,"id":7832,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4977-1 copy-1 copy-618494043.jpg","title":"_KNN4977-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4977-1 copy-1 copy-618494043-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4977-1 copy-1 copy-618494043-513x768.jpg","type":"text/html","tags":[]},{"index":46,"id":7849,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5415-1 copy-1 copy-300010258.jpg","title":"_KNN5415-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5415-1 copy-1 copy-300010258-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5415-1 copy-1 copy-300010258-513x768.jpg","type":"text/html","tags":[{"tagUuid":"ceb74a00-2898-11ea-9f41-65fd9cfe13e3","positionX":61.40351,"positionY":41.40625,"mediaId":7849,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":47,"id":7846,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5507-1 copy-1 copy-913094458.jpg","title":"_KNN5507-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5507-1 copy-1 copy-913094458-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5507-1 copy-1 copy-913094458-513x768.jpg","type":"text/html","tags":[{"tagUuid":"d2136d50-2898-11ea-9f41-65fd9cfe13e3","positionX":66.66667,"positionY":49.34896,"mediaId":7846,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":48,"id":7845,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5449-1 copy-1 copy-214752267.jpg","title":"_KNN5449-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5449-1 copy-1 copy-214752267-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5449-1 copy-1 copy-214752267-513x768.jpg","type":"text/html","tags":[{"tagUuid":"d4f864d0-2898-11ea-9f41-65fd9cfe13e3","positionX":59.06433,"positionY":53.51563,"mediaId":7845,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":49,"id":7843,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5385-1 copy-1 copy-1946891.jpg","title":"_KNN5385-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5385-1 copy-1 copy-1946891-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5385-1 copy-1 copy-1946891-513x768.jpg","type":"text/html","tags":[{"tagUuid":"d810a150-2898-11ea-9f41-65fd9cfe13e3","positionX":57.69981,"positionY":43.75,"mediaId":7843,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":50,"id":7842,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5395-1 copy-1 copy-566452189.jpg","title":"_KNN5395-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5395-1 copy-1 copy-566452189-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5395-1 copy-1 copy-566452189-513x768.jpg","type":"text/html","tags":[{"tagUuid":"daced6f0-2898-11ea-9f41-65fd9cfe13e3","positionX":66.8616,"positionY":45.05208,"mediaId":7842,"productId":12679,"sku":"181211","price":1950000.0,"productSlug":"ao-dai-khue-diem-tram-an-nguyet-8871913","productName":"Áo Dài Khuê Diễm Trâm An Nguyệt"}]},{"index":51,"id":7839,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5232-1 copy-1 copy-611753788.jpg","title":"_KNN5232-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5232-1 copy-1 copy-611753788-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5232-1 copy-1 copy-611753788-513x768.jpg","type":"text/html","tags":[{"tagUuid":"de34be40-2898-11ea-9f41-65fd9cfe13e3","positionX":57.11501,"positionY":51.30208,"mediaId":7839,"productId":12755,"sku":"181246","price":1950000.0,"productSlug":"ao-dai-theu-hoa-cuc-1919947","productName":"Áo dài thêu hoa cúc"}]},{"index":52,"id":7841,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5280-1 copy-1 copy-339920498.jpg","title":"_KNN5280-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5280-1 copy-1 copy-339920498-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5280-1 copy-1 copy-339920498-513x768.jpg","type":"text/html","tags":[{"tagUuid":"e1676090-2898-11ea-9f41-65fd9cfe13e3","positionX":65.10721,"positionY":46.61458,"mediaId":7841,"productId":12755,"sku":"181246","price":1950000.0,"productSlug":"ao-dai-theu-hoa-cuc-1919947","productName":"Áo dài thêu hoa cúc"}]},{"index":53,"id":7844,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5299-1 copy-1 copy-795253336.jpg","title":"_KNN5299-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5299-1 copy-1 copy-795253336-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5299-1 copy-1 copy-795253336-513x768.jpg","type":"text/html","tags":[{"tagUuid":"e45817e0-2898-11ea-9f41-65fd9cfe13e3","positionX":60.03899,"positionY":48.95833,"mediaId":7844,"productId":12755,"sku":"181246","price":1950000.0,"productSlug":"ao-dai-theu-hoa-cuc-1919947","productName":"Áo dài thêu hoa cúc"}]},{"index":54,"id":7840,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN5254-1 copy-1 copy-410800889.jpg","title":"_KNN5254-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN5254-1 copy-1 copy-410800889-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN5254-1 copy-1 copy-410800889-513x768.jpg","type":"text/html","tags":[{"tagUuid":"e6ff6a20-2898-11ea-9f41-65fd9cfe13e3","positionX":64.13255,"positionY":42.44792,"mediaId":7840,"productId":12755,"sku":"181246","price":1950000.0,"productSlug":"ao-dai-theu-hoa-cuc-1919947","productName":"Áo dài thêu hoa cúc"}]},{"index":55,"id":7823,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4596-1 copy-1 copy-491785674.jpg","title":"_KNN4596-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4596-1 copy-1 copy-491785674-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4596-1 copy-1 copy-491785674-513x768.jpg","type":"text/html","tags":[{"tagUuid":"ea7a8720-2898-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":39.45313,"mediaId":7823,"productId":12711,"sku":"181230","price":1850000.0,"productSlug":"ao-dai-theu-hoa-phang-5055367","productName":"Áo dài thêu hoa Phăng"}]},{"index":56,"id":7822,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4562-1-Recovered copy-1 copy-448072416.jpg","title":"_KNN4562-1-Recovered copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4562-1-Recovered copy-1 copy-448072416-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4562-1-Recovered copy-1 copy-448072416-513x768.jpg","type":"text/html","tags":[{"tagUuid":"ecf2b310-2898-11ea-9f41-65fd9cfe13e3","positionX":63.15789,"positionY":38.54167,"mediaId":7822,"productId":12711,"sku":"181230","price":1850000.0,"productSlug":"ao-dai-theu-hoa-phang-5055367","productName":"Áo dài thêu hoa Phăng"}]},{"index":57,"id":7820,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4716-1 copy-1 copy-484986043.jpg","title":"_KNN4716-1 copy-1 copy.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4716-1 copy-1 copy-484986043-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4716-1 copy-1 copy-484986043-513x768.jpg","type":"text/html","tags":[{"tagUuid":"ef2830b0-2898-11ea-9f41-65fd9cfe13e3","positionX":71.53996,"positionY":54.29688,"mediaId":7820,"productId":12711,"sku":"181230","price":1850000.0,"productSlug":"ao-dai-theu-hoa-phang-5055367","productName":"Áo dài thêu hoa Phăng"}]},{"index":58,"id":7821,"href":"https://static.dchic.vn/uploads/media/2019/12/_KNN4656-1 copy-1.1-510691008.jpg","title":"_KNN4656-1 copy-1.1.jpg","thumbnail":"https://static.dchic.vn/uploads/media/2019/12/_KNN4656-1 copy-1.1-510691008-427x640.jpg","thumbnailLarge":"https://static.dchic.vn/uploads/media/2019/12/_KNN4656-1 copy-1.1-510691008-513x768.jpg","type":"text/html","tags":[{"tagUuid":"f2ae9850-2898-11ea-9f41-65fd9cfe13e3","positionX":69.59064,"positionY":60.67708,"mediaId":7821,"productId":12711,"sku":"181230","price":1850000.0,"productSlug":"ao-dai-theu-hoa-phang-5055367","productName":"Áo dài thêu hoa Phăng"}]
    }];
</script>

<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/simply-toast.min.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/fansi.prototype0290.js?v=103"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/typeahead/typeahead.bundle.min.js"></script>
<!-- JQUERY SELECT2 INPUT -->
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/select2/select2.4.0.6.full.min.js"></script>
<!--Site js-->
<script type="text/javascript">
    var IsHomepage = false;
</script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/site237b.js?v=1655546280484"></script>
<!-- Request access token -->
<script type="text/javascript">var __RequestVerificationToken = "CfDJ8N9LW0FJ59ZPouBHdG2QRKaBxk9FW9_0JrBmrW0uP6FCSM5kOmggn2dkpk9pmI3YLcsjbBQnGTzbfJJafLra_fUTRGH3UA3npA0gVq2VTdSGX4LOBxW6OlKKZqgdlFeEdQcI-LPVrVpAIlZTrR49J9Q";</script>

<!--end old scrip-->
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/photoswipe.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/photoswipe-ui-default.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/owl-carousel2-2.3.4/owl.carousel.min.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/slick-carousel/slick.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/site/san-pham3860.js?v=1"></script>
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
</body>

</html>