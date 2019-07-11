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
    /* $_COOKIE : Herhangi bir kullanicinin browserina yerlestirilmis
       olan cookie (cerez) verilerine ulasilabilme imkani tanir. */

    setcookie("Berk", "Udemy Egitim");

    $Cerez = $_COOKIE["Berk"];
    echo $Cerez;
    ?>
</body>
</html>