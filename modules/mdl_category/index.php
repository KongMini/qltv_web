<?php
global $ariacms;
/** Update case with module */
switch ($ariacms->getParam("module")) {

	case 'tin-tuc':
		if ($ariacms->getParam("task") != '')
			Model::news_taxonomy();
		else
			Model::news_list();
		break;

	case 'san-pham':
		if ($ariacms->getParam("task") != '')
			Model::product_taxonomy();
		else
			Model::product_list();
		break;
    case 'albums':
		if ($ariacms->getParam("task") != '')
			Model::albums_taxonomy();
		else
			Model::albums_list();
		break;

	default:
		Model::news_list();
		break;
}
