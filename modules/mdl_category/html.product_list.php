<?php
global $ariacms;
global $params;
global $taxonomies;
global $ariaConfig_template;
$pageSize = $ariacms->getParaUrl('pageSize');
$maxRows = ($pageSize > 0) ? $pageSize : $ariacms->web_information->product_per_page;

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title><?= _PRODUCT_LIST ?> - <?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?></title>
    <meta name="description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />
    <meta name="keywords" content="<?= ($ariacms->web_information->{$params->meta_keyword} != '') ? $ariacms->web_information->{$params->meta_keyword} : $ariacms->web_information->{$params->name}; ?>" />
    <meta property="og:title" content="<?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?>" />
    <meta property="og:description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />

    <meta property="og:image" content="<?= $ariacms->web_information->{'image-icon'} ?>">
    <?= $ariacms->getBlock("head"); ?>
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

    <div class="row" id="begin-body" style="padding-top: 56px;">

        <div class="wp-page w-100 float-left wp-page-product">
            <div class="text-center">
                <div class="col-md-8 col-md-offset-2" style="display:none;">
                    <h2 class="font-playfair">Sản phẩm </h2>
                    <h3 class="font-sfui">Xu hướng thời trang</h3>
                </div>
            </div>
            <div class="header-product">

                <div class="sort-box product-sort mb-0">
                    <div class="form-group form-inline mb-0" style="float:right;">
                        <label for="product-filter">Sắp xếp </label>
                        <div class="custom-select">
                            <select id="product-filter" class="form-control" onchange="LoadProductByFilter(this)" style="position: relative"></select>
                            <div class="custom-select-item select-selected">Mới nhất</div>
                            <div class="select-items select-hide" onclick="return false;">
                                <div class="custom-select-item" data-filter="sort" data-value="id_desc"><span>Mới nhất</span></div>
                                <div class="custom-select-item" data-filter="sort" data-value="id_asc"><span>Cũ nhất</span></div>
                                <div class="custom-select-item" data-filter="sort" data-value="product_price_desc"><span>Giá giảm dần</span></div>
                                <div class="custom-select-item" data-filter="sort" data-value="product_price_asc"><span>Giá tăng dần</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $ariacms->getBlock("sidebar_left_product") ?>


            <div class="w-product">
                <div class="row product-content list-item-div" id="list-products">
                    <?php
                    if($total > 0){
                        foreach ($products  as $product){?>


                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 product-item item-div text-left">
                                <div class="product-thumb">
                                    <div class="product-thumbnail-wrap">
                                        <a href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>">
                                            <img class="test" src="<?= ($product->image_thumb != '') ? $product->image_thumb : $product->image ?>"
                                                 alt="V&#xE1;y midi c&#x1ED5; 2 ve d&#x1EAD;p ly to">
                                        </a>
                                    </div>


                                    <!--                            <div class="view-add-to-cart" onclick="event.preventDefault();">-->
                                    <!--                                <div class="color">-->
                                    <!--                                    <span class="circle active" data-name=Tr&#x1EAF;ng style="background-color:#FFFFFF" data-id="1" data-url="https://static.dchic.vn/uploads/media/2022/06/DTT-4852-371812819.jpg" data-size-ids="139,138"></span>-->
                                    <!--                                    <span class="circle " data-name=Xanh style="background-color:#87CEEB" data-id="4" data-url="https://static.dchic.vn/uploads/media/2022/06/DTT-5961-62819498.jpg" data-size-ids="139,138,140"></span>-->
                                    <!--                                </div>-->
                                    <!--                                <div class="size">-->
                                    <!--																			<span class="product-feature-size circle circle_border active " data-id="139">-->
                                    <!--												<span class="name">S</span>-->
                                    <!--												<span class="circle-disable d-none"></span>-->
                                    <!--											</span>-->
                                    <!--                                    <span class="product-feature-size circle circle_border  " data-id="138">-->
                                    <!--												<span class="name">M</span>-->
                                    <!--												<span class="circle-disable d-none"></span>-->
                                    <!--											</span>-->
                                    <!--                                    <span class="product-feature-size circle circle_border  " data-id="140">-->
                                    <!--												<span class="name">L</span>-->
                                    <!--												<span class="circle-disable "></span>-->
                                    <!--											</span>-->
                                    <!--                                </div>-->
                                    <!--                                <div class="add-to-cart btn w-100 " onclick='BindAddCartBtn($(this))'>-->
                                    <!--                                    Thêm vào giỏ hàng-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                </div>
                                <h4>
                                    <a class="product-name" href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>"><?= $product->{$params->title} ?></a>
                                    <?php if($product->meta_product_code){?>
                                         <a class="product-ms" href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>">MS: <?= $product->meta_product_code?></a>
                                    <?php }?>
                                </h4>
                                <p style="margin-bottom:0;">
                                    <?php if($product->meta_product_code){?>
                                        <span class="pull-left d-none">MS: <?= $product->meta_product_code?>></span>
                                    <?php }?>
                                    <span class="pull-right">
                                        <?php if($product->product_price){?>
                                            <span class="old-price"><strike class="color-original-price"><?= $ariacms->formatPrice($product->product_price)?> VNĐ</strike></span>
                                        <?php }if($product->product_sale){?>
                                            <span class="color-price-sale"><?= $ariacms->formatPrice($product->product_sale)?> VNĐ</span>
                                        <?php }?>
                                    </span>
                                </p>
                                <!--                        <div class="mt-3 info-product cursor-pointer" data-product-id="22113" data-product-slug="vay-midi-co-2-ve-dap-ly-to-8904293">-->
                                <!--                            <strong class=" total-color">+ 2 MÀU SẮC</strong>-->
                                <!--                        </div>-->
                            </div>
                        <?php }
                    }else{
                        echo "<h2 class='text-center' style='margin-top: 100px'> Không có sản phẩm</h2>";
                    }?>
                </div>
                <?php if($total  > 12) {?>
                    <div class="row" id="xemthem">
                        <div class="col-12 text-center">
                            <button class="btn btn-default btn-item-viewmore"  onclick="xemthem()">Xem thêm</button>
                            <input type="hidden" value="1" id="page">
                            <input type="hidden" value="<?=  floor($total / 12)?>" id="totalPage">
                            <input type="hidden" value="<?= $keysearch?>" id="keysearch">
                            <input type="hidden" value="<?= $ariacms->getParaUrl("sort")?>" id="sort">

                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
        <script type="text/javascript">

            function xemthem(){

                var page = $('#page').val();
                var total = $('#totalPage').val();
                var keysearch = $('#keysearch').val();
                var task = $('#task').val();
                var sort = $('#sort').val();

                var f = "task="+task+"&keysearch="+ keysearch +" &page=" + page +" &sort" + sort;
                var _url = "/ajax/ajax.get_product.php?"+f;

                $.ajax({
                    url: _url,
                    data: f,
                    cache: false,
                    context: document.body,
                    success: function(data) {

                        $("#list-products").append(data);

                        page ++;
                        document.getElementById('page').value = page;
                        if(page >= total ){
                            document.getElementById('xemthem').style.display = 'none'
                        }
                    }
                });
            }
        </script>
        <!--Bản basic - đặt hàng thông thường-->
        <div class="modal fade bd-cart-modal-lg" tabindex="-1" role="dialog" aria-labelledby="cart-model" aria-hidden="true" id="modelCart">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <div class="title pt-md-3 pt-0 title-product-add">Sản phẩm đã được thêm vào giỏ hàng</div>
                                            <div class="d-flex justify-content-center form-group info product-popup">
                                                <div class="w-img-product-quick">
                                                    <img class="img-product-quick" src="#" />
                                                </div>

                                                <div class="pl-4 text-left d-flex align-items-center">
                                                    <div>
                                                        <strong class="name">Áo Dài Khuê Diễm Trâm An Nguyệt</strong>
                                                        <div>
                                                            <span class="circle color d-none" style="background-color: #000000"></span>
                                                            <span class="product-feature-size circle circle_border size d-none">
															<span class="name">M</span>
														</span>
                                                            <div class="color-name mr-3">

                                                            </div>
                                                            <div class="size-name">

                                                            </div>
                                                        </div>
                                                        <div class="info-product">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center m-auto d-flex justify-content-center btn-end mt-md-3">
                                                <div class="btn btn-dark mr-2 text-white rounded-0 cursor-pointer btn-action-product" data-dismiss="modal">Tiếp tục mua</div>
                                                <div class="btn rounded-0 text-white cursor-pointer view-cart" style="background-color:#b99e69" onclick="window.location.href='gio-hang.html'">Xem giỏ hàng</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid pt-3 pb-4 mt-4 product-viewed" style="background-color:#f6f6f6">
                        <div class="row">
                            <div class="col-12 fix-Product-viewed">
                                <h5 class="text-center pb-3 title-product-viewed">Sản phẩm đã xem</h5>
                                <div class="d-flex justify-content-center viewed-container">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Bản update - Không cho phép đặt hàng-->




    </div>
    <!--End Body-->
</div>


<?= $ariacms->getBlock("footer"); ?>
<?= $ariacms->getBlock("footer_script"); ?>
</body>

</html>