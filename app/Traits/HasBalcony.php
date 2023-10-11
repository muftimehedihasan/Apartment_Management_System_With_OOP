<?php 

namespace App\Traits;

// This is a trait for extra features
trait HasBalcony{
    protected $balcony;

    public function setBalcony($balcony){
            $this->balcony = $balcony;
    }
public function hasBalcony(){
    return $this->balcony;
}

}
 
?>