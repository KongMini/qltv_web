<?php
View::cartManager();
global $ariacms;

if($_SESSION['user']['permission'] == 10){
    Model::cart_edit();
}else{
    switch ($ariacms->getParam("task")) {
        case "cart_add":
            Model::cart_add();
            break;
        case "cart_edit":
            Model::cart_edit();
            break;
        case "cart_mail":
            Model::cart_mail();
            break;
        case "cart_delete":
            Model::cart_delete();
            break;
        default:
            Model::cart_view();
            break;
    }
}


