<?php
class View
{

    public static function detail_product($detail, $product_relateds, $images, $parent, $products)
    {
        include "html.detail_product.php";
    }
    public static function detail_news($detail, $news, $parent)
    {
        include "html.detail_news.php";
    }

    public static function detail_album($detail, $relateds, $images)
    {
        include "html.detail_album.php";
    }
}
