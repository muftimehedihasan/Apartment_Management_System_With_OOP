<?php 

namespace App\Classes;

// We have a class called Owner
// This is no abstract class and no have a subclass
class Owner{

    // We have two private properties for ownerName, name and apartment
    private $ownerName;

    private $apartment;

// This a constructor that initialize ownerName and apartment
    public function __construct($ownerName, Apartment $apartment){
        $this->ownerName = $ownerName;
        $this->apartment = $apartment;
    }

    // in abstract class we have a method called displayOwnerDetails and we echo ownerName and apartment
    public function displayOwnerDetails(){
        echo "Owner Name: " . $this->ownerName . "<br>";
        echo "Apartment Number: " . $this->apartment->getApartmentNumber() . "<br>";
    }
}