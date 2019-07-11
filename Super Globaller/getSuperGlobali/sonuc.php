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
    /* $_GET URL (Uniform Resource Locator) (nizami kaynak bulucu) üzerinden gelen verilere
    ulaşılabilme imkanı tanır.Genellikle URL (Uniform Resource Locator) (nizami kaynak
    bulucu) üzerinden gelen istekler ve form işleme işlemleri için kullanılmaktadır 
    http://localhost/UDEMY/Super%20Globaller/getSuperGlobali/sonuc.php?Isim=Berk&Soyisim=Belcioglu */

        $GelenIsimDegeri = $_GET["Isim"];
        $GelenSoyisimDegeri = $_GET["Soyisim"];

        echo $GelenIsimDegeri . " " . $GelenSoyisimDegeri;
    ?>
</body>
</html>