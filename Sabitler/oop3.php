<?php

class Insan
{
   public $isim;
   public $soyisim;
   protected $kimlikno;
   protected $mesaj;
 
   public function konus()
   {
      echo $this->mesaj; 
   }
   public function adiniSoyle()
   {
      echo $this->isim.' '.$this->soyisim;
   }
   public function kimlikNumaran()
   {
       echo $this->kimlikno;
   }
}
class birInsan extends Insan
{
 public function __construct()
 {
  
  $this->isim  = 'Hüseyin';
  $this->soyisim = 'Aslım';
  $this->mesaj  = 'Merhaba!';
  $this->kimlikno = '0254185758';
 }
 
 public function konus()
    {
  echo $this->mesaj;
    }
 
 public function kimlikNoGetir()
    {
  echo $this->kimlikno;
    }
}
class Turist extends Insan
{
 public function __construct()
 {
 
  $this->isim  = 'Jane';
  $this->soyisim  = 'Doe';
  $this->mesaj = 'Hello!';
  $this->kimlikno = '2323232';
 }
}
$b = new birInsan();
$b->konus();          //Merhaba! Benim ismim Hüseyin Aslım
$b->adiniSoyle();    //Hüseyin Aslım
$b->kimlikNoGetir(); //0254185758

$t = new Turist();
$t->konus();          //Hello!
$t->adiniSoyle();    //Jane Doe
$t->kimlikNumaran();


?>