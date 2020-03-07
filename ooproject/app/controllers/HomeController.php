<?php

namespace App\Controllers;

use Wpa33\Application\Application;

class HomeController {
    public function index() {
        $calculator = Application::get("calculator");
        echo $calculator->sum(45, 56);
        $test = Application::get("test");
        $test->sayHello();
        $data = [
            "students" => \DB::table("students")->get()
        ];
        \View::make("home", $data);
    }
}