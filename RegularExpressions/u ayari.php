<?php
/**
 * u : (Unicode) Duzenli ifade dogrultusunda kontrol edilecek olan icerigin, unicode evresel kod tanimlamasi ile kontrol edilmesini saglar.
 */

    $Deger = "Merhaba benim adim Berk Belcioğlu, ben bir PHP yazilimcisiyim. Beni Facebook uzerinden Berk Belcioglu seklinde arayabilirsiniz.";
    $Desen = "//u";

    $Sonuc = preg_split($Desen, $Deger);

    echo $Deger;

    echo "<pre>";
    print_r($Sonuc);
    echo "</pre>";
?>