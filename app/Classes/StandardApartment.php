<?php 

namespace App\Classes;


use App\Classes\Apartment;
use App\Traits\HasBalcony;

// This a subclas of apartment
class StandardApartment extends Apartment{

// We use a trait for extra features
 use HasBalcony;

 // We implement the abstract method calculateRent that have in main class apartment
 public function calculateRent()
 {
    $this->rent = $this->area * 0.2 + $this->numberofBedrooms * 100;

    // This condition is for balcony, if we have balcony we add 50 to rent
    if ( $this->hasBalcony() ) {
        $this->rent += 50;
    }
 }   
}