<?php

class Account{
    //Properties, Attiributes, Fields
    private $id;
    private $name;
    private $balance;

    //Methods
    public function __construct($id, $name, $balance){
        $this->id =$id;
        $this->name =$name;
        $this->balance =$balance;
    }

    public function getName(){
        return $this->name;
    }
    public function getId(){
        return $this->id;
    }
    public function getBalance(){
        return $this->balance;
    }

    public function showInfos(){
        echo "Bilgilendir<br>";

        echo "Id: $this->id<br>";
        echo "Isim: $this->name<br>";
        echo "Vadesiz Bakiye: $this->balance<br>";
    }

}

class specialAccount extends Account{
    private $interest;

    public function __construct($id, $name, $balance, $interest){
        parent::__construct($id, $name, $balance);
        $this->interest = $interest;
    }

    public function getInterest(){
        return $this->interest;
    }
    
    //Override
    public function showInfos(){
        parent::showInfos();
        echo "Vadeli Bakiye: $this->interest<br>";
    }
}

$account1 = new Account(12, "Berk Belcioglu", 1000);
$account1->showInfos();

$specialAccount = new SpecialAccount(15, "Berfin Belcioglu", 1500, 5000);
$specialAccount->showInfos();

?>