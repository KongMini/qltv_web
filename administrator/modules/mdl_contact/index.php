<?php
View::contactManager();
global $ariacms;
switch ($ariacms->getParam("task")) {
	case "contact_edit":
		Model::contact_edit();
		break;
	case "contact_delete":
		Model::contact_delete();
		break;
	case "contact_newsletter":
		Model::contact_newsletter();
		break;
	case "contact_event":
		Model::contact_event();
		break;
	default:
		Model::contact_view();
		break;
}
