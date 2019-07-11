<?php
    //Array icindeki fonksiyonlar

    $Islem = array(
        "Berk",
        "Berfin",
        function(){
            echo "Belcioglu";
        },
        "Yetkin"
    );

    echo $Islem[0] . "<br>";
    echo $Islem[1] . "<br>";
    $Islem[2]();
    echo "<br>";
    echo $Islem[3] . "<br>";
    
?>