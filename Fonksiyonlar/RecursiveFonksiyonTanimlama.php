<?php
    //Recursive: Kendi kendini cagiran

    function IslemYap($Sayi){
        if($Sayi<=25){
            echo $Sayi . "<br>";
            IslemYap($Sayi+1);
        }
    }
    
    IslemYap(1);
?>