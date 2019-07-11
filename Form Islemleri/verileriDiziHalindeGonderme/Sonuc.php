<html>
    <body>
        <?php
            $GelenAdSoyad = $_GET["AdSoyad"];
            $GelenHobiler = $_GET["Hobiler"];

            echo "Ad Soyad: " . $GelenAdSoyad . "<br>"; 
            echo "Hobiler: " . "<br>";

            foreach($GelenHobiler as $Hobiler){
                echo $Hobiler . "<br>";
            }

        ?>
    </body>
</html>