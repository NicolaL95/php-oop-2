<?php
class PremiumUser extends User{
    public $type;
    public $discount;

    public function setDiscount($discount){
        $this->discount = $discount;
    }

}

?>