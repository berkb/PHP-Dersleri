<?php
    //return: Fonksiyondan deger dondurmek icin kullanilir

    function Islem(){
        $NameSurname = "Berk B";

        return $NameSurname;
    }

    $Sonuc = Islem();
    echo $Sonuc . "<br>";

    if($Sonuc=="Berk B"){
        echo $Sonuc . " bir bilgisayar muhendisidir.";
    }
    else{
        echo "Kisi taninmiyor.";
    }
?>