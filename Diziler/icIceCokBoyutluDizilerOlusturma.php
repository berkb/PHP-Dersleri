<?php

    $Degerler = array("DegerA"=>"Berk",
                      "Berfin",
                      "DiziA"=>array(
                          "Mavi",
                          "Renk"=>"Kirmizi",
                          "Sari","Siyah",
                          "DiziB"=>array(
                              "Masa",
                              "EsyaBir"=>"Sandalye",
                              "Sehpa")),
                        "Yetkin",
                        "Ramazan");

    echo "<pre>";
    print_r($Degerler);
    echo "</pre><br>"; 

    echo $Degerler["DegerA"] . "<br>";
    echo $Degerler[0] . "<br>";
    echo $Degerler["DiziA"][0] . "<br>";
    echo $Degerler["DiziA"]["Renk"] . "<br>";
    echo $Degerler["DiziA"][1] . "<br>";
    echo $Degerler["DiziA"][2] . "<br>";
    echo $Degerler["DiziA"]["DiziB"][0] . "<br>";
    echo $Degerler["DiziA"]["DiziB"]["EsyaBir"] . "<br>";
    echo $Degerler["DiziA"]["DiziB"][1] . "<br>";



?> 