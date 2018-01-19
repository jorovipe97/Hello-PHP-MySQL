<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>References</title>
  </head>
  <body>
    <h1>Parametro por valor y por referencia</h1>
    <?php
    /*
    Parametro por valor y por referencia
    */
    $count = 7;

    function bar(& $a) {
      $a++;
    }
    bar($count);

    function foo ($a) {
      $a++;
      return $a;
    }

    echo foo(5) . '</br>';
    echo $count . '</br>';
    ?>

    <h1>Referencias</h1>
    <?php
    $q = 2;
    $w = $q;
    echo $w . '</br>';
    $q = 4;
    echo $w . '</br>';

    $a = 3;
    $s = &$a;
    echo $s . '</br>';
    $a = 6;
    echo $s . '</br>';
    $s = "s"; // $s y $a apuntan al mismo valor por lo tanto cambiar $s cambiara el valor de $a
    echo '$a: ' . $a . ' , $s: ' . $s . '</br>';
    $a = 9;
    echo $s . '</br>';

    ?>

  </body>
</html>
