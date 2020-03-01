<?php

namespace App\Controllers;

class PageController {
    public function index() {
        \View::make("page");
    }
}