<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Constatns</title>
  </head>
  <body>
    <?php
    include("vars.php");

    define("NAME", "Jose");
    define("NAME", "Luisa"); // Una constante no se puede redefinir

    function foo($s) {
      define("SURNAME", $s);
    }
    FOO("Villalobos"); // Las funciones, clases, metodos en php son case-insensitive
    foo("Perez");

    function showConst() {
      // Las constantes son accesibles en el ambito local sin necesidad del keyword global, ¿son como super globales?
      echo "Showing constant NAME: " . NAME . "</br>";
      ECHO "Function " . __FUNCTION__ . "()</br>";
      echo $GLOBALS["zoo"] . "</br>";
    }

    echo "The name is " . NAME . "</br>";
    showConst();
    echo "The surname is " . SURNAME . "</br>";

    echo "This is executed at line: " . __LINE__ . "</br>";
    echo "This file is in " . __DIR__

    ?>
  </body>
</html>
