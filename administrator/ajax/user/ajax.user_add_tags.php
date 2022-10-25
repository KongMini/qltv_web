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
$tags = trim($_REQUEST['tags']);
$url_part = $ariacms->utf8ToUrl($tags);

$query = "SELECT id, title_vi FROM e4_term_taxonomy WHERE taxonomy = 'post_tags' AND url_part = '$url_part' ";
$database->setQuery($query);
$news_tags_detail = $database->loadRow();

$row = new stdClass;
$row->id = NULL;
$row->title_vi = $tags;
if ($news_tags_detail) {
	$row->id = $news_tags_detail['id'];
	$row->exist = true;
} else {
	$query = "SELECT id, title_vi FROM e4_term_taxonomy WHERE url_part = '$url_part' ";
	$database->setQuery($query);
	$taxonomy = $database->loadRow();

	$row->url_part = $taxonomy ? $url_part . '-' . rand(0, 100) : $url_part;
	$row->taxonomy = 'post_tags';
	if ($id = $database->insertObject('e4_term_taxonomy', $row, 'id')) {
		$row->id = $id;
		$row->exist = false;
	} else {
		echo $database->stderr();
	}
}
echo json_encode($row);
