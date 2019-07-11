<?php
/**
 * ^ : Duzenli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminin baslangici ile duzenli ifade arasinda eslesme aramak icin kullanilir.
 */

 $Icerik = "A'dan Z'ye PHP7 Gorsel Egtim Seti";
 $Desen = "/^PHP7/";
 $Sonuc = preg_match($Desen, $Icerik);

 echo $Icerik . "<br>";
 echo $Desen . "<br>";
 echo $Sonuc . "<br>";
 echo "Sonuc 0 ise aranan desen icerigin basinda degildir."
?>