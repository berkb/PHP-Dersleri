<?php
    /**
     * next()    : Dizinin gostericisi konumundaki anahtari veya elemani bir ileri almak icin kullanilir.
     * prev()    : Dizinin gostericisi konumundaki anahtari veya elemani bir geri almak icin kullanilir.
     * reset()   : Dizinin gostericisi konumundaki anahtari veya elemani varsayilan konuma (ilk) geri dondurmek icin kullanilir.
     * explode() : Duz bir metni belirtilecek olan ayraca gore parcalayarak yeni bir dizi olusturmak icin kullanilir.
     * implode() : Diziyi birlestirerek duz bir metin icerigi olusturmak icin kullanilir.
     * list()    : Dizi icerisindeki eleman veya elemanlari degiskenlere atamak icin kullanilir.
     * array_merge() : Birden fazla diziyi birlestirerek yeni bir dizi olusturmak icin kullanilir.
     * array_merge_recursive() : Birden fazla diziyi recursive birlestirerek yeni bir dizi olusturmak icin kullanilir. Ayni keyleri icin ice ayri bir array acar.
     * array_combine() : Iki farkli diziyi iliskisel olarak birlestirerek yeni bir dizi olusturmak icin kullanilir.
     * array_slice() : Dizinin belli bolumlerini alarak yeni bir dizi olusturmak icin kullanilir.
     * array_splice() : Dizinin belli bolumlerini alip, belli bolumlerini silip, eger belirtilirse yeni elemanlarda ekleyerek yeni bir dizi olusturmak icin kullanilir.
     * array_chunk() : Dizinin belli bolumlerini alip parcalayarak yeni bir cok boyutlu bir dizi olusturmak icin kullanilir.
     * array_column() : Cok boyutlu bir dizi icerisinde bulunan elemani / elemanlari belirtilecek olan anahtar kosullarina gore bicimlendirerek yeni bir dizi olusturmak icin kullanilir.
     * array_intersect() : Birden fazla dizi icerisinde bulunan ve ayni anahtar degerlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.
     * array_intersect_key() : Burden fazla dizi icerisinde bulunan ve ayni anahtar isimlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.
     * array_intersect_assoc() : Birden fazla dizi icerisinde bulunan ve ayni anahtar isimlerine ve ayni eleman degerlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.
     * array_diff() : Birden fazla dizi icerisinde bulunan ve farkli eleman degerlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir
     * array_diff_key() : Birden fazla dizi icerisinde bulunan ve farkli anahtar isimlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.
     * array_diff_assoc() : Birden fazla dizi icerisinde bulunan farkli anahtar isimlerine ve farkli eleman degerlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.
     * array_replace() : Birden fazla dizi icerisinde bulunan eleman veya elemanlarin, ilk dizi icerisinde olanlari baz alinarak, kendisinden sonra gelecek olan dizi veye diziler icerisinde bulunan eleman veya elemanlarla guncelleyerek yeni bir dizi olusturmak icin kullanilir. Ayni anahtar degerlerini guncelleyebilir.
     * array_replace_recursive() : Birden fazla dizi icerisinde bulunan eleman veya elemanlarin, ilk dizi icerisinde olanlari baz alinarak, kendisinden sonra gelecek olan dizi veye diziler icerisinde bulunan eleman veya elemanlarla guncelleyerek yeni bir dizi olusturmak icin kullanilir. Ayni anahtar degerlerini guncelleyebilir. Gelismis
     * array_filter() : Dizinin icerisinde bulunan bos eleman veya elemanlari filtre ederek yeni bir dizi olusturmak icin kullanilir.
     * array_unique() : Dizinin icerisinde bulunan ve tekrarlanan elemanlarin fazla olanlarini silerek yeni bir dizi olusturmak icin kullanilir.
     * range() : Belirtilecek olan deger aralıkları doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
     * array_fill() : Belirtilecek olan degerler dogrultusunda doldurma islemi yaparak yeni bir dizi olusturmak icin kullanilir.
     * array_fill_keys() : Dizi icersinde bulunan eleman veya elemanlari anahtar gibi gorerek, belirtilecek olan degerelr dogrultusunda doldurma islemi yaparak yeni bir dizi olusturmak icin kullanilir.
     * compact() : Dizi icerisinde bulunan elemani veya elemanlari anahtar gibi gorerek daha onceden ayni isimle tanimlanmis olan degiskenlerden ilgili anahtarlara deger uretmek icin kullanilir.
     * array_keys() : Dizinin anahtarlarini alip yeni bir dizi olusturmak icin kullanilir.
     * array_values() : Dizinin elemanlarini alip yeni bir dizi olusturmak icin kullanilir.
     * array_pad() : Dizinin eleman yada elemanlar sayisini baz alarak, belirtilecek olan degerler dogrultusunda bastan veya sonda doldurma islemi yaparak yeni bir dizi olusturmak icin kullanilir.
     * array_search() : Dizi icerisinde bulunan eleman veya elemanlar dahilinde, belirtilecek olan elemani aramak ve ilgili elemanin anahtarini bulmak icin kullanilir.
     * array_key_exists() : Dizi icerisinde bulunan anahtar veya anahtarlar dahilinde, belirtilecek olan anahtarin olup olmadigini kontrol etmek icin kullanilir.
     * in_array() : Dizi icerisinde bulunan eleman veya elemanlar dahilinde, belirtilecek olan elemanin olup olmadigini kontrol etmek icin kullanilir.
     * min() : Dizi icerisinde bulunan eleman veya elemanlarin sayisal degerler icermesi durumunda en kucuk sayisal deger iceren elemani bulmasi icin kullanilir.
     * max() : Dizi icerisinde bulunan eleman veya elemanlarin sayisal degerler icermesi durumunda en kucuk sayisal deger iceren elemani bulmasi icin kullanilir.
     * array_count_values() : Dizi icerisinde bulunan elemanlarin kacar defa tekrarlandigini bulmak icin kullanilir.
     * array_flip() : Dizi icerisinde bulunan eleman ve anahtarlarin yer degisimi yapmasi icin kullanilir.
     * array_change_key_case() : Dizi icerisinde bulunan anahtar veya anahtarlarin buyuk harf kucuk harf donusturme islemleri icin kullanilir. Varsayilan CASE_LOWER ve CASE_UPPER
     * array_sum() : Dizi icerisinde bulunan eleman yada elemanlarin rakamsal degerler icermesi durumunda tum elemanlarin toplamini almak icin kullanilir.
     * array_product() : Dizi icerisinde bulunan eleman yada elemanlarin rakamsal degerler icermesi durumunda tum elemanlarin carpimlarini almak icin kullanilir.
     * array_rand() : Dizi icerisinde bulunan elemanlardan, belirtilecek eleman sayisi kadar rastgele deger dondurmek icin kullanilir.
     * array_reverse() : Dizi elemanlarinin tersten siralanmasini saglayarak yeni bir dizi olusturmasi icin kullanilir.
     * shuffle() : Dizi icerisinde bulunan elemanlarin siralarinin karistirilmasi icin kullanilir.
     * ksort() : Dizinin anahtarlarini buyuk kucuk harf duyarli olacak sekilde a dan z ye yada kucukten buyuge siralamak icin kullanilir.
     * krsort() : Dizinin anahtarlarini buyuk kucuk harf duyarli olacak sekilde z den a ya yada buyukten kucuge siralamak icin kullanilir.
     * sort() : Dizinin elemanlarini buyuk kucuk harf duyarli olacak sekilde a dan z ye yada kucukten buyuge siralamak icin kullanilir.
     * rsort() : Dizinin elemanlarini buyuk kucuk harf duyarli olacak sekilde z den a ya yada buyukten kucuge siralamak icin kullanilir.
     * asort() : Dizinin elemanlarini buyuk kucuk harf duyarli olacak ve anahatarlarini bozmayacak sekilde a dan z ye yada kucukten buyuge siralamak icin kullanilir.
     * arsort() : Dizinin elemanlarini buyuk kucuk harf duyarli olacak ve anahtarlarini bozmayacak sekilde z den a ya yada buyukten kucuge siralamak icin kullanilir.
     * natsort() : Dizinin elemanlarini buyuk kucuk harf duyarli olacak ve dogal siralama seklinde a dan z ye yada kucukten buyuge siralamak icin kullanilir.
     * natcasesort() : Dizinin elemanlarini dogal siralama seklinde a dan z ye yada kucukten buyuge siralamak icin kullanilir.
     * array_multisort() : Bir yada birden fazla dizinin elemanlarini gelismis olarak cok yonlu siralamak icin kullanilir.
     *                     SORT_ASC : A dan z ye / kucukten buyuge
     *                     SORT_DESC : Z den a ya / buyukten kucuge
     *                     SORT_REGULAR : Standart siralama (varsayilan)
     *                     SORT_NUMERIC : Sayisal siralama
     *                     SORT_STRING : Alfanumerik siralama (String)
     *                     SORT_NATURAL : Alfanumerik siralama (String) (Dogal)
     */
?>