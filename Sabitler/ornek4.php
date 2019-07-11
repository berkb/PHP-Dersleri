<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php

    //Sabitler altcizgi ile de baslayabilir
    //Sabitler rakamla baslayamaz
    //Sabitler icerisinde alfanumerik ifadeler kullanilabilir 
    //Sabitler icerisinde bosluk turkce karakter ozel karakter kullanilamaz
    //Php tarafindan kullanilmakta olan isimler ve tnaimlar kullanilamaz
    //Buyuk harf kucuk harf duyarlidir
    //TRUE kucuk buyuk harf duyarliligini kaldirir
    
    function Deneme(){
        $Isim = "Berk Belcioglu"; //Kapsama alanina tabiidir disari cagirilmaz

        define("ISIM", "Berk B"); //Cagirilir
    }
    Deneme();
    echo ISIM;

    ?>
</body>
</html>