<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OOP2</title>
  </head>
  <body>
    <?php

    require("vehicle.php");

    $car1 = new Coche();
    $car1->setColor("#f1c40f");
    $car1->encender();
    $car1->getCarInfo();
    $car2 = $car1;
    $car2->setColor("#2980b9");
    $car1->getCarInfo();

    ?>

    <a href="/phptuts/oop/oop3.php">More PHP oop exercices</a>
  </body>
</html>
