<?php
    ($IslemYap = function(){
        echo "Berk";
    })();

    echo ($IslemYap2 = function(){
        return "Berfin";
    })();


    //Otomatiklerde parametre tanimlama
    ($IslemYap3 = function($Isim, $Soyisim){
        echo $Isim . " " . $Soyisim;
    })("Berk", "B");
?>