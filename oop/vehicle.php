<?php

class Coche {
  protected $color;
  protected $km; // Kilometer of usage
  protected $whelsCount; // How many whels have the car

  function __construct() {
    $this->color = "";
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

  public function getCarInfo() {
    echo <<<INFO

    <ul>
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

?>
