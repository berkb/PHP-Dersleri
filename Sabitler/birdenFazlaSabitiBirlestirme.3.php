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

        define ("ISIM", "Berk");
        const SOYISIM = "B";
        $FirmaAdi = "Extra Egitim";

        define ("SONUC", $FirmaAdi . " " . ISIM . " " . SOYISIM);
        
        echo SONUC;
    ?>
</body>
</html>