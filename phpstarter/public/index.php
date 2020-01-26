<?php

define("DD", realpath("../"));
require DD . "/wpa33/functions.php";
require DD . "/app/controller/controllers.php";

$page = isset($_GET['page'])? $_GET['page'] : "index";

$controller = "_" . $page . "Controller";

if(function_exists($controller)) {
    $controller();
} else {
    echo "404!";
}