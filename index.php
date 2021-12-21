<?php
require __DIR__ . '/classes/user.php';
require __DIR__ . '/classes/premium_User.php';
require __DIR__ . '/classes/product.php';
require __DIR__ . '/classes/payment.php';
require __DIR__ . '/classes/IT_product.php';

$product1 = new Product('C++ For Dummies','Book','26€');
$user1 = new User('Andrea Scanzi','31','andrescan@gmail.com');
$premUser1 = new  PremiumUser('Ottavio Sorti','51','8sort@gmail.com');
$premUser1->setDiscount(40);
$product2 = new ItProduct('RTX 3090','Graphic Card','1500€');
$product2->setSubType('RTX Series');
$card1= new Payment('41654165816516','VISA');
$user1->setPaymentMethod($card1->card);
 echo "<pre>", var_dump($product1,$premUser1,$user1,$product2,$card1), "</pre>";
?>