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
$id = $_REQUEST['id'];
$query = "SELECT * FROM e4_web_menu WHERE id = $id";
$database->setQuery($query);
$web_menu_detail = $database->loadRow();

$row = new stdClass;
$row->id = $web_menu_detail['id'];
$row->parent = $web_menu_detail['parent'];
$row->title_vi = $web_menu_detail['title_vi'];
$row->title_en = $web_menu_detail['title_en'];
$row->url_html = $web_menu_detail['url_html'];
$row->order = $web_menu_detail['order'];
$row->status = $web_menu_detail['status'];
$row->type = $web_menu_detail['type'];

echo json_encode($row);
