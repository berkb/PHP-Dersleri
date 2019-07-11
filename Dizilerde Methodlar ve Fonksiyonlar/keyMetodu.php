<?php
    /**
     * key() : Dizinin gostericisi konumundaki elemanin
     *         anahtarini bulmak icin kullanilir.
     */

    $Isimler = array("A1"=>"Berk", "A2"=>array("B1"=>"Berfin","B2"=>"Yetkin"),"A3"=>"Ramazan");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre><br>";

    $Sonuc1 = key($Isimler);
    echo "Dizinin gostericisi konumundaki elemanin anahtar deger: " . $Sonuc1;

    echo "<br>";
    
    $Sonuc2 = key($Isimler["A2"]);
    echo "Dizinin ikinci gostericisi konumundaki elemanin anahtar deger: " . $Sonuc2;
?>