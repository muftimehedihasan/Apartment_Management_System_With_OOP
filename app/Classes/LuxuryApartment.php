<?php 

namespace App\Classes;

use App\Classes\Apartment;
use App\Interfaces\HasAmenities;

class LuxuryApartment extends Apartment implements HasAmenities{
    
    private $amenities;

    public function __construct($apartmentNumber, $area, $numberofBedrooms, $amenities){
        parent::__construct($apartmentNumber, $area, $numberofBedrooms);
        $this->amenities = $amenities;
    }

    public function calculateRent(){
        $this->rent = $this->area * 0.5 + $this->numberofBedrooms * 150;
       
    }

    public function getAmenities(){
        return implode(',', $this->amenities);
    }
}