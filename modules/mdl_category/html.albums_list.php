<?php
global $ariacms;
global $params;
global $ariaConfig_template;
global $taxonomies;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title><?= _NEWS_CATEGORY ?> - <?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?></title>
    <meta name="description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />
    <meta name="keywords" content="<?= ($ariacms->web_information->{$params->meta_keyword} != '') ? $ariacms->web_information->{$params->meta_keyword} : $ariacms->web_information->{$params->name}; ?>" />
    <meta property="og:title" content="<?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?>" />
    <meta property="og:description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />

    <meta property="og:image" content="<?= $ariacms->web_information->{'image-icon'} ?>">

    <?= $ariacms->getBlock("head"); ?>
    <!--css old version-->
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/playfair-display.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/sf-ui-display.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/roboto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/basis-grotesque-pro-font.css" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/general5a3f.css?v=1655546051996" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/app.min5a3f.css?v=1655546051996" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/loaders.mine209.css?v=1.0.0" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/mobile.min5a3f.css?v=1655546051996" />
    <link media="all" type="text/css" rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/photoswipe.min.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/photoswipe-4.1.3/default-skin/default-skin.min.css" rel="stylesheet" />


    <!--end css old version-->

    <link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/resetc619.css?v=1.0">
    <link rel="stylesheet" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/homev2/styles5a3f.css?v=1655546051996">
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

    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/css/albumf700.css?v=1.0.1" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jPages-master/css/animate.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jPages-master/css/github.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jPages-master/css/jPages.css" rel="stylesheet" />
    <link href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jPages-master/css/style.css" rel="stylesheet" />
    <style>

        .listing-albums{
            padding-left:1rem!important;
            padding-right: 1rem!important;
            margin-bottom: 60px!important;
        }
        @media(max-width: 1401px) {
            .album-wrap .holder a {
                padding: 5px 10px;
            }
        }

        @media(min-width: 1200px) {
            .body-content {
                width: 100%;
                padding-left: 10%;
                padding-right: 10%;
            }
        }

        @media(max-width: 576px) {
            .list-album.list-item-div .item-div {
                width: 50% !important;
                margin-top: 20px;
            }

            .list-album.list-item-div .item-div:nth-child(2n+1) {
                padding-right: 2.5px !important;
            }

            .list-album.list-item-div .item-div:nth-child(2n) {
                padding-left: 2.5px !important;
            }

            ul.list-album li .album-info {
                font-size: 1rem;
            }

            p.subtitle-time {
                font-size: 0.7rem !important;
            }

            ul.list-album li .album-info p, ul.list-album li .album-info strong {
                font-size: 13px;
            }

            .holder {
                margin-top: -5px;
            }
        }
    </style>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/https://www.googletagmanager.com/gtag/js?id=UA-122476596-1"></script>
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
             src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/https://www.facebook.com/tr?id=1254931944640658&amp;ev=PageView&amp;noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Hotjar Tracking Code for https://dchic.vn/ -->
    <!-- End Hotjar Tracking Code -->
    <!-- Tidio -->
    <!-- End Tidio -->

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
    <!--Begin body-->

    <div class="row" id="begin-body" style="padding-top: 54.0893px;">


        <div class="page-wrap album-wrap w-100 float-left">
            <div class="page-title-head">
                <h2>
                    <strong>
                        BỘ SƯU TẬP
                        <span class="border-bst"></span>
                    </strong>
                </h2>
            </div>
            <ul class="list-album list-item-div" id="ulAmbul">
                <?php
                if ($albums) {
                    $maxRows = $ariacms->web_information->posts_per_page;
                    $curPg = $ariacms->getParaUrl('curPg');
                    if ($curPg == '') $curPg = 1;
                    $curRow = ($curPg - 1) * $maxRows;
                    while ($curRow < count($albums) && ($curRow < $curPg * $maxRows)) {
                        $album = $albums[$curRow];
                        $curRow++;
                        ?>
                        <li class="col- col-sm-4 col-md-4 item-div float-left mb-6 pl-3 pr-3" style="height: 755.768px; opacity: 1;">
                            <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $album->url_part . '.html'; ?>">
                                <div class="items-thumb">
                                    <div class="col-12 float-left">
                                        <div class="item-thumb item-thumb-first">
                                            <div class="item-thumb-abs">
                                                <div class="item-thumb-img" style="background: url('<?= $album->image?>') center no-repeat;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 album-info">
                                    <h3><strong class="w-100 float-left mb-1 mt-md-3 mt-2 mb-md-3 mb-2"><?= $album->{$params->title} ?></strong></h3>
                                    <span class="more-ambul ">XEM THÊM</span>
                                </div>
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>

            </ul>
            <div class="col-12 mt-2 mb-5 float-left">
                <div class="holder w-100 float-left">
                    <?= $ariacms->paginationPublic(count($albums), $maxRows, 3) ?>
                </div>
            </div>
        </div>




    </div>
    <!--End Body-->
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

<!--Old scrip-->
<!-- Vuejs -->

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
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/site5a3f.js?v=1655546051996"></script>
<!-- Request access token -->
<script type="text/javascript">var __RequestVerificationToken = "CfDJ8N9LW0FJ59ZPouBHdG2QRKa0gL_7sfxuz6SQBmUi6IsJec9bUem6QdfosHxbI7pMTy1rf_GHAOVFdN9-CTlD7oTg6jhyIHrq2-9STFY5fbyWNGadxVUDOuQumJ1dRt6jbr3pGAOITeW7d4K1NForoSM";</script>

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
                    url: F.url('san-pham/search.json'),
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
                        html += '<a href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/' + F.url(data.html) + '"><img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/' + data.featuredImage + '" /></a>';
                        html += '<a class="product-name" href="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/' + F.url(data.html) + '">' + data.name + '</a>';
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

<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jquery.matchHeight/jquery.matchHeight.min.js"></script>
<script>
    jQuery(document).ready(function () {
        $('.item-div').matchHeight(
            {
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            }
        );
    });
</script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jPages-master/js/jPages.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jPages-master/js/highlight.pack.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jPages-master/js/tabifier.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jPages-master/js/js.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jPages-master/js/jPages.js"></script>
<script>
    /* when document is ready */
    // $(function () {
    //
    //     if ($(window).width() > 768) {
    //         $("div.holder").jPages({
    //             containerID: "ulAmbul",
    //             perPage: 9,
    //             first: "Đầu",
    //             previous: "Previous",
    //             next: "Next",
    //             last: "Last",
    //             midRange: 2,
    //         });
    //     }
    //     else {
    //         $("div.holder").jPages({
    //             containerID: "ulAmbul",
    //             perPage: 10,
    //             first: "Đầu",
    //             previous: "Previous",
    //             next: "Next",
    //             last: "Last",
    //             midRange: 2,
    //         });
    //     }
    //
    //
    // });
</script>


</body>

</html>