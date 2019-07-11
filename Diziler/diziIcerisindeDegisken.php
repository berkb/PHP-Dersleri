<?php

    $Isim = "Berk";
    $Soyisim = "B";

    define("ESYA", "Masa");
    define("ARAC", "Vapur");

    const RENK = "Mavi";
    const YAZILIMDILI = "PHP";
    
    $Degerler = array($Isim, $Soyisim, ESYA, ARAC,"Renk"=> RENK, YAZILIMDILI,"Aktivite"=> "Sinema");

    echo "<pre>";
    print_r($Degerler);
    echo "</pre>";

?>