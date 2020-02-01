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
        trigger_error("View file ကို app/view folder ထဲ ထည့်ရမယ်ဆိုတာ မသိဘူးလား၊ သောက်ရူး", E_USER_ERROR);
    }
}