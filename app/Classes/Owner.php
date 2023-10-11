<?php 

namespace App\Classes;

class Owner{
    private $ownerName;

    private $apartment;

    public function __construct($ownerName, Apartment $apartment){
        $this->ownerName = $ownerName;
        $this->apartment = $apartment;
    }

    public function displayOwnerDetails(){
        echo "Owner Name: " . $this->ownerName . "<br>";
        echo "Apartment Number: " . $this->apartment->getApartmentNumber() . "<br>";
    }
}