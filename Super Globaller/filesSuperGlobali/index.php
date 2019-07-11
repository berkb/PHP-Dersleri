<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <!- // Files Http (Hyper Text Transfer Protocol) (hiper metin transferi protokolü) server’ına (sunucusuna) herhangi bir dosya yükleme işlemi esnasında, ilgili dosya verilerine
    ulaşılabilme imkanı tanır.
    ->

    <form action="sonuc.php" method="post" enctype="multipart/form-data">
    Seciniz : <input type="file" name="Dosya">
    <input type="submit" value="Dosyayi Yukle">
    
    </form>
</body>
</html>   