<?php
class Car{
public $brand;
public $model;
public $year;

function __construct($brand, $model, $year){
$this->brand = $brand;
$this->model = $model;
$this->year = $year;
}

// createCar metodas, kuris insertina i data
// metodus

public function getBrand()
{
return $this->brand;
}

public function setBrand($brand)
{
$this->brand = $brand;
}

public function getModel()
{
return $this->model;
}

public function setModel($model)
{
$this->model = $model;
}

public function getYear()
{
return $this->year;
}

public function setYear($year)
{
$this->year = $year;
}

}