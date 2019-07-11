<?php
/**
 * x : Duzenli ifade dahilinde kontrol edilecek olan icerigin, desende bulunan boslugu etkisiz hale getirerek kontrol edilmesini saglar.
 */

    $Metin = "Merhaba benim adim Berk Belcioglu, ben bir PHP yazilimcisiyim. Beni Facebook uzerinden Berk Belcioglu seklinde arayabilirsiniz.";
    $Desen = "/P H P/x";
    preg_match($Desen, $Metin, $Sonuc);

    echo "<pre>";
    print_r($Sonuc);
    echo "</pre>";
    
?>