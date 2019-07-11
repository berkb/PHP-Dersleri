<?php
    $GelenDosya = $_FILES["Dosya"];

    $DosyaninAdi = $_FILES["Dosya"]["name"];
    $DosyaninType = $_FILES["Dosya"]["type"];
    $DosyaninError = $_FILES["Dosya"]["error"];

    $DosyaninYolu = "C:\Users\BERK\Desktop";

    $Yol = $DosyaninYolu.$DosyaninAdi;

    echo "<pre>";
    print_r($GelenDosya);
    echo "</pre>";
    
    echo "<img src='{$Yol}'>";

?>