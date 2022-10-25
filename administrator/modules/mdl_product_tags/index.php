<?php
View::showProductTagsManager();
global $ariacms;
switch ($ariacms->getParam("task")) {
	case "product_tags_add":
		Model::product_tags_add();
		break;
	case "product_tags_edit":
		Model::product_tags_edit();
		break;
	case "product_tags_delete":
		Model::product_tags_delete();
		break;
	default:
		Model::product_tags_view();
		break;
}
