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
$type = trim($_REQUEST['type']);
$idProduct = trim($_REQUEST['idProduct']);

if ($type == 'hide') {
	$query = "UPDATE e4_posts SET price_status = 'deactive' WHERE id IN (" . $idProduct . ")";
	$database->setQuery($query);
	$database->query();
} else if ($type == 'show') {
	$query = "UPDATE e4_posts SET price_status = 'active' WHERE id IN (" . $idProduct . ")";
	$database->setQuery($query);
	$database->query();
}
