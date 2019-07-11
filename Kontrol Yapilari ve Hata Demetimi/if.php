<?php

    $Saat = 3;

    if(($Saat>=0) and ($Saat <=6)){
        echo "Iyi geceler";
    }

    if(4<10):
        echo "Bilmem ne";
    elseif(10>20):
        echo "Bilmem o";
    else:
        echo "Bilmem";
    endif;

    /**
     * switch: Kosul baslat
     * case: Kosul kontrol et
     * break: Kosul kontrolunu sonlandir
     * default: Kosul olumsuzluklari sonucu
     */

     $Deger = 10;

     switch($Deger){
        case $Deger < 10:
            echo "1. case gecerli oldu.";
        break;
        default:
            echo "Default gecerli oldu.";
     }

    switch($Deger):
        case $Deger = 10:
            echo "1. case gecerli oldu.";
        break;
        default:
            echo "Default gecerli oldu.";
    endswitch;

    /**
     * ternary: ?: uclu operator
    */

    $Deger1 = "Berk";
    $Sonuc = ($Deger1=="Berk") ? "Dogru" : "Yanlis";
    echo $Sonuc;

    /** YADA */

    $Deger2 = "Berfin";
    echo ($Deger2=="Berk") ? "Berk" : "Berfin";
    echo "<br>";

    /**
     * Null: bos ifadeler icin gelecek tanim
     */

     /**
      * goto: Kodlama dosyasi icierisinde belirtilecek olan imlenmis/ hedeflenmis satira atlama kosulunu saglamak icin kullanilir.
      */

    //Example1
    goto Isim;

    echo "Berk";
    echo "Berfin";
    Isim:
    echo "Yetkin";
    echo "Ramazan";
    echo "<br>";
    echo "<br>";

    //Example2
    $Deger2 = 2;
    if($Deger2==1):
        goto Genel;
    elseif($Deger2==2):
        goto Yonetim;
    elseif($Deger2==3):
        goto Egitimci;
    else:
        goto Diger;
    endif;

    Genel:
    echo "Berk<br>";

    Yonetim:
    echo "Yetkin<br>";
    echo "Ramazan<br>";

    Egitimci:
    echo "Berfin<br>";

    if(($Deger2!=1) and ($Deger2!=2) and ($Deger2!=3)):
        Diger:
        echo "Kisi yok.";
    endif;

?>