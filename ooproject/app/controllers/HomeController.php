<?php

namespace App\Controllers;

class HomeController {
    public function index() {
        \View::make("home");
    }
}