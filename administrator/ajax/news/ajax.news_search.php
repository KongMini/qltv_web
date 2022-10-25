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
$list_related_news = ($_REQUEST['list_related_news'] != "") ? (($id > 0) ? $_REQUEST['list_related_news'] . ',' . $id : $_REQUEST['list_related_news']) : (($id > 0) ? $id : "''");

$user_search = ($_REQUEST['user_search'] > 0) ? ' AND a.user_created = ' . $_REQUEST['user_search'] : '';

$query = "SELECT a.*, b.fullname FROM e4_posts a 
				JOIN e4_users b ON a.user_created = b.id $user_search
			WHERE a.post_type = 'post' AND a.post_status = 'active' AND (LOWER(a.title_vi) LIKE '%$title_post%' OR LOWER(a.title_en) LIKE '%$title_post%') AND a.id NOT IN ($list_related_news)
			order by a.id desc LIMIT 0,20";
$database->setQuery($query);
$news = $database->loadObjectList();

foreach ($news as $new) {
	echo '<tr id="news_search_' . $new->id . '">
		<td>' . $new->id . '</td>
		<td>' . $new->title_vi . '</td>
		<td>' . $new->fullname . '</td>
		<td>' . $ariacms->unixToDate($new->post_created, '/') . '</td>
		<td><span class="btn btn-sm btn-success" onclick="addRelatedNews(' . $new->id . ')">Thêm</span></td>
	</tr>';
}
