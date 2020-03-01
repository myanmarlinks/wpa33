<?php

class Config {
    public static function get(string $command) {
        $e_command = explode(".", $command);
    $file = DD . "/app/config/" . $e_command[0] . ".php";
    if(file_exists($file)) {
        $value = require $file;
        if(array_key_exists($e_command[1], $value)) {
            return $value[$e_command[1]];
        } else {
            trigger_error("Array key not found in config file", E_USER_ERROR);
        }

    } else {
        trigger_error("Config file not found", E_USER_ERROR);
    }

    }
}