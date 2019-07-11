<?php
    $GelenIsim = $_GET["Isim"];
    $GelenSoyisim = $_GET["Soyisim"];
    $GelenTelefon = $_GET["Telefon"];
    $GelenMail = $_GET["Mail"];

    echo $GelenIsim . "<br>";
    echo $GelenSoyisim . "<br>";
    echo $GelenTelefon . "<br>";
    echo $GelenMail . "<br>";

    $GelenTumDegerler = $_GET;

    echo "<pre>";
    print_r($GelenTumDegerler);
    echo "</pre>";

    foreach($GelenTumDegerler as $Anahtar => $Icerik){
        echo $Anahtar . ": " . $Icerik . "<br>";
    }
?>