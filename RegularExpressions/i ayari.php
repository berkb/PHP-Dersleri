<?php
/**
 * i : (IgnoreCase) Duzenli ifade dahilinde kontrol edilecek olan icerigin buyuk kucuk harf ayrimi olmaksizin kontrol edilmesini saglar. 
 */

$Deger = "Merhaba benim adim Berk Belcioglu, ben bir PHP yazilimcisiyim. Beni Facebook uzerinden Berk Belcioglu seklinde arayabilirsiniz.";
$Desen = "/berk/i";
$Islem = preg_match_all($Desen, $Deger, $Sonuc);

echo $Deger;

echo "<pre>";
print_r($Islem);
echo "</pre>";

echo "<pre>";
print_r($Sonuc);
echo "</pre>";


$Degistir = "Berfin";
$Islem2 = preg_replace($Desen, $Degistir, $Deger);

echo "<pre>";
print_r($Islem2);
echo "</pre>";

?>