<?php
session_start();
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

$pid = trim($_REQUEST["pid"]);
$quantity = (trim($_REQUEST["quantity"]) != '' && trim($_REQUEST["quantity"]) != 'undefined') ? trim($_REQUEST["quantity"]) : 1;
$type = trim($_REQUEST['type']);

switch ($type) {
	case 'add':
		if ($pid != '') {
			if (!isset($_SESSION['orderCart'])) {
				$_SESSION['orderCart'] = array();
			}
			$_SESSION['orderCart'][$pid] += $quantity;
		}
		// Get product info by id
		$query = "SELECT a.*, b.term_taxonomy_id_list FROM e4_posts a 
		LEFT JOIN ( 
			SELECT t1.object_id, GROUP_CONCAT(t1.term_taxonomy_id) AS term_taxonomy_id_list
			FROM e4_term_relationships t1 
			LEFT JOIN e4_term_taxonomy t2 ON t1.term_taxonomy_id = t2.id GROUP BY t1.object_id
			) b ON a.id = b.object_id
		WHERE a.id = $pid";
		$database->setQuery($query);
		$product_detail = $database->loadRow();

		$row = new stdClass;
		$row->image_thumb = ($product_detail['image_thumb']) ? $product_detail['image_thumb'] : $product_detail['image'];
		$row->title_vi = $product_detail['title_vi'];
		$row->url_part = $ariacms->actual_link . 'chi-tiet/' . $product_detail['url_part'] . 'html';
		$row->product_sale = ($product_detail['product_sale'] > 0  && $product_detail['price_status'] != 'deactive') ? $ariacms->formatPrice($product_detail['product_sale']) . ' ₫' : _CONTACT;
		$row->product_price = ($product_detail['product_price'] > 0  && $product_detail['price_status'] != 'deactive') ? $ariacms->formatPrice($product_detail['product_price'] . ' ₫') : 0;

		$total = 0;
		foreach ($_SESSION['orderCart'] as $productID => $value) {
			$total += $value;
		}
		$row->totalProduct = $total;
		echo json_encode($row);

		break;
	case 'edit':
		foreach ($_SESSION['orderCart'] as $productID => $value) {
			if ($productID == $pid) {
				$_SESSION['orderCart'][$productID] = $quantity;
			}
		}
		$ariacms->redirect("", $ariacms->actual_link . 'gio-hang.html');
		break;
	case 'delete':
		if ($pid) {
			foreach ($_SESSION['orderCart'] as $productID => $value) {
				if ($productID == $pid) {
					unset($_SESSION['orderCart'][$productID]);
				}
			}
		} else {
			unset($_SESSION['orderCart']);
		}
		$ariacms->redirect("", $ariacms->actual_link . 'gio-hang.html');
		break;
}
