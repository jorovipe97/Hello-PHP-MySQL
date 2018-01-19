<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OOP</title>
  </head>
  <body>
    <?php

    class Coche {

      public $numberOfWhels;
      public $color;
      public $kilometers;

      // Metodo constructor
      function __construct() {
        $this->numberOfWhels = 4;
        $this->color = "";
        $this->kilometers = 0;
      }


      function arrancar() {
        echo "I am starting</br>";
      }

      function frenar() {
        echo "I am stoping</br>";
      }

      function girar() {
        echo "I am turning</br>";
      }

    };


    $car1 = new Coche();
    $car1->arrancar();
    $car1->color = "#8e44ad";
    $car1->frenar();

    ?>

    <a href="/phptuts/oop/oop2.php">More oop exercices</a>
  </body>
</html>
