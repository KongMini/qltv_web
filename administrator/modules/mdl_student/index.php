<?php
View::studentManagerFront();
global $ariacms;
switch ($ariacms->getParam("task")) {
	case "student_add":
		Model::student_add();
		break;
	case "student_edit":
		Model::student_edit();
		break;
	case "student_delete":
		Model::student_delete();
		break;
	case "student_publish":
		Model::student_publish();
		break;
	case "student_unpublish":
		Model::student_unpublish();
		break;
	default:
		Model::student_view();
		break;
}
