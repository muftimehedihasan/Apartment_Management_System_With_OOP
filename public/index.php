<?php 
use App\Classes\Owner;
use App\Classes\LuxuryApartment;
use App\Classes\StandardApartment;

include "autoloader.php";

$standardApartment = new StandardApartment("501", 1800, 2);
$luxuryApartment = new LuxuryApartment("502", 1800, 2, ['TV', 'AC']);

$standardApartment->setBalcony( true );

$standardApartment->calculateRent();


$owner1 = new Owner("Nabil", $standardApartment);
$owner2 = new Owner("Ali", $luxuryApartment);


echo "Standard Apartment Details:\n";
$standardApartment->displayApartmentDetails();


echo "\nLuxury Apartment Details:\n";
$luxuryApartment->displayApartmentDetails();
echo "Amenities: " . $luxuryApartment->getAmenities() . "\n";


// Display owner details
echo "\nOwner Details:\n";
$owner1->displayOwnerDetails();
$owner2->displayOwnerDetails();