<?php
    /**
     * preg_filter(): Kendisine parametre olarak verilen duzenli ifadeli deger / degerler dogrultusunda icerigi kontrol eder ve aranan degerin / degerlerin eslesmesi durumunda, eslenen degerin / degerlerin 
     *                degisiminin saglayarak yeni bir icerik veya dizi olusturarak, olusturdugu icerigi veya diziyi geriye dondurur.
     * preg_replace(): Kendisine parametre olarak verilen duzenli ifadeli deger / degerler dogrultusunda icerigi kontrol eder ve aranan degerin / degerlerin eslesmesi durumunda, eslenen degerin / degerlerin 
     *                degisiminin saglayarak yeni bir icerik veya dizi olusturarak, olusturdugu icerigi veya diziyi geriye dondurur.
     */

     $Icerik = "Merhaba benim adim Berk Belcioglu, ben bir PHP yazilimcisiyim. Beni Facebook uzerinden Berk Belcioglu seklinde arayabilirsiniz.";
     $Ara = array("/Berk/","/PHP/","/Belcioglu/");
     $Degistir = array("Berfin","Python","Cilgin");
     $Sonuc = preg_filter($Ara, $Degistir,$Icerik);

    echo $Icerik;
    echo "<br>";
    echo $Sonuc;
    
    /**
     * Sayilari da degistirir
     */
?>