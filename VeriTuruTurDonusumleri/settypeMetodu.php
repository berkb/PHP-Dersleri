<?php
    //settype(): Herhangi bir degisken iceriginin veri turunu belirlemek / degistirmek icin kullanilir.

    $Deger = "Berk";
    $DegerinVeriTuru = gettype($Deger);
    echo "Deger:" . $Deger. "<br>";
    echo $DegerinVeriTuru . "<br>";

    settype($Deger, "integer");
    $DegerinYeniVeriTuruAdi = gettype($Deger);
    echo "Deger:" . $Deger . "<br>";
    echo $DegerinYeniVeriTuruAdi . "<br>";

    settype($Deger, "null");
    $DegerinYeniVeriTuruAdi2 = gettype($Deger);
    echo "Deger:" . $Deger . "<br>";
    echo $DegerinYeniVeriTuruAdi2 . "<br>";

    $Deger2 = (int) "8.4";
    $DegerinYeniVeriTuruAdi3 = gettype($Deger2);
    echo "Deger:" . $Deger2 . "<br>";
    echo $DegerinYeniVeriTuruAdi3;

?>