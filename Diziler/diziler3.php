<?php

    //print_r() : bir diziyi yazdirmaya yarar

    $Isimler = array("Adim"=>"Berk","Kardesim"=>"Berfin","Annem"=>"Yetkin");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre><br>";

    echo $Isimler["Adim"] . "<br>";
    echo $Isimler["Kardesim"] . "<br>";
    echo $Isimler["Annem"] . "<br>";

?>