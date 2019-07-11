<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    function Deneme() {
       $GLOBALS["Isim"] = "Berk"; 
    }
    Deneme();

    echo $Isim;
    echo "<br>";

    function Deneme2() {
        $Ad = "Berfin"; 
        echo $Ad;
     }
    Deneme2();
    echo "<br>";

     $GLOBALS["Soyad"] = "Belcioglu";
     function Deneme3(){
         echo $GLOBALS["Soyad"];
     }
     Deneme3();
     echo "<br>";

     $Soyad2 = "Belci";
     function Deneme4(){
         echo $GLOBALS["Soyad2"];
     }
     Deneme4();

    ?>
</body>
</html>