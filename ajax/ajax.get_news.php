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

$yesterday = date('d/m/Y');
$yesterday_end = date('d/m/Y', time() - 60 * 60 * 24);
$sevenday = date('d/m/Y', time() - 60 * 60 * 24 * 6);
$monthday = date('d/m/Y', time() - 60 * 60 * 24 * 30);
$type = $_REQUEST['type'];
$where = '';
switch ($type) {
	case 'today';
		$where = ' AND post_created >= ' . $ariacms->dateToUnix($yesterday);
		break;
	case 'yesterday';
		$where = ' AND post_created >= ' . $ariacms->dateToUnix($sevenday);
		break;
	case 'sevenday';
		$where = ' AND post_created >= ' . $ariacms->dateToUnix($monthday);
		break;
	default:
		$where = '';
		break;
}

$query = "SELECT * FROM e4_posts WHERE post_type = 'post' and post_status = 'active'" . $where . " ORDER BY visited_count desc, id desc LIMIT 0, 3";
$database->setQuery($query);
$posts = $database->loadObjectList();
if ($posts) {
?>
	<div>
		<?php
		foreach ($posts as $post) {
		?>
			<article class="post post-tp-9">
				<figure>
					<a href="<?= $ariacms->actual_link . 'chi-tiet/' . $post->url_part . '.html'; ?>">
						<img src="<?= ($post->image_thumb) ? $post->image_thumb : $post->image ?>" alt="<?= $post->{$params->title} ?>" class="adaptive" style="height:85px; width:115px;">
					</a>
				</figure>
				<h3 class="title-6"><a href="<?= $ariacms->actual_link . 'chi-tiet/' . $post->url_part . '.html'; ?>"><?= $post->{$params->title} ?></a></h3>
				<div class="meta-tp-2">
					<div class="date"><span><?= $ariacms->unixToDate($post->post_created, '/') ?></span></div>
					<div class="category">
						<i class="li_eye"></i><span><?= $post->visited_count ?></span></a>
					</div>
				</div>
			</article>
		<?php
		}
		?>
	</div>
<?php
}
?>