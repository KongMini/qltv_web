<?php
global $ariacms;
/** Update case with search */
switch ($ariacms->getParam("task")) {

	case 'tin-tuc':
			Model::news_list();
		break;

	case 'books':
			Model::book_list();
		break;

	case 'events':
		Model::event_list();
		break;

	case 'author':
			Model::author_list();
		break;

	default:
		Model::news_list();
		break;
}
