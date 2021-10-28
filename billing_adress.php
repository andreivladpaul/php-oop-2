<?php 
trait BillingAdress {
    private $country;
    private $city;
    private $zip;
    private $street_name;
    private $house_number;

    function __construct($_country, $_city,$_zip,$_street_name,$_house_number)
        {
            $this->country = $_country;
            $this->city = $_city;
            $this->zip = $_zip;
            $this->street_name = $_street_name;
            $this->street_name = $_house_number;
            
        }


}

?>