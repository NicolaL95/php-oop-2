<?php
class Payment{
    public $card;
    public $card_type;
    
    function __construct($card, $card_type) {
        $this->card = $card;
        $this->card_type = $card_type;
    }
}

?>