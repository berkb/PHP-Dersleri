<?php

/**
 * ?= : Duzenli ifade dahilinde kontrol edilecek olan icerigin karakter dizilimi icerisindeki belirtilen bir referans degerin onunde duzenli ifade ile eslesebilcek deger veya degerleri aramak icin kullanilir. 
 * ?! : Duzenli ifade dahilinde kontrol edilecek olan icerigin karakter dizilimi icerisindeki belirtilen bir referans deger ile takip edilmeyen duzenli ifade ile eslesebilecek deger veya degerleri aramak icin kullanilir.
 */

 $Icerik = "PHP dunya uzerinde en yaygin olarak kullanilan bir web pogramlama dilidir ve php'yi ogrenmesi cok kolaydir.";
 $Desen = "/PHP(?='yi)/i";
 preg_match($Desen, $Icerik, $Sonuc);

 echo "<pre>";
 print_r($Sonuc);
 echo "</pre>";

 //Unlem tersi anlamini tasir
 $Desen2 = "/PHP(?!'yi)/i";
 preg_match($Desen2, $Icerik, $Sonuc2);

 echo "<pre>";
 print_r($Sonuc2);
 echo "</pre>";
?>