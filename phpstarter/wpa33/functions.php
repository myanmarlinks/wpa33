<?php

function load_view(string $page, $data = null) {
    $file = DD . "/app/view/" . $page . ".php";

    if(file_exists($file)) {
        ob_start();
        if($data != null) {
            extract($data);

        }
        require $file;
        ob_end_flush();
    } else {
        trigger_error(lang_get("errors.view_not_found_error"), E_USER_ERROR);
    }
}

function config_get(string $command) {
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

function lang_get(string $command) {
    $e_command = explode(".", $command);
    $file = DD . "/app/lang/" 
    . config_get("app.default_lang") 
    . "/" . $e_command[0] . ".php";
    if(file_exists($file)) {
         $data = require $file;
         if(array_key_exists($e_command[1], $data)) {
            return $data[$e_command[1]];
         } else {
            trigger_error("Array key not found in language file", E_USER_ERROR);     
         }
    } else {
        trigger_error("Language File Not Found", E_USER_ERROR);
    }


}