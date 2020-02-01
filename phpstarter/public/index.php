<?php

define("DD", realpath("../"));
require DD . "/wpa33/functions.php";
require DD . "/app/controller/controllers.php";

$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER["SCRIPT_NAME"];

$e_req = explode("/", $request_uri);
$e_scr = explode("/", $script_name);
$req  = array_diff($e_req, $e_scr);
$f_req = array_values($req);

if(empty($f_req)) {
    $page = "index";
} else {
    $page = $f_req[0];
}

$controller = "_" . $page . "Controller";

if(function_exists($controller)) {
    array_shift($f_req);
    call_user_func_array($controller, $f_req);
} else {
    echo "404!";
}