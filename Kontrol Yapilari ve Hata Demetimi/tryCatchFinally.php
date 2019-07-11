<?php
    /**
     * try: Hata olusturabilecek kodlar icin kullanilir.
     * catch: Hata olusursa calistirilacak kodlar icin kullanilir.
     * finally: Hata olussada calistirilacak kodlar icin kullanilir.
     * throw: Hata olusturabilecek kodlar icin istisnai durumlarda kullanilir.
     * Exception: Tum istisnalar icin onceden tanimli olan temel sinifi cagirmak icin kullanilir.
     * getMessage(): Tum istisnalar icin olusturulacak olan iletilerin atandigi veri tutuculardir.
     */

     $Deger = "Berk";

     try{
         if($Deger == "Berk"){
             echo "Merhaba Berk.";
         }
         elseif($Deger == "Berfin"){
             throw new Exception("Sen Berfinsin, Berk degilsin.");
         }
         else{
             throw new Exception("Sen kimsin?");
         }

        echo "<br>Burasi son satir kodudur. Kod sorunsuz calisti.<br>";
     }
     catch(Exception $Sonuc){
         echo $Sonuc-> getMessage();
     }
     finally{
         echo "Burasi finally ifadesi kod blogu ve daima calisir.";
     }
?>