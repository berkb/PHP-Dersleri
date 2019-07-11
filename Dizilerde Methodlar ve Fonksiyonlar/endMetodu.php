<?php
    /**
     * end() : Dizi gostericisinin son konumundaki elemani bulur.
     */

    $Isimler = array("Berk","Berfin","Yetkin");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $DizininGostericisi = end($Isimler);

    echo "Dizi gostericisinin son konumundaki elemanin degeri " . $DizininGostericisi;
?>