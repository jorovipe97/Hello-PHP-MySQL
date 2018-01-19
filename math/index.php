<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Math operators</title>
  </head>
  <body>

    <form class="" action="index.php" method="post">
      <p>
        <input id="num1" type="number" name="numberA" value="" placeholder="Number a" required>
        <input id="num2" type="number" name="numberB" value="" placeholder="Number b" required>
        <select id="opr" class="" name="operation">
          <option>Suma</option>
          <option>Resta</option>
          <option>Multiplicación</option>
          <option>Division</option>
          <option>Modulo</option>
        </select>
      </p>

      <p>
        <input type="submit" name="calculate" id="calc" value="Calcular">
      </p>
    </form>

    <?php

    if ( isset( $_POST["calculate"] ) ) {

      $num1 = $_POST["numberA"];
      $num2 = $_POST["numberB"];
      $operation = $_POST["operation"];
      $res = 0;

      switch ($operation) {
        case 'Suma':
          $res = $num1 + $num2;
          break;

        case 'Resta':
          $res = $num1 - $num2;
          break;

        case 'Multiplicación':
          $res = $num1 * $num2;
          break;

        case 'Division':
          if ($num2 == 0) {
            $res = "Division by zero";
            break;
          }
          $res = $num1 / $num2;
          break;

        case 'Modulo':
          $res = $num1 % $num2;
          break;
      }

      echo "<h1> $res </h1>";

    }


     ?>
  </body>
</html>
