<?php

/*
    array_shift(): Dizi icerisindeki ilk elemani silmek icin kullanilir.
                   Ayni zamanda dizi iceriginden sildigi elemanin degerini geriye dondurur.
    array_pop():   Dizi icerisindeki son elemani silmek icin kullanilir.
                   Ayni zamanda dizi iceriginden sildigi elemanin degerini geriye dondurur.
*/

$Isimler = array("Berk", "Berfin","Yetkin",array("Ramazan","B"),"Belcioglu");

echo "<pre>";
print_r($Isimler);
echo "</pre>";

array_shift($Isimler);

echo "<pre>";
print_r($Isimler);
echo "</pre>";

array_pop($Isimler);

echo "<pre>";
print_r($Isimler);
echo "</pre>";

$SilBir = array_shift($Isimler);

echo "<pre>";
print_r($Isimler);
echo "</pre>";

echo "Silinen elemanin degeri: " . $SilBir;

$SilIki = array_shift($Isimler[1]);

echo "<pre>";
print_r($Isimler);
echo "</pre>";

?>