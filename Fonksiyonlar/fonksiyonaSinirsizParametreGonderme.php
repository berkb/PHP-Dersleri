<?php
    /**
     * func_num_args(): Fonksiyona gonderilen parametre sayisini bulmak icin kullanilir.
     * func_get_args(): Fonksiyona gonderilen parametre degerlerini alarak yeni bir dizi olusturmak icin kullanilir.
     * func_get_arg(): Fonksiyona gonderilen parametre degerlerini bir dizi olarak kabul ederek, belirtilecek olan anahtara ait elemanin degerini dondurmek icin kullanilir.
     */

     function Bilgiler(){
        $GelenParametreSayisi = func_num_args();
        echo "Fonksiyona gelen parametre sayisi: " . $GelenParametreSayisi . "<br>";

        $GelenParametreDegerleri = func_get_args();
        echo "<pre>";
        print_r($GelenParametreDegerleri);
        echo "<pre>";

        foreach($GelenParametreDegerleri as $SonucDegerleri){
            echo $SonucDegerleri . "<br>";
        }
        echo "<br>";

        $MeslekDegeri = func_get_arg(3);
        echo $MeslekDegeri;
     }

    Bilgiler("Berk","B","Izmir","Bilgisayar Muhendisi",22, "Erkek");

?>