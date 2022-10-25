<?php
class Model
{
	static function detail()
	{
		unset($_SESSION['filter']);
		global $ariacms;
		global $database;
		$task = $ariacms->getParam("task");
		/** Update visited count to e4_posts */
		$query = "UPDATE e4_posts a SET a.visited_count = a.visited_count + 1 
					WHERE a.url_part = '$task'";
		$database->setQuery($query);
		$database->query();

		/** Get detail information in e4_posts table */
		$query = "SELECT GROUP_CONCAT('',d.id) taxonomy, a.*, b.fullname, b.id as user_id FROM e4_posts a 
				JOIN e4_users b ON a.user_created = b.id 
				LEFT JOIN e4_term_relationships c ON a.id = c.object_id
				LEFT JOIN e4_term_taxonomy d ON d.id = c.term_taxonomy_id
			WHERE a.url_part = '$task' AND a.post_status = 'active' 
			GROUP BY a.id ";
		$database->setQuery($query);
		$detail = $database->loadRow();
		/** Get all meta information of detail */
		$query = "SELECT * FROM e4_posts_meta WHERE post_id = " . $detail['id'];
		$database->setQuery($query);
		$metas = $database->loadObjectList();
		if ($metas) {
			foreach ($metas as $meta) {
				$detail[$meta->meta_key] = $meta->meta_value;
			}
		}
		switch ($detail['post_type']) {
			case 'post':
				// /** Get related same category with detail */
				// $query = "SELECT a.* FROM e4_posts a 
				// 		JOIN  e4_term_relationships b ON b.term_taxonomy_id IN (" . $detail['taxonomy'] . ") AND a.id = b.object_id
				// 	WHERE a.url_part != '$task' AND a.post_status = 'active' AND a.post_type = 'post'
				// 	GROUP BY a.id
				// 	ORDER BY rand() LIMIT 0,5 ";
				// $database->setQuery($query);
				// $news_relateds = $database->loadObjectList();
				/** Tin lien quan */
				$query = "SELECT a.*, b.fullname FROM e4_posts a 
				JOIN e4_users b ON a.user_created = b.id
				WHERE a.post_type = 'post' AND a.post_status = 'active' AND a.id IN (" . $detail['meta_list_related_news'] . ")
				order by a.id desc LIMIT 0,3";
				$database->setQuery($query);
				$news = $database->loadObjectList();


				$query = "SELECT a.* FROM e4_term_taxonomy a  WHERE a.id IN (" . $detail['taxonomy'] . ") AND a.status = 'active' AND a.taxonomy = 'category' ";
				$database->setQuery($query);
				$parent = $database->loadRow();

				View::detail_news($detail, $news, $parent);
				break;
			case 'product':

				$query = "SELECT a.*, b.fullname FROM e4_posts a 
				 JOIN e4_users b ON a.user_created = b.id
				 WHERE a.post_type = 'product' AND a.post_status = 'active' AND a.id IN (" . $detail['meta_list_related_product'] . ")
				 order by a.id desc ";
				$database->setQuery($query);
				$product_relateds = $database->loadObjectList();

				$query = "SELECT a.* FROM e4_term_taxonomy a  WHERE a.id IN (" . $detail['taxonomy'] . ") AND a.status = 'active' AND a.taxonomy = 'product_category' ";
				$database->setQuery($query);
				$parent = $database->loadRow();

                $query = "SELECT a.*, b.title_vi,b.title_en from e4_posts_image a
                            LEFT JOIN e4_term_taxonomy b ON a.color = b.id
                            where a.object_id={$detail['id']} order by color";
                $database->setQuery($query);
                $images = $database->loadObjectList();

                $query = "SELECT a.*FROM e4_posts a 
				 WHERE a.post_type = 'product' AND a.post_status = 'active' AND a.id != {$detail['id']}
				 order by a.id desc LIMIT 0,4";
                $database->setQuery($query);
                $products = $database->loadObjectList();

				/** Push data to view detail product */
				View::detail_product($detail, $product_relateds, $images, $parent, $products);
				break;

			case 'albums':
				/** Get recent with detail */
				$yesterday = date('d/m/Y');

				$query = "SELECT a.* FROM e4_posts a 
					WHERE a.post_type = 'albums' AND a.post_status = 'active' AND a.id != {$detail['id']}
					ORDER BY a.id desc LIMIT 0,3 ";
				$database->setQuery($query);
				$relateds = $database->loadObjectList();

                $query = "SELECT a.*, b.title_vi,b.title_en from e4_posts_image a
                            LEFT JOIN e4_term_taxonomy b ON a.color = b.id
                            where a.object_id={$detail['id']} order by color";
                $database->setQuery($query);
                $images = $database->loadObjectList();
				/** Push date to view detail news */

				View::detail_album($detail, $relateds, $images);
				break;
			default:
				$ariacms->redirect('Have no information in Database', 'javascript:history.back()');
				break;
		}
	}
}
