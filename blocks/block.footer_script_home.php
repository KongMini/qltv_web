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

<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/simply-toast.min.js"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/fansi.prototype0290.js?v=103"></script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/typeahead/typeahead.bundle.min.js"></script>
<!-- JQUERY SELECT2 INPUT -->
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/lib/select2/select2.4.0.6.full.min.js"></script>
<!--Site js-->
<script type="text/javascript">
    var IsHomepage = true;
</script>
<script src="<?= $ariacms->actual_link ?>templates/<?= $ariaConfig_template ?>/js/site0b50.js?v=1655546037204"></script>
<!-- Request access token -->
<script type="text/javascript">var __RequestVerificationToken = "CfDJ8N9LW0FJ59ZPouBHdG2QRKb1MUoKryokiiCu_zvDmtPhHd3Q4UUpCjZKqIfwysd8cFuoO9nEMU91Q68BaEtqylWL38OeC1uwj73S8cAVMlHKKH5Pzt1bF7EMKLmPttNiwOucnL-HBAnP3AdTYEgN3II";</script>

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
        var isHomepage = true;
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
    var isCheckHomePage = true;
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

<script type="text/javascript">
    var mq = window.matchMedia("(max-width: 767px)");
    $(document).ready(function () {
        $('.slide-slicks').slick({
            dots: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            dotClass: 'slick-dots'
        });

        if (mq.matches) {
            $('.slide-collection').slick({
                dots: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dotClass: 'slick-dots'
            });
        }


        $('#exampleModalCenter').modal('show');

        $('.slide-slicks-test').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });



    });
    $(window).resize(function () {
        if (mq.matches) {
            $('.slide-collection').slick({
                dots: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dotClass: 'slick-dots'
            });
        }
        else {
            location.reload();
        }
    });
</script>
