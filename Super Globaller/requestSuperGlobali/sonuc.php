<?php
    //Gelen veriyi garanti bi sekilde almak istiyorsak request kullaniriz
    $GelenIsim = $_REQUEST["KullaniciAdi"];
    $GelenSoyisim = $_REQUEST["KullaniciSoyadi"];

    echo $GelenIsim . " " . $GelenSoyisim;

?>