class Matematik
{
   public $x;
   public $y;
   
   public function carpma()
   {
      return ($this->x*$this->y);
   }
   public function bolme()
   {
      return ($this->x/$this->y);
   }
   public function toplama()
   {
      return ($this->x+$this->y);
   }
   public function cikarma()
   {
      return ($this->x-$this->y);
   }
}
class Dikdortgen extends Matematik
{
   public function alanHesapla((int)$a, (int)$b)
   {
      $this->x = $a;
      $this->y = $b;
      return $this->carpma();
   }
}
class Ucgen extends Dikdortgen
{
   public function alani((int)$a, (int)$b)
   {
      return $this->bolme($this->alanHesapla($a,$b), 2);
   }
}
$dikdortgen = new Dikdortgen();
$dikdortgen->alanHesapla(3,5); //15
$dikdortgen->toplama(10,2); //12
$ucgen = new Ucgen();
$ucgen->alani(3,4); //6
$ucgen->alanHesapla(3,5); //15
$ucgen->cikarma(10,2); //8