<?php 
require_once(__DIR__ . '/expiration_date.php');


class CreditCard {
    private $card_number;
    private $cvv;
    use ExpirationDate;
}

?>