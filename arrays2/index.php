<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array multidimentional</title>
  </head>
  <body>
    <?php

    $alimentos = array(
      "frutas" => array(
        "banano",
        "manzana",
        "mandarina"
      ),
      "verduras" => array(
        "zanahoria",
        "papa",
        "yuca",
        "cebolla",
        "arracacha"
      ),
      "granos" => array(
        "arros",
        "frijoles",
        "lentejas"
      )
    );

    foreach($alimentos as $tipoalimento => $alimentname) {
      echo "<h1>$tipoalimento</h1>";
      echo "<ul>";

      foreach ($alimentname as $aliment) {
        echo "<li>$aliment</li>";
      }

      echo "</ul>";
    }


    echo var_dump($alimentos);

    ?>
  </body>
</html>
