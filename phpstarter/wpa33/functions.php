<?php

function load_view(string $page) {
    $file = DD . "/app/view/" . $page . ".php";
    if(file_exists($file)) {
        include($file);
    } else {
        trigger_error("View file ကို app/view folder ထဲ ထည့်ရမယ်ဆိုတာ မသိဘူးလား၊ သောက်ရူး", E_USER_ERROR);
    }
}