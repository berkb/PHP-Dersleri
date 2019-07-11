<html>
    <body>
        <?php
            if(!$_POST){
            ?>
            <form action="index.php" method="POST">
                AD Soyad: <input type="text" name="AdSoyad"><br>
                Telefon: <input type="text" name="Telefon"><br>
                Email: <input type="email" name="EmailAdresi"><br>
                Mesajiniz: <textarea name="Mesaj"></textarea>
                <input type="submit" value="Gonder">
            </form>
            <?php
            }
            else{
                $GelenAdSoyad = $_POST["AdSoyad"];
                $GelenTelefon = $_POST["Telefon"];
                $GelenEmail = $_POST["EmailAdresi"];
                $GelenMesaj = $_POST["Mesaj"];

                echo $GelenAdSoyad . "<br>";
                echo $GelenTelefon . "<br>";
                echo $GelenEmail . "<br>";
                echo $GelenMesaj . "<br>";
            }
            ?>
    </body>
</html>