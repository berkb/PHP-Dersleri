<?php
session_start();
?>
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
    /* $_SESSION Herhangi bir kullanici icin oturum tanimlama imkani
       tanir. Ayrica daha onceden tanimlanmis olan session verilerine de
       ulasabilme imkani tanir */
    
    $_SESSION["Oturum 1"] = "Berk Belcioglu";
    //kullanicilar bu oturumlar icerisindeki verilere erisemez serverda kayitlidir
    $oturum = "Suan ki acik oturum " . $_SESSION["Oturum 1"];
    echo $oturum;
    //Sunucu tarafinda oturumlari tutuyoruz.
    ?>
</body>
</html>