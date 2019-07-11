<?php

    trait OzellikBir{
        function YazBir(){
            echo __TRAIT__;
        }
    }

    trait OzellikIki{
        function YazIki(){
            echo __TRAIT__;
        }
    }

    class Berk{
        use OzellikBir;
        use OzellikIki;
    }

    $Islem = new Berk;
    $Islem->YazBir();
    echo "<br>";
    $Islem->YazIki();
?>