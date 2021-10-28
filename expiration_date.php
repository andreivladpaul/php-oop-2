<?php 
trait ExpirationDate {
    private $date;

    function __construct($_date) {   
        if ($_date ) {

        } else {
            $this->date = $_date;
        }
            
    }

    function setDate($_name){
        $this->name = $_name;
    }

    function getDate($_date){
        return $this->date;
    }
}



?>