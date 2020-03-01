<?php

namespace App\Controllers;

class HomeController {
    public function index() {
        $data = [
            "students" => \DB::table("students")->get()
        ];
        \View::make("home", $data);
    }
}