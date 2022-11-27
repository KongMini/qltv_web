<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
// Include Configuration File
if (file_exists("configuration.php")) {
  require_once("configuration.php");
} else {
  echo "Missing Configuration File";
  exit();
}

// Include Database Controller
if (file_exists("include/database.php")) {
  require_once("include/database.php");
} else {
  echo "Missing Database File";
  exit();
}
// Include System File
if (file_exists("include/ariacms.php")) {
  require_once("include/ariacms.php");
} else {
  echo "Missing System File";
  exit();
}
// Include Counter File
if (file_exists("include/counter.php")) {
  require_once("include/counter.php");
} else {
  echo "Missing Counter File";
  exit();
}

if (file_exists("plugins/phpmailer/class.phpmailer.php")) {
  require_once("plugins/phpmailer/class.phpmailer.php");
} else {
  echo "Missing Mailer File";
  exit();
}
if($_SESSION["user"]['permission'] == 10){
    header("location: http://$_SERVER[HTTP_HOST]/administrator/index.php?module=profile");
}else{
    header("location: http://$_SERVER[HTTP_HOST]/administrator/");
}
die;