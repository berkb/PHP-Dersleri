<?php
    //yield: Fonksiyonlardan deger dondurmek icin kullanilir.
    function Islem($Baslangic, $Bitis){
        while($Baslangic<=$Bitis){
            yield $Baslangic;
            $Baslangic++;
        }

        echo "<br>Bu ifade yazilacak mi?";
    }

    $Sonuc = Islem(1, 1000);

    foreach($Sonuc as $Deger){
        echo $Deger . " ";
    }

    echo "<br>";

    $BellekTuketimi = memory_get_usage();
    echo "Islem sirasinda tuketilen bellek miktari: " .$BellekTuketimi . " Byte";
?>