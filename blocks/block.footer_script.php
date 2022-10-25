<?php
global $ariacms;
global $ariaConfig_template;
global $analytics_code;
global $database;
global $params;
/** Print analytics code for website */
if ($analytics_code) {
	foreach ($analytics_code as $analytic_code) {
		if ($analytic_code->position == 'footer')
			echo $analytic_code->code;
	}
}
?>

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
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/site0adc.js?v=1655546038162"></script>
<!-- Request access token -->
<script type="text/javascript">var __RequestVerificationToken = "CfDJ8N9LW0FJ59ZPouBHdG2QRKYQYdCy6cWMA6g3bNKt_a5Fpu5nYNHerDlYIQPgg5gdSvloZmg5XjkBF5Dc2qiKp21gYAMhIITTPFsXg53t0ljuk7Yg6rr2Z2-rRUD8ZLQ0lnt5P7MQn6strH_t4_XF8xo";</script>

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
                        html += '<a href="' + F.url(data.html) + '"><img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/' + data.featuredImage + '" /></a>';
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

<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/jquery.matchHeight/jquery.matchHeight.min.js"></script>
<script>
    var filter = {"sorter":{"newest":true,"bestSeller":false,"priceDesc":false,"priceAsc":false,"sort":null},"categorySlug":null};
    var page = 2
    var offset = 12;
    var total = 147;
    var cartItem = {
        productId: 0,
        sizeId: 0,
        colorId: 0,
        quantity: 1,
        //__RequestVerificationToken: __RequestVerificationToken
    };

    jQuery(document).ready(function ($) {
        BindSize();
        // Set item height
        //  mac dinh expandt menu con khi co' menu đã active
        ExpandMenu();
        $('.item-div').matchHeight(
            {
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            }
        );

        // bind item viewmore
        // $(".btn-item-viewmore").bind("click", function () {
        //     $.ajax({
        //         url: window.location.origin + '/san-pham/load-more',
        //         type: 'get',
        //         data: { sort: filter.sort, sale: filter.sale, categorySlug: filter.categorySlug, page: page, __RequestVerificationToken: __RequestVerificationToken, url: `${window.location.pathname}${window.location.search}` },
        //         dataType: 'json',
        //         beforeSend: function () {
        //             StartLoading();
        //         },
        //         complete: function () {
        //             StopLoading();
        //         },
        //         success: function (response) {
        //             if (response.status === 1) {
        //                 if (response.data.length > 0) {
        //                     BindItemViewMore(response);
        //                 }
        //             }
        //             else {
        //                 ToastMessage("danger", response.message || "Lỗi! Vui lòng thử lại");
        //             }
        //         },
        //         error: function () {
        //             StopLoading();
        //             ToastMessage("danger", "Lỗi! Vui lòng thử lại");
        //         }
        //     });
        // });

        // Set option selected for sorter
        (function (query) {
            if (typeof query.sort != "undefined") {
                filter.sort = query.sort;
                filter.sale = query.sale || "";

                var selectSort = $('.custom-select-item[data-value="' + filter.sort + '"]');
                var selectedSort = $('.custom-select-item.select-selected');
                var sale = filter.sale.split(',');

                selectedSort.text(selectSort.find('span').text());
                sale.forEach(function (v) {
                    $('.select-sale input[value="' + v + '"]').prop("checked", true);
                });
            }
        })(F.parse_str(window.location.href));
    });
    function BindItemViewMore(response) {
        var firstheight = $("#list-products").height();
        console.log('firstheight: ' + firstheight);
        var items = '';
        console.log("response", response);
        $.each(response.data, function (i, v) {
            // set het hang
            let hethang = '';
            let disHethang = '';
            let clickHethang = 'onclick="BindAddCartBtn($(this))"';
            if (v.isInstock == false || v.quantityInstock == "0") {
                hethang = `<div class="product-item-hot-tag tag-bottom-right">
                                    <span>>Hết hàng</span>
                               </div>`;
                disHethang = 'disabled';
                clickHethang = "";
            }
            // bind horver color.
            let color = '';
            let sizeDefault = '';
            $(v.colors).each(function (index, value) {
                let active = "";
                if (value.id <= 0) return;
                if (value.sizeIds && !sizeDefault) {
                    sizeDefault = value.sizeIds
                    active = "active";
                }
                color += `
                             <span class="circle ${active}" data-name=${value.name} style="background-color: ${value.value}" data-id="${value.id}" data-url="${value.urlImage}" data-size-ids="${value.sizeIds}"></span>
                         `;
            });

            let isCheckSize = 0;
            let size = '';
            $(v.sizes).each(function (index, value) {
                let active = '';
                if (value.id <= 0) return;
                if (sizeDefault.includes(value.id.toString())) {
                    active = 'd-none';
                    isCheckSize++;
                }
                size += `
                                <span class="product-feature-size circle circle_border ${isCheckSize === 1 && active ? 'active' : ''}" data-id="${value.id}">
                                    <span class="name">${value.name}</span>
                                    <span class="circle-disable ${active}"></span>
                                </span>
                            `;
            });
            let addToCart = `<div class="view-add-to-cart" onclick="event.preventDefault();">
                                    <div class="color">
                                        ${color}
                                    </div>
                                    <div class="size">
                                        ${size}
                                    </div>
                                    <div class="add-to-cart btn w-100 ${disHethang}" ${clickHethang}>
                                        Thêm vào giỏ hàng
                                    </div>
                                </div>`;

            // set giá
            let price = '';
            if (v.specialPrice == 0) {
                price = v.price.replace('₫', 'VNĐ');
            }
            else {
                price = `
                                <span class="old-price">
                                    <strike class="color-original-price"> ${v.price.replace('₫', 'VNĐ')}</strike></span>
                                <span class="color-price-sale"> ${v.specialPrice.replace('₫', 'VNĐ')}</span>
                            `;
            }
            // set discountCash
            let discount = '';
            if (v.discountCash) {
                discount = `

                               `;
            }
            /* discount =  <div class="product-item-hot-tag tag-right">
                                    <span>-  ${v.discountCash }</span>
                                </div>*/
            // set hot new
            let hotnew = '';
            if (v.isNew) {
                hotnew = ``;
            }
            /*if (v.isNew) {
                hotnew = `<div class="product-item-hot-tag tag-left">
                            <span>NEW</span>
                        </div>`;
            }*/
            let info = `
                                <h4>
                                    <a class="product-name" href="san-pham/%24%7bv.slug%7d.html"> ${v.name}</a>
                                    <a class="product-ms" href="san-pham/%24%7bv.slug%7d.html">MS: ${v.sku}</a>
                                </h4>
                                <p style="margin-bottom:0;">
                                    <span class="pull-right">
                                            ${price}
                                    </span>
                                </p>

                                <div class="mt-3 info-product cursor-pointer" data-product-id="${v.id}">
                                    <strong class=" total-color">+ ${v.totalColor} MÀU SẮC</strong>
                                </div>
                           `;

            if (v.discountPercent == 30) {
                items += `<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 product-item item-div text-left">
                                <a class="product-thumb" href="san-pham/%24%7bv.slug%7d.html">
                                    <div class="product-thumbnail-wrap">
                                        <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/${v.thumbnail}" alt="${v.name}">
                                    </div>
                                    ${hotnew}` +
                    `<div class="product-item-hot-tag tag-right" style="background: none; top: 0; right:0;">
                                         <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>//images/product/tag-sale-30.png" style="width:100%; margin-top: -8px;"/>
                                    </div>` +
                    `  ${discount}
                                    ${hethang}
                                    ${addToCart}
                                </a>
                                ${info}
                            </div>`;
            }
                //else if (v.discountPercent == 40) {
                //    items += `<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 product-item item-div text-left">
                //                <a class="product-thumb" href="/san-pham/${v.slug}.html">
                //                    <div class="product-thumbnail-wrap">
                //                        <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/${v.thumbnail}" alt=" ${v.name}">
                //                    </div>
                //                    ${hotnew}` +
                //        `<div class="product-item-hot-tag tag-right" style="background: none; top: 0; right:0;">
                //                         <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>//images/product/tag-sale-40.png" style="width:100%; margin-top: -8px;"/>
                //                    </div>` +
                //        `${discount}
                //                    ${hethang}
                //                    ${addToCart}
                //                </a>
                //                ${info}
                //        </div>`;
            //}
            else if (v.discountPercent == 50) {
                items += `<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 product-item item-div text-left">
                                <a class="product-thumb" href="san-pham/%24%7bv.slug%7d.html">
                                    <div class="product-thumbnail-wrap">
                                        <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/${v.thumbnail}" alt=" ${v.name}">
                                    </div>
                                    ${hotnew}` +
                    `<div class="product-item-hot-tag tag-right" style="background: none; top: 0; right:0; text-align: right;">
                                    <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>//images/product/last_sale_50.png" style="width:40%;" />
                                </div>` +
                    `${discount}
                                    ${hethang}
                                    ${addToCart}
                                </a>
                                ${info}
                        </div>`;
            }
            else if (v.discountPercent == 60) {
                items += `<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 product-item item-div text-left">
                                <a class="product-thumb" href="san-pham/%24%7bv.slug%7d.html">
                                    <div class="product-thumbnail-wrap">
                                        <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/${v.thumbnail}" alt=" ${v.name}">
                                    </div>
                                    ${hotnew}` +
                    `<div class="product-item-hot-tag tag-right" style="background: none; top: 0; right:0; text-align: right;">
                                    <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>//images/product/promo_50.png" style="width:100%; margin-top:-2px;"/>
                                </div>` +
                    `${discount}
                                    ${hethang}
                                    ${addToCart}
                                </a>
                                ${info}
                        </div>`;
            }
                //else if (v.discountPercent == 70) {
                //    items += `<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 product-item item-div text-left">
                //                <a class="product-thumb" href="/san-pham/${v.slug}.html">
                //                    <div class="product-thumbnail-wrap">
                //                        <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/${v.thumbnail}" alt=" ${v.name}">
                //                    </div>
                //                    ${hotnew}` +
                //        `<div class="product-item-hot-tag tag-right" style="background: none; top: 0; right:0; text-align:right;">
                //                    <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>//images/product/tag_70.png" style="width:50%;" />
                //                </div>` +
                //        `${discount}
                //                    ${hethang}
                //                    ${addToCart}
                //                </a>
                //                ${info}
                //        </div>`;
                //}
                //else if (v.discountPercent == 20) {
                //    items += `<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 product-item item-div text-left">
                //                <a class="product-thumb" href="/san-pham/${v.slug}.html">
                //                    <div class="product-thumbnail-wrap">
                //                        <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/${v.thumbnail}" alt=" ${v.name}">
                //                    </div>
                //                    ${hotnew}` +
                //        `<div class="product-item-hot-tag tag-bottom-left" style="background: none; bottom: 0;">
                //                    <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>//images/product/tag-len.png" style="width:100%" />
                //                </div>` +
                //        `${discount}
                //                    ${hethang}
                //                    ${addToCart}
                //                </a>
                //                ${info}
                //        </div>`;
                //}
                //    else if (v.description != null && v.description.includes("ao-dai-")) {
                //   items += `<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 product-item item-div text-left">
                //              <a class="product-thumb" href="/san-pham/${v.slug}.html">
                //                    <div class="product-thumbnail-wrap">
                //                        <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/${v.thumbnail}" alt=" ${v.name}">
                //                   </div>
                //                    ${hotnew}` +
                //                   ` <div class="product-item-hot-tag tag-bottom-left" style="background: none; bottom: 0; left:0;">
                //                        <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>//images/product/tag_AD.png" style="width: 75%;" />
                //                    </div>` +
                //                    `${discount}
                //                    ${hethang}
                //                    ${addToCart}
                //                </a>
                //                ${info}
                //        </div>`;
            //}

            else {
                items += `<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 product-item item-div text-left">
                              <a class="product-thumb" href="san-pham/%24%7bv.slug%7d.html">
                                    <div class="product-thumbnail-wrap">
                                        <img src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/${v.thumbnail}" alt=" ${v.name}">
                                   </div>
                                    ${hotnew}` +
                    `${discount}
                                    ${hethang}
                                    ${addToCart}
                                </a>
                                ${info}
                        </div>`;
            }

        });

        //window.scrollTo(0, 400);
        if (items != '') {
            $('.list-item-div').append(items);
            // Set item height
            FixHeightRow();
        }

        // Hide view-more button
        if (page++ * offset >= total) {
            $(".btn-item-viewmore").parent().remove();
        }
        BindHoverAddCart();
        //BindSize();
        window.scrollTo(0, firstheight);
    }
    // Load product by filter
    function LoadProductByFilter(elem) {
        var sorterValue = elem.data('value');
        var href = window.location.pathname + '?sort=' + sorterValue;

        for (var i in filter.sorter) {
            filter.sorter[i] = false;
        }

        if (typeof filter.sorter[sorterValue] != "undefined") {
            filter.sorter[sorterValue] = true;
            filter.sort = sorterValue;
        }

        if (filter.sale) {
            href += '&sale=' + filter.sale;
        }

        window.location.href = href;
    }

    (function () {
        var itemListWp = $('.custom-select .select-items');
        var itemList = $('.custom-select .custom-select-item');
        var selectedItem = $('.custom-select .select-selected');

        itemList.bind("click", function (e) {
            var _this = $(this);
            if (!_this.hasClass('select-selected')) {
                selectedItem.text(_this.find('span').text());
                if (!_this.hasClass('select-sale')) {
                    LoadProductByFilter(_this);
                }
            }

            if (!_this.hasClass('select-sale')) {
                closeAllSelect(this);
            }
        });

        itemList.find('ul > li').bind('click', function (e) {
            e.stopPropagation();
            var _this = $(this);
            var inputCheckbox = _this.find('input[type="checkbox"]');
            inputCheckbox.prop("checked", !inputCheckbox.is(":checked")).trigger("change");
        });
        itemList.find('input[type="checkbox"]')
            .bind('click', function (e) {
                e.stopPropagation();
            })
            .bind('change', function (e) {
                var _this = $(this);
                if (!filter.sale) {
                    filter.sale = "";
                }

                var sale = filter.sale.split(",");
                if (_this.is(':checked')) {
                    sale.push(_this.val());
                }
                else {
                    sale.splice(sale.indexOf(_this.val()), 1);
                }

                filter.sale = sale.filter(function (i) { return i.length > 0 }).sort().join(',');
                LoadProductByFilter(_this.closest('.select-sale'))
            });

        $('.select-sale').bind('click', function () {
            var _this = $(this);
        });

        selectedItem.bind("click", function (e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            if (!selectedItem.hasClass('select-sale')) {
                closeAllSelect(this);
            }

            this.classList.toggle("select-arrow-active");
            itemListWp.toggleClass("select-hide");
        });

        function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            for (i = 0; i < y.length; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < x.length; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", function (e) {
            var _this = $(e.target);
            if (!_this.hasClass('select-sale') && !_this.hasClass('select-sale-text')) {
                closeAllSelect(e.target);
            }
        });
    })();

    function FixHeightRow() {
        if ($(window).width() > 768) {
            $('.item-div').css({"height" : "auto"});
            // Select and loop the container element of the elements you want to equalise
            $('.list-item-div').each(function () {
                // Cache the highest
                var highestBox = 0;
                // Select and loop the elements you want to equalise
                $('.item-div', this).each(function () {
                    // If this box is higher than the cached highest then store it
                    if ($(this).outerHeight() > highestBox) {
                        highestBox = $(this).outerHeight();
                    }
                });
                // Set the height of all those children to whichever was highest
                $('.item-div', this).css({ "height" : (highestBox) });
            });
        } else {
            $('.list-item-div').each(function () {
                $('.item-div', this).css({ "height": "auto" });
            });
        }
    }
    //av js Menu Product
    var ClickMenu = '.ma-submenu-col .ma-submenu-icon,.ma-submenu-title';
    $(ClickMenu).click(function () {

        var This = $(this);
        if (This.parents('li.ma-menu-box').find('ul.sub-category-product').hasClass("active")) {
            $('ul.sub-category-product.active').removeClass("active").hide(300);
        }
        else {
            $('ul.sub-category-product').removeClass("active").hide(300);
            This.parents('li.ma-menu-box').find('ul.sub-category-product').addClass("active").show(300);
        }
        var iconToggle = This.parent('.wp-text-category-product').find('i.fa').hasClass('fa-angle-down');
        if (iconToggle) {
            This.parent('.wp-text-category-product').find('i.fa').removeClass('fa-angle-down');
            This.parent('.wp-text-category-product').find('i.fa').addClass('fa-angle-up');
        } else {
            This.parent('.wp-text-category-product').find('i.fa').removeClass('fa-angle-up');
            This.parent('.wp-text-category-product').find('i.fa').addClass('fa-angle-down');

        }
    });
    function ExpandMenu() {

        $('.ma-submenu-col .sub-category-product .ma-category-link.active').each(function (index, value) {
            var test = $(value).parent().parent();
            $(value).parent().parent().addClass('active').show(300);
        });
    }

</script>