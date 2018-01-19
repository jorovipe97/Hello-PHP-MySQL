<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OOP3</title>
  </head>
  <body>
    <?php

    require("oop3_classes.php");

    $car1 = new Vehiculo("#16a085");

    $camion1 = new Camion();

    $camion1->encender();

    $car1->getCarInfo();
    $camion1->getCarInfo();

    ?>
  </body>
</html>
