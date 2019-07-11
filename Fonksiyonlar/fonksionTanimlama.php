<?php
/**
 * Fonksiyon: Herhangi bir programlamada belirli bir veya daha fazla isi gerceklestirmek ucere onceden hazirlanan kucuk program parcaciklarina verilen isimdir.
 */

    function Yazi(){
        $Deger = "Berk B";
        echo $Deger;
    }
    Yazi();

    echo "<br>";

    $Isim = "Berfin";

    function Yazi2(){
        global $Isim;
        echo $Isim;
    }
    Yazi2();
?>