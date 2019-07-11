<?php

    $Isimler = array("DegerBir"=> "Berk", "DegerIki"=>"Berfin");
    $Renkler = array("Bir"=>"Kirmizi","Iki"=>"Mavi","Uc"=>"Sari");

    $Sonuc = $Isimler + $Renkler;

    echo "<pre>";
    print_r($Sonuc);
    echo "</pre><br>";
?>