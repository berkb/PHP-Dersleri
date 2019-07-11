<?php
    class Berk{
        //Icinde tanimlanan her fonksiyon bir metoddur aslinda

        function Ornek1(){
            echo __METHOD__;
        }

        function Ornek2(){
            echo __METHOD__;
        }
    }

    $Deneme1 = new Berk; //Nesne haline getirdim
    $Deneme1->Ornek1();
    echo "<br>";
    $Deneme1->Ornek2();
?>