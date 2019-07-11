<?php
declare(strict_types=1);
//declare(strict_types=1) : Kodlama dosyasi icerisindeki tum kodlamalarin kural yapisini belirler.

function Deneme(array $Deger):string{
    $Islem = implode("<br>", $Deger);
    return $Islem;
}

$Ornek = array("Berk","Berfin","Yetkin");
$Sonuc = Deneme($Ornek);
echo $Sonuc;

?>