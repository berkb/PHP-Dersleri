<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Egitim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php   
    /* Degisken:  Girdigimiz degerleri alan veya programin calismasi ile bazi degerlerin atandigi veri tutuculardir.
       Kurallar:
       1. Degiskenler daima $ isareti ile baslar
       2. Degisken isimleri mutlaka bir harf veya _ ile baslamalidir
       3. Degisken isimlari hicbir zaman bir rakam ile baslayamaz.
       4. Degisken isimleri icerisinde alfanumerik (a-z, 0-9) degerler ve _ kullanilabilir.
       5. Degisken isimleri icerisinde hicbir zaman bozluk, turkce karakterler veya ozel karakterler kullanilamaz.
       6. Degisken isimleri tanimlanirken, PHP tarafindan kullanimakta olan isimler / tanimlar kullanilamaz.
       7. Degisken isimleri buyuk / kucuk harf duyarlidir.
       8. Degisken isimleri birden fazla kez kullanilabilir. Fakat degisken isiminin tekrar edilmesi durumunda, daima son degiskenin degeri gercek deger olarak kabul edilecektir.
       9. Degiskenler kapsama / erki alani kurallarina dahildir.
    */

    $Deger = "1. Kural";
    echo $Deger;
    echo ("<br>");

    $_Deger = "2. Kural";
    echo $_Deger;
    echo ("<br>");

    /* alttaki kod calismaz deger sayi ile basladigi icin
    $1Deger = "3. Kural";
    echo $1Deger;
    echo ("<br>");
    */

    $Deger1 = "4. Kural";
    echo $Deger1;
    echo ("<br>");

    /* alttaki kod deger adinin icinde ozel karakter kullanildigi icin calismaz
    $Deger* = "5. Kural";
    echo $Deger*;
    echo ("<br>");
    */

    $OrnekBir = "Berk";
    $Deneme = "Merhaba $OrnekBir Nasilsin?";
    echo $Deneme;
    echo ("<br>");

    $Isim = "Berk";
    $Soyisim = "Belcioglu";
    $Kisi = "Merhaba $Isim $Soyisim nasilsin?";
    echo $Kisi;
    echo ("<br>");

    ?>
</boDy>
</html>