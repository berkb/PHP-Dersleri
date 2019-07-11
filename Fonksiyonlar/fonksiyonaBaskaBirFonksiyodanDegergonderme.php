<?php
    function ParaBirimi($Birim, $Tutar){
        if($Birim =="Turk Lirasi"){
            $Kur = 1;
        }
        elseif($Birim=="Amerikan Dolari"){
            $Kur = 4;
        }
        elseif($Birim=="Euro"){
            $Kur = 5;
        }
        else{
            $Kur = 0;
        }
        return Hesapla($Kur, $Tutar);
    }

    function Hesapla($KurBilgisi, $TutarBilgisi){
        $Sonuc = $KurBilgisi * $TutarBilgisi;
        echo $Sonuc;
    }

    ParaBirimi("Amerikan Dolari", 1000);
?>