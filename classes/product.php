<?php
class Product{
    public $name;
    public $type;
    public $price;

 function __construct($name, $type, $price){
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        
    }
}
?>