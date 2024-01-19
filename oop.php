<?php 
    class vehicle {
        public $brand;
        public $speed;
        function __construct($brandName, $speedValue) {
            $this->brand = $brandName; # to initialize brand
            $this->speed = $speedValue; # to initialize speed
        }
            function printDetails() {
                echo "Vehicle brand is: ". $this->brand . " ";
                echo "Vehicle's speed is: " . $this->speed . " ";
            }
    }
    $car1 = new Vehicle("Toyota", 160);
    $car2 = new Vehicle("Audi", 180);
    $car3 = new Vehicle("Benz", 180);
    $car4 = new Vehicle("Lexus", 170);

    $car1->printDetails();
    $car2->printDetails();
    $car3->printDetails();
    $car4->printDetails();
?>