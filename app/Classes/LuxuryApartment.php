<?php 

namespace App\Classes;

use App\Classes\Apartment;
use App\Interfaces\HasAmenities;

// This a subclas of apartment
class LuxuryApartment extends Apartment implements HasAmenities{
    
    // We have a private property for amenities
    private $amenities;

    // We have a constructor for LuxuryApartment and get parameters from parent class with his properties
    // We call the parent constructor
    public function __construct($apartmentNumber, $area, $numberofBedrooms, $amenities){

        // We call the parent constructor
        parent::__construct($apartmentNumber, $area, $numberofBedrooms);
        // We set the private property for amenities
        $this->amenities = $amenities;
    }

    // We implement the abstract method calculateRent that have in main class apartment
    public function calculateRent(){
        $this->rent = $this->area * 0.5 + $this->numberofBedrooms * 150;
       
    }

    // We implement the interface HasAmenities 
    public function getAmenities(){
        return implode(',', $this->amenities);
    }
}