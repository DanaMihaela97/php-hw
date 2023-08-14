<?php

class Vehicle{

    protected $year;
    protected $model;

    public function __construct($year, $model){
        $this->year = $year;
        $this->model = $model;
    }
    public function vehicleDetails(){
       
        echo "Year of this vehicle: {$this->year}.<br>";
        echo "Model of this vehicle: {$this->model}.<br>";
    }    
    }

    class Bus extends Vehicle{
        private $color;
    
        public function __construct($year,$model,$color){
            parent::__construct($year, $model);
            $this->color = $color;
        }
    
        public function getColor(){
            echo "The color is: {$this->color}.<br>";
        }
    }
    
    $myBus=new Bus(2000, "ISUZU", "Black");
    $myBus->vehicleDetails();
    $myBus->getColor();

?>
