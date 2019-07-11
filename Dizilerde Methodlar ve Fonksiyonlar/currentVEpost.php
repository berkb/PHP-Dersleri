<?php
    /**
     * current(): Dizinin gostericisi konumundaki elemani bulmak icin kullnilir.
     * pos()    : Dizinin gostericisi konumundaki elemani bulmak icin kullnilir.
     */

     $Isimler = array("Berk","Berfin","Berfin");

     echo "<pre>";
     print_r($Isimler);
     echo "</pre>";

     $DizininGostericisi = current($Isimler);

     echo "Dizinin gostericisi konumundaki elemanin degeri " . $DizininGostericisi;
?>