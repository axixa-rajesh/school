<?php
define('ROOT', "http://localhost/batch5pm_24/school/");
include_once "helper/redirect.php";
include_once "helper/DB.php";
include_once "helper/Session.php";
Session::init();
include_once "helper/checklogin.php";

include_once "header.php";

$module = "fees";
$do = "index";
$tableid ="";
if (isset($_GET['url']) && $_GET['url']) {
    $url = explode('/', rtrim($_GET['url'], '/'));
    $module = $url[0];
    $do = $url[1] ?? 'index';
    $tableid = $url[2] ?? '';
}

$path = "modules/$module/$do.php";
if (file_exists($path)) {
    include $path;
}else{
   redirect("404.php");
}
include_once "footer.php";
