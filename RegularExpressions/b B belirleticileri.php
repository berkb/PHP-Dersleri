<?php
/**
 * \b : Duzenli ifade dahilinde kontrol edilecek olan icerigin duzenli ifadeye uygun olabilecek metin parcalarini, karakter dizilimi icerisindeki kelimelerin basinda yada sonunda aramak icin kullanilir.
 * \B : Duzenli ifade dahilinde kontrol edilecek olan icerigin duzenli ifadeye uygun olabilecek metin parcalarini, karakter dizilimi icerisindeki kelimelerin icerisinde aramak icin kullanilir.
 */
$Icerik = "Berk, Berfin, Yetkin, Ramazan, Belcioglu";
$Desen = "/\ber/";
$Sonuc = preg_match($Desen, $Icerik);
echo "Sonuc1 : ". $Sonuc;

echo "<br>";

$Desen2 = "/\bBe/";
$Sonuc2 = preg_match($Desen2, $Icerik);
echo "Sonuc2 : ". $Sonuc2;

echo "<br>";

$Desen3 = "/\Ber/";
$Sonuc3 = preg_match($Desen3, $Icerik);
echo "Sonuc3 : ". $Sonuc3;

echo "<br>";

$Desen4 = "/in\b/";
$Sonuc4 = preg_match($Desen4, $Icerik);
echo "Sonuc4 : ". $Sonuc4;
?>