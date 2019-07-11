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
    <!-$_POST İstek gönderim tag’ları (etiketleri) aracılığı ile
    gelen verilere ulaşılabilme imkanıtanır. Genellikle kapalı
    yöntemle gelen istekler ve form işleme işlemleri içinkullanılmaktadır. ->
   
    <form action="sonuc.php" method="post">
    Isim : <input type="text" name="ad"><br />
    Soyisim : <input type="text" name="soyad"><br />
    <input type ="submit" value="Gonder">
</body>
</html>