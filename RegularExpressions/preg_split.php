<?php
    /**
     * preg_split(): Kendisine parametre olarak verilen duzenli ifadeli deger dogrultusunda icerigi kontrol eder ve eslesmeyi saglayan deger ve degerlerden icerigi bolumleyerek yeni bir dizi
     *               olusturuarak, olusturdugu dizi degerini geriye dondurur.
     */

    $Icerik = "Merhaba benim adim Berk Belcioglu, ben bir PHP yazilimcisiyim. Beni Facebook uzerinden Berk Belcioglu seklinde arayabilirsiniz.";
    $Desen = "/ /";
    $Sonuc = preg_split($Desen, $Icerik);

    echo "<pre>";
    print_r($Sonuc);
    echo "</pre>";

    $Desen2 = "//";
    $Sonuc2 = preg_split($Desen2, $Icerik);

    echo "<pre>";
    print_r($Sonuc2);
    echo "</pre>";

    $Desen3 = "/Berk/";
    $Sonuc3 = preg_split($Desen3, $Icerik);

    echo "<pre>";
    print_r($Sonuc3);
    echo "</pre>";

?>