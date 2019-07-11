<?php

    abstract class Customer{
        private $id;
        private $name;
        protected $email;
        private $balance;

        public function __construct($id, $name, $email, $balance){
            $this->id       = $id;
            $this->name     = $name;
            $this->email    = $email;
            $this->balance  = $balance;
        }
        
        abstract public function getEmail();
    }

   // $customer = new Customer(1, 'Berk B', 'berk@gmail.com', 0);
    /* 
    //private olsa bile direk erismeye calismadigimiz icin sorunsuz bilgiyi aliyoruz
    echo $customer->getEmail();
    //direk ulasmaya calistigimiz icin hata aliriz
    echo $customer->email;
    */

    class Subscriber extends Customer{
        public $plan;

        public function __construct($id, $name, $email, $balance, $plan){
            parent::__construct($id, $name, $email, $balance);

            $this->plan = $plan;
        }
        public function getEmail(){
            return $this->email;
        }

    }

    // $subscriber = new Subscriber(1, 'Berk B', 'berk@gmail.com', 0, 'Pro');

    // echo $subscriber->getEmail();
?>
