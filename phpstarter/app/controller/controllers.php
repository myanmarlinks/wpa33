<?php

function _indexController() {
    load_view("index");
}

function _blogController() {
    $data = [
        'title' => 'Myanmar Links',
        "another" => 'Hello World!'
    ];
   
    load_view("blog", $data);
}
