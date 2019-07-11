<?php
    /**
     * preg_match(): Kendisine parametre olarak verilen duzenli ifadeli deger dogrultusunda icerigi kontrol eder ve aranan degerin eslenmesi durumunda, 
     *               eslesmeyi saglayan icerigin degerinden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
     * preg_match_all(): Kendisine parametre olarak verilen duzenli ifadeli deger dogrultusunda icerigi gelismis olarak kontrol eder ve aranan degerin eslenmesi durumunda, 
     *               eslesmeyi saglayan icerigin degerinden veya degerlerinden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
     */

    $Metin = "Merhaba benim adim Berk Belcioglu, Ben bir PHP yazilimcisiyim. Beni Facebook uzerinden Berk Belcioglu yazarak arayabilirsiniz.";
    $Desen = "/Berk/";
    $Desen2 = "/\w/";

    preg_match_all($Desen, $Metin, $Sonuc);

    echo "<pre>";
    print_r($Sonuc);
    echo "</pre>";

    preg_match($Desen, $Metin, $Sonuc2);

    echo "<pre>";
    print_r($Sonuc2);
    echo "</pre>";

    if($Sonuc2){
        echo "Aranan Eslesme Icerik Dahilinde Var.";
    }
    else{
        echo "Aranan Eslesme Icerik Dahilinde Yok.";
    }

    preg_match_all($Desen2,$Metin,$Sonuc3);

    echo "<pre>";
    print_r($Sonuc3);
    echo "</pre>";

?>