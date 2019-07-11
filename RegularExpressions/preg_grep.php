<?php
/**
 *  prep_greg(): Kendisine parametre olarak verilen duzenli ifadeli defer dogrultusunda dizi icerigini kontrol eder ve aranan deger yada degerlerin eslesmesi durumunda, eslesmeyi saglayan
 *               icerigin deger veya degerlerinden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
 */


 $Degerler = array("Berk","Berfin", 22, 33, 44, "Berkan", "Ahmet");
 $Desen = "/er/";
 $Sonuc = preg_grep($Desen, $Degerler);

 echo "<pre>";
 print_r($Sonuc);
 echo "<pre>";
?>