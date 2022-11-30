<?php

session_start();
if (file_exists("../../../configuration.php")) {
    require_once("../../../configuration.php");
} else {
    echo "Missing Configuration File";
    exit();
}
//Include Database Controller
if (file_exists("../../../include/database.php")) {
    require_once("../../../include/database.php");
} else {
    echo "Missing Database File";
    exit();
}
//Include System File
if (file_exists("../../../include/ariacms.php")) {
    require_once("../../../include/ariacms.php");
} else {
    echo "Missing System File";
    exit();
}
$database = new database($ariaConfig_server, $ariaConfig_username, $ariaConfig_password, $ariaConfig_database);
$ariacms = new ariacms();

$value = trim($_REQUEST['value']);
$id_selectBox = trim($_REQUEST['id_selectBox']);

$table = "e4_" . $id_selectBox;

$key = "ten" . $id_selectBox;

if($id_selectBox == "danhmucsach"){
    $key = "tieude";
}

$row = new stdClass;
$row->id = NULL;
$row->$key = $value;


if ($id = $database->insertObject($table, $row, 'id')) {
    $row->id = $id;
    $row->title_vi = $value;
    $row->exist = false;
}

echo json_encode($row);
