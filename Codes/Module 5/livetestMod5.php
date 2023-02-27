<?php

class Car{
    private $make;
    private $model;
    private $year;

    function __construct($make, $model, $year){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    function set_make($make){
        $this->make = $make;
    }

    function set_model($model){
        $this->model = $model;
    }

    function set_year($year){
        $this->year = $year;
    }

    function get_make(){
        return $this->make ;
    }

    function get_model(){
        return $this->model;
    }

    function get_year(){
        return $this->year;
    }

    function display_info(){
        echo("Car Make: ".$this->make);
        echo("\nCar Model: ".$this->model);
        echo("\nCar Year: ".$this->year);
    }
}

$obj = new Car('Toyota','Corolla',2015);
$obj->display_info();
echo("\n");

$obj->set_make('Honda');
$obj->set_model('Civic');
$obj->display_info();
