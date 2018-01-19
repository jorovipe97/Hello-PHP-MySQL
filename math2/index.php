<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Math operators</title>
  </head>
  <body>

    <form class="" action="result.php" method="get">
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
        <input type="submit" name="calculate" id="calc" value="do calcs">
      </p>


      <span>
        <?php
          $num1 = round(5.12935, 2);

          $op = "11";
          $res = bindec( $op );

          echo 'Max rand value ' . getrandmax() . '</br>';
          echo rand() . '</br>';
          echo $num1 . '</br>';
          echo $res . '</br>';
        ?>
      </span>

    </form>

  </body>
</html>
