<?php

function _indexController() {
    load_view("indexx");
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
