<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arrays</title>
  </head>
  <body>
    <?php

    // En php uno puede almacenar tipos heterogenios en sus arrays

/*
    $sem[] = "lunes";
    $sem[] = "martes";
    $sem[] = "miercoles";
*/

    $sem = array(
      "lunes",
      "martes",
      "miercoles",
      "jueves",
      "viernes",
      "sabado",
      "domingo"
    );

    echo $sem[3] . '</br>';

    $datos = array(
      "nombre" => "jose",
      "last_nombre" => "romualdo",
      "apellido" => "villalobos perez",
      "edad" => 20
    );
    $foo = "hola";
    $datos = array_merge($datos, array(
      "pais"=>"colombia",
      "city"=>"barrancabermeja"
    ));
    sort($sem);

    //var_dump( $datos );
    if (is_array($foo)) {
      echo "Es array";
    } else {
      echo "No es array";
    }

    echo "</br>";

    // Recorriendo un array asociativo
    foreach ($datos as $key => $value) {
      # code...
      echo "A $key le corresponde $value</br>";
    }

    echo "</br></br>";

    for ($i = 0; $i < count($sem); $i++) {
      echo $sem[$i] . "</br>";
    }

    echo "</br></br>";
    foreach ($sem as $day) {
      # code...
      echo $day . "</br>";
    }

    // Recorriendo un array indexado


    ?>
  </body>
</html>
