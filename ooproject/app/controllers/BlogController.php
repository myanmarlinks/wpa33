<?php

namespace App\Controllers;

class BlogController {
    public function index() {
        return View::make("blog");
    }
}