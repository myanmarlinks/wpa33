<?php

function _indexController() {
    load_view("index");
}

function _blogController($value = null) {
    if($value == "foo") {
        $data = [
            'title' => 'Myanmar Links',
            "another" => 'Foo'
        ];
    } else {
        $data = [
            'title' => 'Myanmar Links',
            "another" => 'Bar'
        ];
    }
    
   
    load_view("blog", $data);
}
