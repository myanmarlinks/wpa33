<?php

namespace App\Controllers;

class HomeController {
    public function index() {
        $students = \DB::table("students")->get();
        dd($students, true);
        \View::make("home", $data);
    }
}