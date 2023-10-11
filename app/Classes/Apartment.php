<?php 

namespace App\Classes;

// first of all we are going to create a class called apartment
// this is a abstract class becuse in this class have a abstruct method

abstract class Apartment {
    // in abstract class we have properties
    protected $apartmentNumber;
    protected $area;
    protected $numberofBedrooms;
    protected $rent;
    

// in abstract class we have methods
// in abstract class we have a constructor
// in constructor we have initial properties
public function __construct($apartmentNumber, $area, $numberofBedrooms){
    $this->apartmentNumber = $apartmentNumber;
    $this->area = $area;
    $this->numberofBedrooms = $numberofBedrooms;
    $this->calculateRent();
}

// in abstract class we have a method called calculateRent
abstract public function calculateRent();
// in abstract class we have a method called displayApartmentDetails
// in displayApartmentDetails we have display properties
public function displayApartmentDetails(){
    echo "Apartment Number: " . $this->apartmentNumber . "<br>";
    echo "Area: " . $this->area . "<br>";
    echo "Number of Bedrooms: " . $this->numberofBedrooms . "<br>";
    echo "Monthly Rent: " . $this->rent . "<br>";
}

// in abstract class we have a method called getApartmentNumber
public function getApartmentNumber(){
    return $this->apartmentNumber;
}
}

