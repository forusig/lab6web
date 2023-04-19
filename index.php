<?php
$mod = @$_REQUEST['mod'];
switch ($mod) {
  case "":
    require("module/home.php");
    break;
  case "home":
    require("module/home.php");
    break;
  case "tambah":
    require("module/artikel/tambah.php");
    break;
  case "ubah":
    require("module/artikel/ubah.php");
    break;
  case "about":
    require("template/about.php");
    break;
default:
require("module/home.php");
}
?>