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

    //Ornek 1
    define("ICERIK", "Berk B");

    define("VERI", ICERIK);

    echo VERI;

    echo "<br>";

    //Ornek 2
    const ICERIK2 = "Berfin B";

    const VERI2 = ICERIK2;

    echo VERI2;

    echo "<br>";

    //Ornek 3
    const ICERIK3 = "Yetkin B";

    define ("VERI3", ICERIK3);

    echo VERI3;

    echo "<br>";

    //Ornek 4
    define ("ICERIK4", "Ramazan B");

    const VERI4 = ICERIK4;

    echo VERI4;

    echo "<br>";

    //Ornek 5
    $Islem = "Berk Belcioglu";

    define ("ICERIK5", $Islem);

    define ("VERI5", ICERIK5);

    echo VERI5;

    echo "<br>";

    //Ornek 6
    $Islem2 = "Berfin Belcioglu";

    define("ICERIK6", $Islem2);

    const VERI6 = ICERIK6;

    echo VERI6;

    ?>
</body>
</html>