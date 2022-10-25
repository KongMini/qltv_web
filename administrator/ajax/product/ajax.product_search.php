<?php
session_start();
if (file_exists("../../../configuration.php")) {
	require_once("../../../configuration.php");
} else {
	echo "Missing Configuration File";
	exit();
}
//Include Database Controller
if (file_exists("../../../include/database.php")) {
	require_once("../../../include/database.php");
} else {
	echo "Missing Database File";
	exit();
}
//Include System File
if (file_exists("../../../include/ariacms.php")) {
	require_once("../../../include/ariacms.php");
} else {
	echo "Missing System File";
	exit();
}
$database = new database($ariaConfig_server, $ariaConfig_username, $ariaConfig_password, $ariaConfig_database);
$ariacms = new ariacms();
$title_post = trim(strtolower($_REQUEST['title_post']));
$id = $_REQUEST['id'];
$list_related_product = ($_REQUEST['list_related_product'] != "") ? (($id > 0) ? $_REQUEST['list_related_product'] . ',' . $id : $_REQUEST['list_related_product']) : (($id > 0) ? $id : "''");

$query = "SELECT a.*, b.fullname FROM e4_posts a 
				JOIN e4_users b ON a.user_created = b.id
			WHERE a.post_type = 'product' AND a.post_status = 'active' AND (LOWER(a.title_vi) LIKE '%$title_post%' OR LOWER(a.title_en) LIKE '%$title_post%') AND a.id NOT IN ($list_related_product)
			order by a.id desc LIMIT 0,20";
$database->setQuery($query);
$products = $database->loadObjectList();

foreach ($products as $product) {
	echo '<tr id="product_search_' . $product->id . '">
		<td>' . $product->id . '</td>
		<td>' . $product->title_vi . '</td>
		<td>' . $product->fullname . '</td>
		<td>' . $ariacms->unixToDate($product->post_created, '/') . '</td>
		<td><span class="btn btn-sm btn-success" onclick="addRelatedProduct(' . $product->id . ')">Thêm</span></td>
	</tr>';
}
