<?php
    /**
     * preg_quote(): Kendisine parametre olarak verilen icerigi kontrol eder ve icerik dahilinde ozel karakter veya karakterlerin bulunmasi durumunda, bulunan ozel karakterlerin onune ters \ ekleyerek 
     *               yeni bir icerik olusturur ve olusturdugu icerigi geriye dondurur.
     */

     $Deger = "Merhaba nasilsin?";
     $Islem = preg_quote($Deger, "a");

     echo $Deger;
     echo "<br>";
     echo $Islem;
?>