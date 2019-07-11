<?php
    $Bir = "Berk B";

    function bbb(&$Bir){
        echo $Bir;
    }

    bbb($Bir);
?>