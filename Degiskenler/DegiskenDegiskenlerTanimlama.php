<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Degisken Degiskenler Tanimlama</title>
</head>
<body>
    <?php

    $Deger = "Berk";
    $$Deger = "Belcioglu"; //2 $ isareti degisken degiskendir

    echo $Deger;
    echo "<br>";
    echo $$Deger;
    echo "<br>";

    $Deger = "Berfin";
    $$Deger = "Belcioglu"; //2 $ isareti degisken degiskendir

    echo $Deger;
    echo "<br>";
    echo $Berfin; //$$Deger yerine Berfin adinda bir degisken varmis gibi
    //$Berfin i cagiriyoruz
    ?>
</body>
</html>