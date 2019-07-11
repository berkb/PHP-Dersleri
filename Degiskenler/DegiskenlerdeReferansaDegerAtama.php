<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Degiskenlerde Referansa Bagli Deger Atama</title>
</head>
<body>
    <?php

    $DegerBir = "Berk";
    $DegerIki = &$DegerBir; //& referans vermeye yarar

    echo $DegerBir;
    echo "<br>";
    echo $DegerIki;
    echo "<br>";

    $DegerBir = "Berfin";

    echo $DegerBir;
    echo "<br>";
    echo $DegerIki;
    echo "<br>";

    $DegerBir = "Yetkin";

    echo $DegerBir;
    echo "<br>";
    echo $DegerIki;
    echo "<br>";

    ?>
</body>
</html>