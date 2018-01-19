<?php

class Vehiculo {
  protected $color;
  protected $km; // Kilometer of usage
  protected $whelsCount; // How many whels have the car

  function __construct($color) {
    $this->color = $color;
    $this->km = 0;
    $this->whelsCount = 0;
  }

  public function encender() {
    echo "Encendiendo coche</br>";
  }

  public function apagar() {
    echo "Apagando coche</br>";
  }

  public function girar() {
    echo "Girando coche</br>";
  }

  public function setColor($col) {
    $this->color = $col;
  }

  public function setVehiculo($col, $km, $whels) {
    $this->color = $col;
    $this->km = $km;
    $this->whelsCount = $whels;
  }

  public function getCarInfo() {
    $className = get_called_class();

    echo <<<INFO
    <ul>
      <li>
        Class name: $className
      </li>
      <li>Car color:
        <span style="background-color: $this->color;">
          <span style="color: "#000000"; mix-blend-mode: difference;">
            $this->color
          </span>
        </span>
      </li>
      <li>Kilometer usage: $this->km km</li>
      <li>Number of whels: $this->whelsCount</li>
    </ul>

INFO;
  }

}

class Camion extends Vehiculo {
  public $mountContainer;

  function __construct() {
    parent::__construct("#2c3e50");
    echo "Camion inicializado</br>";
  }

  public function setVehiculo($col, $km, $whels, $hasContainer) {
    $this->color = $col;
    $this->km = $km;
    $this->whelsCount = $whels;
    $this->mountContainer = $hasContainer;
  }

  function encender() {
    parent::encender();
    echo "Camion ha arrancado</br>";
  }

}


?>
