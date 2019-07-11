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
    $GelenDosya = $_FILES["Dosya"];

    //pre taglari okumayi kolaylastirir
    //alinan dosya print_r ile okunur
    //temp olarak yuklenir
    echo "<pre>";
    print_r($GelenDosya);
    echo "<pre>";

    //echo ile de bu sekilde yazabilir okunmasi daha iyi olur
    echo "Gelen Dosyanin adi : " . $_FILES["Dosya"]["name"] . "<br>"; 
    echo "Gelen Dosyanin turu : " . $_FILES["Dosya"]["type"] . "<br>";
    echo "Gelen Dosyanin boyutu : " . $_FILES["Dosya"]["size"];


    ?>
</body>
</html>