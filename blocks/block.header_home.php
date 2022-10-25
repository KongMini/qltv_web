<?php
global $database;
global $ariacms;
global $params;
global $web_menus;
global $type_menus;
global $ariaConfig_template;
$i = 0;
if ($_SESSION['orderCart']) {
    foreach ($_SESSION['orderCart'] as $productID => $quantity) {
        $i += $quantity;
    }
}
?>
<div id="top-menu" class="row">
    <div id="top-menu-left" class="col-5">
        <ul class="ul-submenu">

            <?php
                $total_web_menu_1 = 0;
                foreach ($web_menus as $key1 => $web_menu_1) {
                    if($web_menu_1->parent == $type_menus->main->id && $type_menus->main->status == 'active')
                        $total_web_menu_1++;
                }
                $i = 0;
                if ($type_menus->main->status == 'active') {
                    $web_menuscopy = $web_menus;
                    foreach ($web_menus as $key1 => $web_menu_1) {

                        /** Level 1 */
                        if ($web_menu_1->parent == $type_menus->main->id) {
                            if($i == round(( $total_web_menu_1/2 ), 0 )) break;
                            $i++;
                            $url_link = $ariacms->urlStandardizedMenu($web_menu_1->url_html);

                            if ($web_menu_1->submenu > 0) {

                                echo '<li class="dropdown"><a href="javascript://" >' . $web_menu_1->{$params->title} . '</a>';
                                echo '<div class="sub-menu">';
                                echo '<ul class="dropdown-menu megamenu">';
                                foreach ($web_menus as $key2 => $web_menu_2) {
                                    /** Level 2 */
                                    unset($web_menus[$key1]);
                                    if ($web_menu_1->id == $web_menu_2->parent) {
                                        unset($web_menus[$key2]);
                                        $url_link = $ariacms->urlStandardizedMenu($web_menu_2->url_html);
                                        echo '<li class="col-sm-3 item"><a class="dropdown-header" href="javascript://">' . $web_menu_2->{$params->title} . '</a>';
                                        echo '<ul>';
                                        foreach ($web_menus as $key3 => $web_menu_3) {

                                            if ($web_menu_2->id == $web_menu_3->parent) {
                                                unset($web_menus[$key3]);
                                                $url_link = $ariacms->urlStandardizedMenu($web_menu_3->url_html);
                                                echo '<li><a href="'. $url_link .'">' .$web_menu_3->title_vi .'</a></li>';
                                            }
                                        }
                                         echo '</ul>';
                                        echo '</li>';
                                    }
                                }
                                echo '</ul>';
                            } else {
                                unset($web_menus[$key1]);
                                echo ' <li><a class="" href="' . $ariacms->urlStandardizedMenu($web_menu_1->url_html) . '" >' . $web_menu_1->{$params->title} . '</a></li>';
                            }
                        }
                    }
                }
                ?>
        </ul>

    </div>
    <div id="top-menu-center" class="col-2">
        <a href="index.html"><img id="desktop-header-logo" alt="logo-home" data-logo-white="/upload/logo/logo_home.png" data-logo-black="<?= $ariacms->web_information->{'image-logo'}?>" src="/upload/logo/logo_home.png" /></a>
    </div>
    <div id="top-menu-right" class="col-md-5 pull-right" style="height: 100%;">
        <ul class="pull-right text-right">
            <li>
                <div class="search-box-wp form-group hidden">
                    <input type="text" id="search-box-header" class="search-box form-control" value="" placeholder="Nhập mã sản phẩm" />
                    <a class="btn search-box-close" style="border: none; color: gray"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </li>
            <script>
                var input = document.getElementById("search-box-header");
                input.addEventListener("keypress", function(event) {
                    if (event.key === "Enter") {
                        event.preventDefault();
                        var value = input.value;
                        post('./san-pham.html', {'keysearch': value});
                    }
                });
                function post(path, params, method='post') {

                    // The rest of this code assumes you are not using a library.
                    // It can be made less verbose if you use one.
                    const form = document.createElement('form');
                    form.method = method;
                    form.action = path;

                    for (const key in params) {
                        if (params.hasOwnProperty(key)) {
                            const hiddenField = document.createElement('input');
                            hiddenField.type = 'hidden';
                            hiddenField.name = key;
                            hiddenField.value = params[key];

                            form.appendChild(hiddenField);
                        }
                    }

                    document.body.appendChild(form);
                    form.submit();
                }
            </script>
            <li>
                <a href="javascript:void(0)" id="search-box-btn-2" class="ic-search icon-header search-box-btn ic-bg-right">TÌM KIẾM</a>
            </li>
            <?php
            $i = 0;
            if ($type_menus->main->status == 'active') {

                foreach ($web_menus as $key1 => $web_menu_1) {
                    //echo "aaaaaaaaa";
                    /** Level 1 */
                    if ($web_menu_1->parent == $type_menus->main->id) {

                        $url_link = $ariacms->urlStandardizedMenu($web_menu_1->url_html);
                        echo '<li class="dropdown"><a href="'.$url_link.'" >' . $web_menu_1->{$params->title} . '</a></li>';

                    }
                }
            }
            ?>

<!--            <li>-->
<!---->
<!--                <a href="javascript:void(0);" class="ic-shopping-cart icon-header ic-bg-right">-->
<!--                    GIỎ HÀNG-->
<!--                    <span class="cart-item-num cart-items-total"></span>-->
<!--                </a>-->
<!--            </li>-->
<!---->
<!--            <li class="hidden-xs area-login">-->
<!--                <a id="btn-login" href="thanh-toan/review-dang-nhap.html" class="ic-user icon-header ic-bg-right">ĐĂNG NHẬP</a>-->
<!--            </li>-->
        </ul>
    </div>
</div>
<!--End menu desktop-->
<!--Begin menu mobile-->
<header class="font-sfui home active" id="header-mobile">
    <div class="container padding0 content_wp">
        <div class="row">
            <div class="col-md-5" style="height: 100%;">
                <ul class="menu-top">
                    <li><a href="javascript:void(0)" onclick="closeMenuM(this)" id="menu-m-btn" class="ic-menu icon-header" data-toggle="false"></a></li>
                    <li><a href="javascript:void(0)" class="ic-menu-toggle"></a></li>
                </ul>
            </div>
            <div class="col-md-2 text-center" style="height: 100%;">
                <a href="index.html" class="ic-logo-bk" id="ic-logo">
                    <img id="header-logo" data-logo-white="/upload/logo/logo_home.png" data-logo-black="<?= $ariacms->web_information->{'image-logo'}?>" src="/upload/logo/logo_home.png">
                </a>
            </div>
            <div class="col-md-5 pull-right" style="height: 100%; right: -15px;">
                <ul class="pull-right text-right">
                    <li>
                        <a href="javascript:void(0)" id="search-box-btn" class="ic-search icon-header search-box-btn"></a>
                    </li>
                    <li>
                        <a class="ic-shopping-cart icon-header" href="javascript://"><span class="cart-item-num cart-items-total" style="top: -5px; left: 20px; font-size: 12px;"></span></a>

                    </li>
                    <li>
                        <div class="search-box-wp form-group hidden">
                            <input type="text" id="search-box-header2" class="search-box form-control" value="" placeholder="Nhập mã sản phẩm" data-provide="typeahead" />
                            <a class="btn search-box-close" style="border: none; color: gray"><i class="">x</i></a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header>
<!--<div id="top-menu-m">-->
<nav class="menu-m" id="menu-m">
    <div class="menu-m-wrap2">
        <ul class="visible-xs ul-submenu-m">

            <?php

            $i = 0;
            if ($type_menus->main->status == 'active') {

                foreach ($web_menuscopy as $key1 => $web_menu_1) {

                    /** Level 1 */
                    if ($web_menu_1->parent == $type_menus->main->id) {
                        $url_link = $ariacms->urlStandardizedMenu($web_menu_1->url_html);

                        if ($web_menu_1->submenu > 0) {
                            echo '<li><a class="submenu-child-toggle" href="javascript://">' . $web_menu_1->{$params->title} . '<i>+</i></a>';
                            echo '<div class="ul-submenu-m-wrap">';
                            echo '<ul class="ul-submenu-m-child">';
                            foreach ($web_menuscopy as $key2 => $web_menu_2) {
                                /** Level 2 */

                                if ($web_menu_1->id == $web_menu_2->parent) {
                                    foreach ($web_menuscopy as $key3 => $web_menu_3) {
                                        if ($web_menu_2->id == $web_menu_3->parent) {
                                            $url_link = $ariacms->urlStandardizedMenu($web_menu_3->url_html);
                                            echo '<li><a href="'. $url_link .'">' .$web_menu_3->title_vi .'</a></li>';
                                        }
                                    }
                                }
                            }
                            echo '</ul>';
                        } else {
                            echo ' <li><a href="' . $url_link . '" >' . $web_menu_1->{$params->title} . '</a></li>';
                        }
                    }
                }
            }
            ?>

<!--            <li class="menu-m-account">-->
<!--                <a class="ic-shopping-cart icon-header" href="javascript://">Giỏ hàng</a>-->
<!--                <a class="ic-user display-block icon-header" href="tai-khoan/dang-nhap.html">Tài khoản</a>-->
<!--            </li>-->
<!--            <li class="menu-m-social">-->
<!--                <div>-->
<!--                    <a href="https://www.facebook.com/dchic.vn" target="_blank">-->
<!--                        <i class="fa fa-facebook-square"></i>-->
<!--                    </a>-->
<!--                    <a href="https://www.youtube.com/channel/UCrKpLpyzO_IE51SzO2WBx6A" target="_blank">-->
<!--                        <i class="fa fa-youtube" style="font-size: 30px;"></i>-->
<!--                    </a>-->
<!--                    <a href="https://www.instagram.com/dchic.vn" target="_blank">-->
<!--                        <i class="fa fa-instagram"></i>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </li>-->
        </ul>
    </div>
</nav>
<!--</div>-->
<div class="mini-cart">


    <span class="hidden" id="check_AD"></span>
    <div class="mini-cart-wrap">
        <i class="fa fa-arrow-right close-box" onclick="closeBox()"></i>
        <div class="mini-cart-head">
            <i class="fa fa-shopping-cart"></i>
            <span>Giỏ hàng<span class="cart-items-total" id="cart-item-quantity" data-cart-item-quantity="0"></span></span>
        </div>
        <div style="font-size:10px; background-color: #fff7e4;">
        </div>
        <div class="mini-cart-list" style="padding-bottom:100px;">
            <ul class="minicart-list-product">
                <li><p>Chưa có sản phẩm nào trong giỏ hàng</p></li>
            </ul>
        </div>
    </div>

    <!-- Modal -->
    <div id="confirmDeleteItem" class="modal fade" role="dialog" style="z-index: 999999999">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Xác nhận hủy sản phẩm</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Xác nhận hủy sản phẩm này khỏi giỏ hàng?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" id="btnDeleteCartItem" data-dismiss="modal" data-item-id="0" onclick="DeleteCartItem(this)">Hủy sản phẩm</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #fff; color: initial; border-color: #ccc;">Không</button>
                </div>
            </div>

        </div>
    </div>
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
    <script>
        jQuery(document).ready(function ($) {
            $('#btn-order-mini').bind('click', function () {
                //var checkAD = $('#check_AD').val();
                //if (checkAD != null) {
                //    if (checkAD == 1) {
                //    ToastMessage("danger", "Vui lòng chọn mua thêm Áo Dài hoặc Quần Áo Dài không bán lẻ.");
                //    }
                //    else if (checkAD == 2) {
                //        ToastMessage("danger", "Vui lòng chọn mua thêm Quần Áo Dài để hoàn thiện set Áo Dài.");
                //    }
                //    else {
                //            window.location="/thanh-toan";
                //    }
                //}
                window.location="gio-hang.html";

            });

        });
    </script>
<!--<header class="header_area sticky-header">-->
<!--    <div class="main_menu">-->
<!--        <nav class="navbar navbar-expand-lg navbar-light main_box">-->
<!--            <div class="container">-->
<!---->
<!--                <a class="navbar-brand logo_h" href="--><?//= $ariacms->actual_link ?><!--" title="--><?//= $ariacms->web_information->{$params->name} ?><!--">-->
<!--                    <img src="--><?//= $ariacms->web_information->{'image-logo'} ?><!--" alt="--><?//= $ariacms->web_information->{$params->name} ?><!--">-->
<!--                </a>-->
<!--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                </button>-->
<!---->
<!--                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">-->
<!--                    <ul class="nav navbar-nav menu_nav ml-auto">-->
<!---->
<!--                        --><?php
//                        if ($type_menus->main->status == 'active') {
//                            foreach ($web_menus as $web_menu_1) {
//                                /** Level 1 */
//                                if ($web_menu_1->parent == $type_menus->main->id) {
//
//                                    $url_link = $ariacms->urlStandardizedMenu($web_menu_1->url_html);
//
//                                    if ($web_menu_1->submenu > 0) {
//                                        echo '<li class="nav-item submenu dropdown"><a href="' . $url_link . '" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $web_menu_1->{$params->title} . '</a>';
//                                        echo '<ul class="dropdown-menu">';
//                                        foreach ($web_menus as $web_menu_2) {
//                                            /** Level 2 */
//                                            if ($web_menu_1->id == $web_menu_2->parent) {
//
//                                                $url_link = $ariacms->urlStandardizedMenu($web_menu_2->url_html);
//                                                echo '<li class="nav-item"><a class="nav-link" href="' . $url_link . '">' . $web_menu_2->{$params->title} . '</a>';
//                                                echo '</li>';
//                                            }
//                                        }
//                                        echo '</ul>';
//                                    } else {
//                                        echo '<li class="nav-item"><a href="' . $url_link . '" class="nav-link">' . $web_menu_1->{$params->title} . '</a>';
//                                    }
//                                    echo '</li>';
//                                }
//                            }
//                        }
//                        ?>
<!--                    </ul>-->
<!--                    <ul class="nav navbar-nav navbar-right">-->
<!--                        <li class="nav-item">-->
<!--                            <a href="--><?//= $ariacms->actual_link ?><!--gio-hang.html" class="cart"><span class="ti-bag"></span></a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </nav>-->
<!--    </div>-->
<!--    <div class="search_input" id="search_input_box">-->
<!--        <div class="container">-->
<!--            <form class="d-flex justify-content-between" action="--><?//= $ariacms->actual_link ?><!--san-pham.html" method="POST">-->
<!--                <input type="text" class="form-control" name="keysearch" id="keysearch" placeholder="Từ khóa tìm kiếm" value="--><?//= ($_SESSION["filter"]->keysearch) ? $_SESSION["filter"]->keysearch : '' ?><!--">-->
<!--                <button type="submit" class="btn" name="btn_filter" value="filter"></button>-->
<!--                <span class="lnr lnr-cross" id="close_search" title="Close"></span>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->