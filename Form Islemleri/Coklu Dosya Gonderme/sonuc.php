<html>
    <body>
        <?php
        $GelenDosyalar = $_FILES["Dosyalar"];

        foreach($GelenDosyalar["tmp_name"] as $Anahtar => $Eleman){
            $AnahtarDegeri                  = $Anahtar;
            $DosyaAdiDegeri                 = $GelenDosyalar["name"][$Anahtar];
            $DosyaTuruDegeri                = $GelenDosyalar["type"][$Anahtar];
            $DosyaGeciciDiziniVeAdiDegeri   = $GelenDosyalar["tmp_name"][$Anahtar];
            $DosyaHataDegeri                = $GelenDosyalar["error"][$Anahtar];
            $DosyaBoyutuDegeri              = $GelenDosyalar["size"][$Anahtar];

            $DosyaYuklemeDiziniVeAdi        = "Resimler/".$DosyaAdiDegeri;

            if(move_uploaded_file($DosyaGeciciDiziniVeAdiDegeri,$DosyaYuklemeDiziniVeAdi)){
                echo "Anahtar: " . $AnahtarDegeri . "<br>";
                echo "Dosya Adi: " . $DosyaAdiDegeri . "<br>";
                echo "Dosya Turu: " . $DosyaTuruDegeri . "<br>";
                echo "Dosya Gecici Dizini ve Temp Adi: " . $DosyaGeciciDiziniVeAdiDegeri . "<br>";
                echo "Dosya Hata Durumu: " . $DosyaHataDegeri . "<br>";
                echo "Dosya Boyutu: " . $DosyaBoyutuDegeri . "<br>";
                echo "<img src='{$DosyaYuklemeDiziniVeAdi}'><br><br>";
            }else{
                echo "Dosya yuklenirken hata olustu.<br>";
            }
        }
        ?>
    </body>
</html>