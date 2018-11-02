<?php
class car {
    public $carBrand;
    public $carYear;
    public $carPrice;

    public function getCar()
    {
        $cars = $this->carBrand . ' ' . $this->carYear . ' ' . $this->carPrice;
        return $cars;
    }
}

    $subaru = new car ();
    $subaru -> carBrand = 'subaru';
    $subaru -> carYear = '2018';
    $subaru -> carPrice = '1 000 000';

    $toyota = new car ();
    $toyota -> carBrand = 'toyota';
    $toyota -> carYear = '2017';
    $toyota -> carPrice = '700 000';



class tv {
    public $tvBrand;
    public $tvDiagonal;
    public $tvResolution;

    public function __construct($tvBrand, $tvDiagonal, $tvResolution);
    {
        $this->tvBrand = $tvBrand;
        $this->tvDiagonal = $tvDiagonal;
        $this->tvResolution = $tvResolution;
    }
}

    $sony = new tv ('sony', 32, '1920 x 1080');
    $samsung = new tv ('samsung', 40, '1920 x 1080');

class pen {
    public $penBrand;
    public $penColor;
    public $penPrice;

public function getDiscountPrice {
    return ($this->penBrand === 'Parker') ? ($this->penPrice * 0.7))
    } 

    $penParker = new pen();
    $penParker->penBrand = 'Parker';
    $penParker->penColor = 'blue';
    $penParker->penPrice = 200;

    $delta = new pen();
    $delta->penBrand = 'Delta';
    $delta->penColor = 'black';
    $delta->penPrice = 100;

}


class duck {
    public $duckColor;
    public $duckWeight;
    public $duckAge;
    public function getDuck()
    {
    echo $this-duckColor . ' ' . $this->duckWeight . ' ' . $this->duckAge;
    }
}
    $grayduck = new duck();
    $grayduck->duckColor = 'gray';
    $grayduck->duckWeight = 3;
    $grayduck->duckAge = 1;

    $star = new duck();
    $star->duckColor = 'black';
    $star->duckWeight = 2;
    $star->duckAge = 1;


class Product
    {
    public $type;
    public $price;
    public $weight;
    public function price()
    {
          
    }
}
    $lg = new Product();
    $samsung = new Product();
?>