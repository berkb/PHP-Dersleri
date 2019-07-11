<?php
    /*
        array_unshift(): Dizinin en basina en yeni eleman veya elemanlar eklemek icin kullanilir.
                         Ayni zamanda eklenecek olan eleman veya elemanlarin dizite dahil edilmesi ile,
                         dizi iceriginin toplam eleman sayisi degerini geriye dondurur.
        array_push():    Dizinin en sonuna yeni eleman veya elemanlar eklemek icin kullanilir.
                         Ayni zamanda eklenecek olan ekeman veya elemanlarin diziye dahil edilmesi ile,
                         dizi iceriginin toplam eleman sayisi degerini geriye dondurur.
    */

    $Isimler = array("Bir"=>"Berk","Iki"=>"Berfin",array("Belcioglu"));

    echo "<pre>";
    print_r($Isimler);
    echo "<pre>";

    array_unshift($Isimler,"Yetkin");

    echo "<pre>";
    print_r($Isimler);
    echo "<pre>";

    array_push($Isimler,"Ramazan");

    echo "<pre>";
    print_r($Isimler);
    echo "<pre>";

    array_unshift($Isimler[1],"B");

    echo "<pre>";
    print_r($Isimler);
    echo "<pre>";

    
    $Isim = count($Isimler, COUNT_RECURSIVE);
    echo "Tum arraydeki veri sayisi: " . $Isim;
    echo "<br>";

    $Isim2 = count($Isimler[1], COUNT_RECURSIVE);
    echo "Alt arraydaki veri sayisi: " . $Isim2;
    echo "<br>";
?>