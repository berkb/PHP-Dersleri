<?php

    $dirname =  dirname($_SERVER['SCRIPT_NAME']);
    $basename = basename($_SERVER['SCRIPT_NAME']);
    $request_uri = str_replace([$dirname, $basename], null, $_SERVER['REQUEST_URI']);
    echo $request_uri;
?>