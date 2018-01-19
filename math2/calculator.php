<?php
function calc($a, $b, $op) {
  $res = 0;

  switch ($op) {
    case 'Suma':
      $res = $a + $b;
      break;

    case 'Resta':
      $res = $a - $b;
      break;

    case 'Multiplicación':
      $res = $a * $b;
      break;

    case 'Division':
      if ($num2 == 0) {
        $res = "Division by zero";
        break;
      }
      $res = $a / $b;
      break;

    case 'Modulo':
      $res = $a % $b;
      break;
  }

  return $res;
}

function getSignOperation($operation) {
  $res = '';
  switch ($operation) {
    case 'Suma':
      $res = '+';
      break;

    case 'Resta':
      $res = '-';
      break;

    case 'Multiplicación':
      $res = 'x';
      break;

    case 'Division':
      $res = '/';
      break;

    case 'Modulo':
      $res = '%';
      break;
  }
  return $res;
}

?>
