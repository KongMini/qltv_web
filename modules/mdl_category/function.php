<?php
class Model
{

	public static function news_list()
	{
		unset($_SESSION['filter']);
		global $database;
		$query = "SELECT a.*, b.fullname, c.ca_title_vi, c.ca_title_en, c.ca_url_part FROM e4_posts a 
				JOIN e4_users b ON a.user_created = b.id
				LEFT JOIN (
									SELECT t1.object_id, t2.title_vi AS ca_title_vi, t2.title_en AS ca_title_en, t2.url_part as ca_url_part
									FROM e4_term_relationships t1 
										JOIN e4_term_taxonomy t2 ON t1.term_taxonomy_id = t2.id AND t2.taxonomy = 'category' GROUP BY t1.object_id
									) c ON a.id = c.object_id
			WHERE a.post_type = 'post' AND a.post_status = 'active'
			order by a.id desc ";
		$database->setQuery($query);
		$news = $database->loadObjectList();

        $query = "SELECT a.*, c.url_part as url FROM e4_posts a 
                        LEFT JOIN e4_term_relationships b ON a.id = b.object_id
                        LEFT JOIN e4_term_taxonomy c ON b.term_taxonomy_id = c.id
                        WHERE a.post_status = 'active' AND c. url_part = 'tin-noi-bat'
                        ORDER BY a.id DESC;";
		$database->setQuery($query);
		$noibat = $database->loadRow();
		View::news_list($news, $noibat);
	}
	public static function news_taxonomy()
	{
		unset($_SESSION['filter']);
		global $ariacms;
		global $database;
		$task = $ariacms->getParam("task");
		/** Get category information */
		$query = "SELECT a.*, GROUP_CONCAT('',b.id) submenu  FROM e4_term_taxonomy a 
		LEFT JOIN (SELECT id, parent FROM e4_term_taxonomy) b ON a.id = b.parent OR a.id = b.id
		WHERE a.url_part = '" . $task . "' AND a.status = 'active' 
		GROUP BY a.id";
		$database->setQuery($query);
		$category = $database->loadRow();
		/** Get all product with condition filter and store in category */
		$query = "SELECT a.*, c.fullname, c.id as user_id FROM e4_posts a 
			JOIN e4_users c ON a.user_created = c.id
			JOIN (SELECT b.object_id FROM e4_term_relationships b JOIN e4_term_taxonomy c ON b.term_taxonomy_id = c.id AND c.id IN (" . $category['submenu'] . ") WHERE b.object_type = 'post') t ON a.id = t.object_id
			JOIN e4_term_relationships d ON d.object_id = a.id 
			WHERE a.post_type = 'post'
		GROUP BY a.id
		order by a.id desc ";
		$database->setQuery($query);
		$news = $database->loadObjectList();

        $query = "SELECT a.*, c.url_part as url FROM e4_posts a 
                        LEFT JOIN e4_term_relationships b ON a.id = b.object_id
                        LEFT JOIN e4_term_taxonomy c ON b.term_taxonomy_id = c.id
                        WHERE a.post_status = 'active' AND c. url_part = 'tin-noi-bat'
                        ORDER BY a.id DESC;";
        $database->setQuery($query);
        $noibat = $database->loadRow();

		View::news_taxonomy($news, $category, $noibat, $task);
	}
	static function product_list()
	{
		global $database;
		global $ariacms;
		/** Filter session product */
        $order = "";
        $sort = $ariacms->getParaUrl("sort");
        switch ($sort) {
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

        $keysearch = $_REQUEST['keysearch'];
        if($_REQUEST['keysearch']){
            $where = "AND a.title_vi LIKE '%{$keysearch}%'";
        }
		/** All product */
		$query = "SELECT a.* FROM e4_posts a 
				JOIN e4_term_relationships b ON b.object_id = a.id AND b.object_type = 'product'
					WHERE a.post_type = 'product' AND a.post_status = 'active' " . $where . "
					GROUP BY a.id $order LIMIT 0,12";
		$database->setQuery($query);
		$products = $database->loadObjectList();

        $query = "SELECT count(a.id) as sum FROM e4_posts a 
				JOIN e4_term_relationships b ON b.object_id = a.id AND b.object_type = 'product'
					WHERE a.post_type = 'product' AND a.post_status = 'active' " . $where . "
					GROUP BY a.id";
        $database->setQuery($query);
        $total = $database->loadObjectList();
        $total = count($total);

		View::product_list($products, $total, $keysearch);
	}

	static function product_taxonomy()
	{
		global $ariacms;
		global $database;
		$task = $ariacms->getParam("task"); // Get task check with category product

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
		    GROUP BY a.id LIMIT 0,12";

		$database->setQuery($query);
		$products = $database->loadObjectList();

        $query = "SELECT a.id FROM e4_posts a JOIN
			(SELECT b.object_id FROM e4_term_relationships b 
			JOIN e4_term_taxonomy c ON b.term_taxonomy_id = c.id AND c.id IN (" . $category['submenu'] . ")
			WHERE b.object_type = 'product') t ON a.id = t.object_id
			JOIN e4_term_relationships b ON b	.object_id = a.id 
		    GROUP BY a.id";
        $database->setQuery($query);
        $total = $database->loadObjectList();
        $total = count($total);

		View::product_taxonomy($products, $category, $task, $total);
	}
    static function albums_list()
    {
        global $database;
        global $ariacms;
        $query = "SELECT * FROM `e4_posts`WHERE post_type = 'albums' and post_status = 'active'";
        $database->setQuery($query);
        $albums = $database->loadObjectList();
        View::albums_list($albums);
    }
}
