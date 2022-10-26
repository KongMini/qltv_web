<?php
View::showBookNXBManager();
global $ariacms;
switch ($ariacms->getParam("task")) {
	case "book_nxb_add":
		Model::book_nxb_add();
		break;
	case "book_nxb_edit":
		Model::book_nxb_edit();
		break;
	case "book_nxb_delete":
		Model::book_nxb_delete();
		break;
	default:
		Model::book_nxb_view();
		break;
}
