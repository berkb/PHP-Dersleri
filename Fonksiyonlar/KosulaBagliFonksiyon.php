<?php
    $Deger = "Berk";

    if($Deger=="Berk"){
        function Yaz(){
            echo "Merhaba Berk!";
        }
    }
    elseif($Deger=="Yetkin"){
        function Yaz(){
            echo "Merhaba Yetkin";
        }
    }
    else{
        function Yaz(){
            echo "Sen kimsin ya?";
        }
    }

    Yaz();

    echo "<br>";

    $Deger2= "Berfin";

    switch($Deger){
        case $Deger == "Berfin";
            function Yaz2(){
                echo "Merhaba Berfin";
            }
        break;
        default:
            function Yaz2(){
                echo "Sen kimsin yahu?";
            }
    }
    Yaz2();

?>