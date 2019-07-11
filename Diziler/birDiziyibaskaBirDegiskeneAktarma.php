<?php

    $Isimler = array("1"=>"Berk","2"=>"Berfin","3"=>"Yetkin");

    echo "<pre>";
    print_r($Isimler);
    echo "<pre><br>";

    $Degerler = $Isimler;
    $Degerler["CSS"] = "Ramazan";

    echo "<pre>";
    print_r($Degerler);
    echo "<pre><br>";

?>