<?php
View::showBookAuthorManager();
global $ariacms;
switch ($ariacms->getParam("task")) {
	case "book_author_add":
		Model::book_author_add();
		break;
	case "book_author_edit":
		Model::book_author_edit();
		break;
	case "book_author_delete":
		Model::book_author_delete();
		break;
	default:
		Model::book_author_view();
		break;
}
