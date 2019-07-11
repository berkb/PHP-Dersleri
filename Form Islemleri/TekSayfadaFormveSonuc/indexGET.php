<html>
    <body>
        <?php
            if(!$_GET){
            ?>
            <form action="index.php" method="get">
                AD Soyad: <input type="text" name="AdSoyad"><br>
                Telefon: <input type="text" name="Telefon"><br>
                Email: <input type="email" name="EmailAdresi"><br>
                Mesajiniz: <textarea name="Mesaj"></textarea>
                <input type="submit" value="Gonder">
            </form>
            <?php
            }
            else{
                $GelenAdSoyad = $_GET["AdSoyad"];
                $GelenTelefon = $_GET["Telefon"];
                $GelenEmail = $_GET["EmailAdresi"];
                $GelenMesaj = $_GET["Mesaj"];

                echo $GelenAdSoyad . "<br>";
                echo $GelenTelefon . "<br>";
                echo $GelenEmail . "<br>";
                echo $GelenMesaj . "<br>";
            }
            ?>
    </body>
</html>