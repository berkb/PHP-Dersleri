<?php

    class User{
        public $username;
        public $password;
        private static $passwordLength = 5;

        public static function getPasswordLength(){
            return self::$passwordLength;
        }
    }

    //private olsa bile getPasswordLength i cagirdigimiz icin gelir
    echo User::getPasswordLength();

?>