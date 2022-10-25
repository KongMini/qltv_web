<?php
class View
{

    public static function news_list($news, $noibat)
    {
        include "html.news_list.php";
    }
    public static function news_taxonomy($news, $category, $noibat, $task)
    {
        include "html.news_taxonomy.php";
    }

    public static function product_list($products, $total, $keysearch) {
        include "html.product_list.php";
    }
    public static function product_taxonomy($products, $category, $task, $total){
        include "html.product_taxonomy.php";
    }
    public static function albums_list($albums) {
        include "html.albums_list.php";
    }

}
