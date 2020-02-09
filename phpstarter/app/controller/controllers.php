<?php

function _indexController() {
    load_view("index");
}

function _studentController() {
    $data = [
        "student" => db_get_where_by_id("students", 1)
    ];
    var_dump($data);
    load_view("student", $data);
    
}

function _blogController($value = null) {

    if($value == "foo") {
        $data = [
            'title' => 'Myanmar Links',
            "another" => 'Foo'
        ];
    } else {
        $data = [
            'title' => config_get("app.app_name"),
            "another" => config_get("database.dbname")
        ];
    }
    
    
    load_view("blog", $data);
}
