<?php

function _indexController() {
    load_view("index");
}

function _studentController() {
    $data = [
        "students" => [
            [
                "id" => 1,
                "name"  => 'Aung Aung',
                "address" => 'Hledan'
            ],
            [
                "id" => 1,
                "name"  => 'Bung Bung',
                "address" => 'Hledan'
            ],
            [
                "id" => 1,
                "name"  => 'Cung Cung',
                "address" => 'Hledan'
            ]
        ]
    ];
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
        