<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$page = $_GET["p"];
switch ($page) {
    case "contact":
      include "contact.php";
      break;
    case "artikel":
      include "artikel.php";
      break;
    case "galery":
      include "gallery.php";
      break;
    case "corporate":
        include "corporate.php";
        break;
    case "service":
        include "service.php";
      break;
    default:
        include('default.php');
        break;

}
?>
