<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
// Include Configuration File
if (file_exists("../configuration.php")) {
    require_once("../configuration.php");
} else {
    echo "Missing Configuration File";
    exit();
}
// Include Language File
if (file_exists("../languages/lang." . $ariaConfig_language . ".php")) {
    require_once("../languages/lang." . $ariaConfig_language . ".php");
} else {
    echo "Missing Language File";
    exit();
}
// Include Params File
if (file_exists("../params/params." . $ariaConfig_language . ".php")) {
    require_once("../params/params." . $ariaConfig_language . ".php");
} else {
    echo "Missing Params File";
    exit();
}
// Include Database Controller
if (file_exists("../include/database.php")) {
    require_once("../include/database.php");
} else {
    echo "Missing Database File";
    exit();
}
// Include System File
if (file_exists("../include/ariacms.php")) {
    require_once("../include/ariacms.php");
} else {
    echo "Missing System File";
    exit();
}

/** Setup Global variables */
$database = new database($ariaConfig_server, $ariaConfig_username, $ariaConfig_password, $ariaConfig_database);
$ariacms = new ariacms();
$params = new params();

$page = $_REQUEST['page'];
$where = "";
$order = "";
$sort =$_REQUEST["sort"];
switch ($order) {
    case "id_desc":
        $order = " order by a.id desc ";
        break;
    case "id_asc":
        $order = " order by a.id asc ";
        break;
    case "product_price_asc":
        $order = " order by a.product_price asc ";
        break;
    case "product_price_desc":
        $order = " order by a.product_price desc ";
        break;
    default:
        $order = " order by a.id desc ";
        break;
}

if($_REQUEST['keysearch']) {
    $keysearch = $_REQUEST['keysearch'];
    $where = "AND a.title_vi LIKE '%{$keysearch}%'";
}
if($task = $_REQUEST['task']){
    /** Get category information */
    $query = "SELECT a.*, GROUP_CONCAT('',b.id) submenu  FROM e4_term_taxonomy a 
		LEFT JOIN (SELECT id, parent FROM e4_term_taxonomy) b ON a.id = b.parent OR a.id = b.id
		WHERE a.url_part = '" . $task . "' AND a.status = 'active' 
		GROUP BY a.id";
    $database->setQuery($query);
    $category = $database->loadRow();
    /** Get all product with condition filter and store in category */
    $query = "SELECT a.* FROM e4_posts a JOIN
			(SELECT b.object_id FROM e4_term_relationships b 
			JOIN e4_term_taxonomy c ON b.term_taxonomy_id = c.id AND c.id IN (" . $category['submenu'] . ")
			WHERE b.object_type = 'product') t ON a.id = t.object_id
			JOIN e4_term_relationships b ON b	.object_id = a.id 
		    GROUP BY a.id $order LIMIT 0,12";

    $database->setQuery($query);
    $products = $database->loadObjectList();

}else {
    $query = "SELECT a.* FROM e4_posts a 
				JOIN e4_term_relationships b ON b.object_id = a.id AND b.object_type = 'product'
					WHERE a.post_type = 'product' AND a.post_status = 'active' " . $where . "
					GROUP BY a.id  LIMIT " . $page * 12 . " , 12";
    $database->setQuery($query);
    $products = $database->loadObjectList();
}
if ($products) {
    ?>
    <?php  foreach ($products  as $product){?>


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
                <a class="product-ms" href="<?= $ariacms->actual_link . 'chi-tiet/' . $product->url_part . '.html'; ?>">MS: 2813177</a>
            </h4>
            <p style="margin-bottom:0;">
                <span class="pull-left d-none">MS: 2813177</span>
                <span class="pull-right">
										<span><?= $ariacms->formatPrice($product->product_price)?> VND</span>

								</span>
            </p>
            <!--                        <div class="mt-3 info-product cursor-pointer" data-product-id="22113" data-product-slug="vay-midi-co-2-ve-dap-ly-to-8904293">-->
            <!--                            <strong class=" total-color">+ 2 MÀU SẮC</strong>-->
            <!--                        </div>-->
        </div>
    <?php }?>
    <?php
}
?>