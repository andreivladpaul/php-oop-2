<?php 
require_once(__DIR__ . '/user.php');
require_once(__DIR__ . '/expiration_date.php');

class Premium extends User {
    private $discount;
    private $subscription_n = 0000;
    use ExpirationDate;

    public function __construct($_name, $_surname,$_date_of_birth,$_email,$_n_cell,$_subscription_n)
        {   
            if(strlen((string)$_subscription_n) = 4 ){
                $this->discount = 3;
            }



            $this->name = $_name;
            $this->surname = $_surname;
            $this->date_of_birth = $_date_of_birth;
            $this->email = $_email;
            $this->n_cell = $_n_cell;
            
        }

    }

?>