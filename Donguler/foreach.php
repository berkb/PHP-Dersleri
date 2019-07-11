<?php
//foreach: Diziler icin dongu islemini baslatir.

    $renkler = array("Renk1"=>"Mavi","Renk2"=>"Sari","Renk3"=>"Kirmizi","Renk4"=>"Yesil","Mor");

    foreach($renkler as $Deger){
        echo $Deger . "<br>";
    }

    foreach($renkler as $AnahtarDegeri=> $Deger){
        echo $AnahtarDegeri . "=>" . $Deger . "<br>";
    }
    echo "<br>";

    //Cok boyutlu foreach

    $Isimler = array("Berk","Berfin",array("Yetkin","Perihan","Leyla"),"Ramazan",array("Cuma","Serhat"));


    foreach($Isimler as $Icerik){
        if(is_array($Icerik)){
            echo "**Burada ic ice array var.**";
            echo "<br>";
            
            foreach($Icerik as $Deger){
                echo $Deger . "<br>";
            }
            echo "**Ic ice array bitti.**";
            echo "<br>";
        }
        else{
            echo $Icerik . "<br>";
        }
    }

?>