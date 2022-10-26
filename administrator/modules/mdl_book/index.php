<?php
View::showBookManager();
global $ariacms;
switch ($ariacms->getParam("task")) {
	case "book_add":
		Model::book_add();
		break;
	case "book_edit":
		Model::book_edit();
		break;
	case "book_delete":
		Model::book_delete();
		break;
	default:
		Model::book_view();
		break;
}
