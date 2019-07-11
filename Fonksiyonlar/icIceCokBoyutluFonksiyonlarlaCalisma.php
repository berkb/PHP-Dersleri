<?php
    //Distan ice dogru sirayla cagirmak gerekiyor

    function Bir($Isim="Bilinmeyen", $Soyisim="Bilinmeyen"){
        function Iki($Meslek="Bilinmeyen",$Yas="Bilinmeyen"){
            echo $Meslek . " " . $Yas . "<br>";
        }

        echo $Isim . " " . $Soyisim . "<br>";
    }

    Bir("Berk","B");
    Iki("Comp Eng","22");

    //////////////////////////////////////////////////////////

    function Bir2($Isim="Bilinmeyen", $Soyisim="Bilinmeyen"){
        function Iki2($Meslek="Bilinmeyen",$Yas="Bilinmeyen"){
            echo $Meslek . " " . $Yas . "<br>";
        }

        echo $Isim . " " . $Soyisim . "<br>";

        Iki2("Comp Eng","22");
    }

    Bir2("Berk","B");
?>