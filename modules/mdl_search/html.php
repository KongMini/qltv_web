<?php
class View
{

  public static function news_list($news, $authors)
  {
    include "html.news_list.php";
  }

  public static function book_list($news, $authors)
  {
    include "html.book_list.php";
  }

  public static function event_list($news, $addresses)
  {
    include "html.event_list.php";
  }

  public static function author_list($rows)
  {
    include "html.author_list.php";
  }
}
