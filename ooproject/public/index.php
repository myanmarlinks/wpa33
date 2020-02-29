<?php

define("DD", realpath("../"));

require DD . "/vendor/autoload.php";

use App\Controllers\HomeController;

$home = new HomeController();

$home->index();
dd("Hello World", true);