<?php
    function Islem(){
        $Isim = "Berk";
        $Soyisim = "B";
        $Sehir = "Izmir";

        return array($Isim, $Soyisim, $Sehir);
    }

    $Sonuc = Islem();

    echo "<pre>";
    print_r($Sonuc);
    echo "<pre><br>";
    
?>