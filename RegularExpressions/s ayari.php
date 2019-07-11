<?php
/**
 * s ayari: Duzenli ifade dahilinde kontrol edilecek olan icerigin birden fazla satiri varsa tum satirlarin kontrol edilmesini saglar.
 */

$Icerik = "Merhaba benim adim Berk Belcioglu, 
ben bir PHP yazilimcisiyim. 
Beni Facebook uzerinden Berk Belcioglu seklinde arayabilirsiniz.";

$Desen = "/.*/";

preg_match_all($Desen, $Icerik, $Sonuc);

echo $Icerik;

echo "<pre>";
print_r($Sonuc);
echo "</pre>";


$Desen2 = "/.*/s";

preg_match_all($Desen2, $Icerik, $Sonuc2);

echo "<pre>";
print_r($Sonuc2);
echo "</pre>";
?>