<?php

function dd($value, $die = false) {
    var_dump($value);
    if($die == true) {
        die();
    }
}