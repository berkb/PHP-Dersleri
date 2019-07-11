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

    $DegerBir = "Berk B";
    $DegerIki = "Berfin B";

    define("CIKTI", $DegerBir . "-" . $DegerIki);

    echo CIKTI;

    ?>    
</body>
</html>