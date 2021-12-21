<?php
class User{
    public $name;
    public $age;
    public $email;
    public $password;
    public $paymentMethod;

    function __construct($name, $age, $email, $paymentMethod = null, $password = null){
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }

    public function setPassword($password){
        $this->password =  $password;
    }
    public function setPaymentMethod($card){
        $this->paymentMethod = $card;
    }
}

?>