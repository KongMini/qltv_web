<?php
View::showBookCategoryManager();
global $ariacms;
switch ($ariacms->getParam("task")) {
	case "book_category_add":
		Model::book_category_add();
		break;
	case "book_category_edit":
		Model::book_category_edit();
		break;
	case "book_category_delete":
		Model::book_category_delete();
		break;
	default:
		Model::book_category_view();
		break;
}
