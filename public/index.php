<?php 
use App\Classes\Owner;
use App\Classes\LuxuryApartment;
use App\Classes\StandardApartment;

include "autoloader.php";

// we create an object for StandardApartment
$standardApartment = new StandardApartment("501", 1800, 2);

// we create an object for LuxuryApartment
$luxuryApartment = new LuxuryApartment("502", 1800, 2, ['TV', 'AC']);

// we set balcony for standardApartment
$standardApartment->setBalcony( true );

// we calculate rent
$standardApartment->calculateRent();

// We create two object for Owners
$owner1 = new Owner("Nabil", $standardApartment);
$owner2 = new Owner("Ali", $luxuryApartment);

// Display Standard apartment details
echo "Standard Apartment Details:\n";
$standardApartment->displayApartmentDetails();

// Display Luxury apartment details
echo "\nLuxury Apartment Details:\n";
$luxuryApartment->displayApartmentDetails();
echo "Amenities: " . $luxuryApartment->getAmenities() . "\n";


// Display owners details
echo "\nOwner Details:\n";
$owner1->displayOwnerDetails();
$owner2->displayOwnerDetails();