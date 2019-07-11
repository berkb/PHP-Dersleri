<?php
/* count() : Dizi icerisindeki eleman sayisini bulmak icin kullanilir.
   sizeof(): Dizi icerisindeki eleman sayisini bulmak icin kullanilir.
   COUNT_RECURSIVE : Cok boyutlu dizilerde, tum boyutlar icerisindeki
                     elemanlarda sayma islemine dahil edilir.
*/

    $Isimler = array("Berk", "B","Berfin", "Yetkin", array("Ramazan", "Belcioglu"));
    echo "<pre>";
    print_r($Isimler);
    echo "<pre>";

    echo "<br>";

    $DizininElemanSayisi = count($Isimler);

    echo "Dizi icerisindeki count ile eleman sayisi " . $DizininElemanSayisi;
    echo "<br>";

    $DizininElemanSayisi2 = sizeof($Isimler);

    echo "Dizi icerisindeki sizeof ile eleman sayisi " . $DizininElemanSayisi2;
    echo "<br>";

    $DizininElemanSayisi3 = count($Isimler, COUNT_RECURSIVE);

    echo "Dizi icerisindeki COUNT_RECURSIVE ile eleman sayisi " . $DizininElemanSayisi3;
    echo "<br>";

    $DizininElemanSayisi4 = count($Isimler[4]);

    echo "Dizi icerisindeki count ile icerideki arrayin eleman sayisi " . $DizininElemanSayisi4;

?>