<?php
class Model
{

	public static function news_list()
	{
		global $database;
		global $ariacms;
		global $taxonomies;
		$submit = $ariacms->getParaUrl('btnSubmit');
		if ($submit == 'search') {
			$keysearch = trim(strtolower(urldecode($ariacms->getParaUrl('keysearch'))));
			$category = $ariacms->getParaUrl('category');
			$author = $ariacms->getParaUrl('author');
			$date = $ariacms->getParaUrl('date');
			$yesterday = date('d/m/Y');
			$time = $ariacms->dateToUnix($yesterday) - $date * 60 * 60 * 24;

			$where = '';
			$where .= ($keysearch != '') ? " AND (LOWER(a.title_vi) LIKE '%$keysearch%' OR LOWER(a.title_en) LIKE '%$keysearch%') " : '';
			$where .= ($author != '') ? " AND a.user_created = " . $author : "";
			$where .= ($date > 0) ? " AND a.post_created >= " . $time : "";

			if ($category > 0) {
				foreach ($taxonomies as $taxonomy) {
					if ($taxonomy->parent == $category && $taxonomy->taxonomy == 'category') {
						$category .= ',' . $taxonomy->id;
					}
				}
				$where_category = ' AND t1.term_taxonomy_id IN ( ' . $category . ')';
			}

			$query = "SELECT a.*, b.fullname, c.ca_title_vi, c.ca_title_en, c.ca_url_part FROM e4_posts a 
				JOIN e4_users b ON a.user_created = b.id
				JOIN (
					SELECT t1.object_id, t2.title_vi AS ca_title_vi, t2.title_en AS ca_title_en, t2.url_part as ca_url_part
					FROM e4_term_relationships t1 
					JOIN e4_term_taxonomy t2 ON t1.term_taxonomy_id = t2.id AND t2.taxonomy = 'category' " . $where_category . " GROUP BY t1.object_id
				) c ON a.id = c.object_id
			WHERE a.post_type = 'post' AND a.post_status = 'active' " . $where . "
			order by a.id desc ";
			$database->setQuery($query);
			$news = $database->loadObjectList();
		}
		$query = "SELECT a.id, a.fullname, a.status_public 
		FROM e4_users a 
		WHERE a.status_public != '' AND a.publish = 1 
		ORDER BY a.status_public, a.fullname";
		$database->setQuery($query);
		$authors = $database->loadObjectList();

		View::news_list($news, $authors);
	}

	public static function book_list()
	{
		global $database;
		global $ariacms;
		global $taxonomies;
		$submit = $ariacms->getParaUrl('btnSubmit');
		if ($submit == 'search') {
			$keysearch = trim(strtolower(urldecode($ariacms->getParaUrl('keysearch'))));
			$meta_year_public = $ariacms->getParaUrl('meta_year_public');
			$book_category = $ariacms->getParaUrl('book_category');
			$author = $ariacms->getParaUrl('author');

			$where = '';
			$where .= ($keysearch != '') ? " AND (LOWER(a.title_vi) LIKE '%$keysearch%' OR LOWER(a.title_en) LIKE '%$keysearch%') " : '';
			$where .= ($author != '') ? " AND a.user_created = " . $author : "";

			if ($book_category > 0) {
				foreach ($taxonomies as $taxonomy) {
					if ($taxonomy->parent == $book_category && $taxonomy->taxonomy == 'book_category') {
						$book_category .= ',' . $taxonomy->id;
					}
				}
				$where_category = ' AND t1.term_taxonomy_id IN ( ' . $book_category . ')';
			}

			if ($meta_year_public > 0) {
				$meta_year_public_search = " JOIN e4_posts_meta d ON a.id = d.post_id AND d.meta_key = 'meta_year_public' AND d.meta_value = '" . $meta_year_public . "' ";
			}

			$query = "SELECT a.*, c.ca_title_vi, c.ca_title_en, c.ca_url_part FROM e4_posts a 
				JOIN (
					SELECT t1.object_id, t2.title_vi AS ca_title_vi, t2.title_en AS ca_title_en, t2.url_part as ca_url_part
					FROM e4_term_relationships t1 
					JOIN e4_term_taxonomy t2 ON t1.term_taxonomy_id = t2.id AND t2.taxonomy = 'book_category' " . $where_category . " GROUP BY t1.object_id
				) c ON a.id = c.object_id
				" . $meta_year_public_search . "
			WHERE a.post_type = 'book' AND a.post_status = 'active' " . $where . "
			order by a.id desc ";
			$database->setQuery($query);
			$news = $database->loadObjectList();
		}

		$query = "SELECT a.id, a.fullname, a.status_public 
		FROM e4_users a 
		WHERE a.status_public != '' AND a.publish = 1 
		ORDER BY a.status_public, a.fullname";
		$database->setQuery($query);
		$authors = $database->loadObjectList();

		View::book_list($news, $authors);
	}

	public static function event_list()
	{
		global $database;
		global $ariacms;
		global $taxonomies;
		$submit = $ariacms->getParaUrl('btnSubmit');
		if ($submit == 'search') {
			$keysearch = trim(strtolower(urldecode($ariacms->getParaUrl('keysearch'))));
			$date_from = trim(strtolower(urldecode($ariacms->getParaUrl('date_from'))));
			$date_to = trim(strtolower(urldecode($ariacms->getParaUrl('date_to'))));
			$address = trim(strtolower(urldecode($ariacms->getParaUrl('address'))));

			$where = '';
			$where .= ($keysearch != '') ? " AND (LOWER(a.title_vi) LIKE '%$keysearch%' OR LOWER(a.title_en) LIKE '%$keysearch%') " : '';
			$where .= ($address != '') ? " AND a.public_place = '" . $address . "'" : "";
			$where .= ($date_from > 0) ? " AND a.public_date >= " . $ariacms->dateToUnix($date_from) : "";
			$where .= ($date_to > 0) ? " AND a.public_date <= " . $ariacms->dateToUnix($date_to) : "";

			$query = "SELECT a.* FROM e4_posts a 
			WHERE a.post_type = 'event' AND a.post_status = 'active' " . $where . "
			order by a.public_date desc, a.id desc ";
			$database->setQuery($query);
			$news = $database->loadObjectList();
		}
		$query = "SELECT a.public_place FROM e4_posts a WHERE a.post_type = 'event' AND a.post_status = 'active' 
		AND a.public_place != ''
		GROUP BY a.public_place ORDER BY a.public_place";
		$database->setQuery($query);
		$addresses = $database->loadObjectList();

		View::event_list($news, $addresses);
	}

	public static function author_list()
	{
		global $database;
		$query = "SELECT a.*, b.meta_value as meta_brief FROM e4_users a 
		LEFT JOIN e4_users_meta b ON a.id = b.user_id AND b.meta_key = 'meta_brief'
		WHERE a.publish = 1 AND (a.status_public = 'danhnhan' OR a.status_public = 'chuyengia')
		GROUP BY a.id ";
		$database->setQuery($query);
		$rows = $database->loadObjectList();
		View::author_list($rows);
	}
}
