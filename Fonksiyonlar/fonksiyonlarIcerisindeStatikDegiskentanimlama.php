<?php
    function Bir(){
        $Sayi = 0;
        $Sayi = $Sayi+1;

        echo "Sayi degeri: " . $Sayi . "<br>"; 
    }

    Bir();
    Bir();
    Bir();
    Bir();
    Bir();

    echo "<br>";

    /////////////////////////////////////////////

    function Iki(){
        static $Rakam = 0;
        $Rakam = $Rakam+1;

        echo "Rakam Degeri: " . $Rakam . "<br>";
    }

    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
?>