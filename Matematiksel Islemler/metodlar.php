<?php
/**
 * ceil(): Herhangi bir ondalikli sayiyi yukariya yuvarlayip, yuvarlama sonucunda olusan degeri geriye dondurur.
 * floor(): Herhangi bir ondalikli sayiyi asagiya yuvarlayip, yuvarlama sonucunda olusan degeri geriye dondurur.
 * round(): Herhangi bir ondalikli sayiyi kendisine en yakin degere yuvarlayip, yuvarlama sonucunda olusan degeri geriye dondurur.
 *          echo ceil(8.34);
 *          
 *          $Deger = 8.4472;
 *          $DegerYuvarla = round($Deger, 2); -> 8.45
 * 
 * number_format(): Herhangi bir sayiyi belirtilecek olan ayraclar dogrultusunda bicimlendirerek, bicimlendirdigi degeri geriye dondurur.
 * min(): Degisken iceriklerinin veya dizi elemanlarinin saayisal degerler icermesi durumnda en kucuk sayisal degeri bularak, buldugu degeri geriye dondurur.
 * max(): Degisken iceriklerinin veya dizi elemanlarinin saayisal degerler icermesi durumnda en buyuk sayisal degeri bularak, buldugu degeri geriye dondurur.
 * lcg_value(): 0 ile 1 arasinda rastgele bir ondalikli sayi ureterek urettigi degeri geriye dondurur.
 * rand(): Rastgele bir sayi ureterek urettigi degeri geriye dondurur.
 * getrandmax(): rand() metodu kullanilarak uretilebilecek en buyuk sayinin degerini bularak, buldugu degeri geriye dondurur.
 *          $sayi = rand(1, 10);
 * 
 * mtrand(): Mersenne twister algoritmasi kullanilarak rastgele tam sayi ureterek, urettigi degeri geriye dondurur.
 * mtrandmax(): mt_rand() metodu ile uretilabilecek olan en buyuk sayi degerini bularak, buldugu degeri geriye dondurur.
 * abs(): Herhangi bir sayinin mutlak degerini bularak buldugu degeri geriye dondurur.
 * sqrt(): Herhangi bir sayinin karekokunu bularak buldugu degeri geriye dondurur.
 * pow(): Herhangi bir sayinin belirtilecek deger kadar ussunu bularak, buldugu degeri geriye dondurur.
 *          $Sayi = pow(3,4);
 * 
 * fmod(): Herhangi bir sayinin belirtilecek olan degeri gore modulusunu yani kalanini bularak, buldugu degeri geriye dondurur.
 *          $Modulus = fmod(10,3);
 *  
 * intdiv(): Herhangi bir sayinin belirtilecek olan sayi degerine tam olarak kac defa bolunebildigini bularak, buldugu degeri geriye dondurur.
 * hypot(): Belirtilecek olan uzunluk degerlerine sahip bir dik ucgenin hipotenusunu hesaplayarak, buldugu degeri geriye dondurur.
 * rad2deg(): Radyan degeri cinsinden bir sayinin, derece cinsinden karsiligini bularak, buldugu degeri geriye dondurur.
 * deg2rad(): Derece degeri cinsinden bir sayinin, radyan cinsinden karsiligini bularak. buldugu degeri geriye dondurur.
 * sin(): Herhangi bir sayinin sinusunu bularak, buldugu degeri geriye dondurur.
 * cosh(): Herhangi bir sayinin hiperbolik sinusunu bularak, buldugu degeri geriye dondurur.
 * asin(): -1 ile 1 arasindaki herhangi bir sayinin ark sinusunu radyan degeri cinsinden bularak, buldugu degeri geriye dondurur.
 * asinh(): Herhangi bir sayinin hiperbolik ark sinusunu bularak, buldugu degeri geriye dondurur.
 * cos(): Herhangi bir sayinin cosinusunu bularak, buldugu degeri geriye dondurur.
 * cosh(): Herhangi bir sayinin hiperbolik cosinusunu bularak, buldugu degeri geriye dondurur.
 * acos(): -1 ile 1 arasindaki herhangi bir sayinin ark cosinusunu radyan degeri cinsinden bularak, buldugu degeri geriye dondurur.
 * acosh(): Herhangi bir sayinin hiperbolik ark cosinusunu bularak, buldugu degeri geriye dondurur.
 * tan(): Herhangi bir sayinin tanjantini bularak, buldugu degeri geriye dondurur.
 * tanh(): Herhangi bir sayinin hiperbolik tanjantini bularak, buldugu degeri geriye dondurur.
 * atan(): Herhangi bir sayinin ark tanjantini radyan degeri cinsinden bularak, buldugu degeri geriye dondurur.
 * atanh(): -1 ile 1 arasindaki herhangi bir sayinin hiperbolik ark tanjantini bularak, buldugu degeri geriye dondurur.
 * atan2():  Herhangi iki sayinin ark tanjantini radyan degeri cinsinden bularak, buldugu degeri geriye dondurur. (x, y)
 * bindec(): Herhangi bir binary sayinin, decimal sayi sistemi karsiligini bularak, buldugu degeri geriye dondurur.
 * octdec(): Herhangi bir octal sayinin, decimal sayi sistemi karsiligini bularak, buldugu sayiyi geriye dondurur.
 * hexdec(): Herhangi bir hexadecimals sayinin, decimal sayi sistemi karsiligini bularak, buldugu sayiyi geriye dondurur.
 * decbin(): Herhangi bir decimal sayinin, binary sayi sistemi karsiligini bularak buldugu degeri geriye dondurur.
 * decoct(): Herhangi bir decimal sayinin, octal sayi sistemi karsiligini bularak buldugu degeri geriye dondurur.
 * dechex(): Herhangi bir decimal sayinin, hexadecimal sayi sistemi karsiligini bularak buldugu degeri geriye dondurur.
 * base_conver(): Herhangi bir sayinin, binary, octal, decimal, hexadecimal sayi sistemleri karsiligini bularak, buldugu degeri geriye dondurur.
 * M_SQRT1_2: 1/2 sayisinin karekok degerini geriye dondurur.
 * M_SQRT2: 2 sayisinin karekok degerini geriye dondurur.
 * M_SQRT3: 3 sayisinin karekok degerini geriye dondurur.
 * M_LN2: 2 sayisinin dogal logaritmasi degerini elde etmek icin kullanilir.
 * M_LN10: 10 sayisinin dogal logaritmasi degerini elde etmek icin kullanilir.
 * log(): Herhangi bir sayinin dogal logaritmasini bularak, buldugu degeri geriye dondurur.
 * log10(): Herhangi bir sayinin 10luk tabana gore dogal logaritmasini bularak, buldugu degeri geriye dondurur.
 * pi(): PI sayisi degerini geriye dondurur.
 * M_PI(): PI sayisi degerini geriye dondurur.
 * M_1_PI: 1/PI
 * M_2_PI: 2/PI
 * M_PI_2: PI/2
 * M_PI_4: PI/4
 * M_SQRTPI: PI sayisinin karekokunu bularak, buldugu degeri geriye dondurur.
 * M_2_SQRTPI: 2/Pi sayisinin karekokunu bularak, buldugu degeri geriye dondurur.
 * M_LNPI: PI sayisinin dogal logaritmasi degerini geriye dondurur.
 * M_E: Euler sayisi degerini geriye dondurur.
 * M_EULER: Euler sabiti degerini geriye dondurur.
 * M_LOG2E: Euler sayisinin 2 tabanina gore logaritmik degerini geriye dondurur.
 * M_LOG10E: Euler sayisinin 10 tabanina gore logaritmik degerini geriye dondurur.
 * exp(): Euler sayisinin belirtilecek deger kadar ussunu bularak, buldugu degeri geriye dondurur.
 * expm1(): Euler sayisinin belirtilecek deger kadar ussunu bularak ve bir eksilterek, buldugu degeri geriye dondurur.
 * 
 */
?>