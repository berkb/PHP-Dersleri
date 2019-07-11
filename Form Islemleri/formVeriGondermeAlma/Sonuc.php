<html>
    <body>
        <?php
            $GelenAdSoyadDegeri = $_GET["AdSoyad"];
            $GelenEmailAdresiDegeri = $_GET["EmailAdresi"];
            $GelenTelefonDegeri = $_GET["Telefon"];
            $GelenCinsiyetDegeri = $_GET["Cinsiyet"];
            $GelenYasDegeri = $_GET["Yas"];

            echo "Adiniz Soyadiniz: " . $GelenAdSoyadDegeri . "<br>";
            echo "E-Mail Adresiniz: " . $GelenEmailAdresiDegeri . "<br>";
            echo "Telefon Numaraniz: " . $GelenTelefonDegeri . "<br>";
            echo "Cinsiyet: " . $GelenCinsiyetDegeri . "<br>";
            echo "Yasiniz: " . $GelenYasDegeri . "<br>";
        ?>
    </body>
</html>