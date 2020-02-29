<?php

class View {
    public static function make($file, $data = null) {
        $file = DD . "/app/views/" . $file . ".php";

    if(file_exists($file)) {
        ob_start();
        if($data != null) {
            extract($data);

        }
        require $file;
        ob_end_flush();
    } else {
        trigger_error("View Not Found", E_USER_ERROR);
    }
    }
}