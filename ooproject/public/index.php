<?php

use Wpa33\Application\Application;

define("DD", realpath("../"));

require DD . "/vendor/autoload.php";

$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER["SCRIPT_NAME"];

$e_req = explode("/", $request_uri);
$e_scr = explode("/", $script_name);
$req  = array_diff($e_req, $e_scr);
$f_req = array_values($req);

if(empty($f_req)) {
    $page = "home";
} else {
    $page = $f_req[0];
}

$calculator = new Calculator();
$test = new Test();

Application::add($calculator);
Application::add($test);

$routes = require DD . "/routes/web.php";

if(array_key_exists($page, $routes)) {
    $controller = $routes[$page];
    $e_controller = explode("@", $controller);
    $n_controller = 'App\Controllers\\' . $e_controller[0];
    call_user_func_array([new $n_controller, $e_controller[1]], []);
} else {
    echo "404 Idiot!";
}