<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Result</title>
    <style media="screen">
      h1, h2 {
        font-family: helvetica, sans-serif;
        color: #c0392b;
      }
    </style>
  </head>
  <body>
    <?php
    require("calculator.php");
    ?>

    <a href="/phptuts/math2/">Do other operation</a>

    <h2>
      <?php

      echo $_GET["numberA"] . " " . getSignOperation($_GET["operation"]) . " " . $_GET["numberB"] . " = "

      ?>
    </h2>
    <h1>
      <?php
      if ( isset( $_GET["calculate"] ) ) {

        $num1 = $_GET["numberA"];
        $num2 = $_GET["numberB"];
        $operation = $_GET["operation"];

        echo calc($num1, $num2, $operation);
      }
       ?>
    </h1>

  </body>
</html>
