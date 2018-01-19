<?php

if ( isset($_POST["concat"]) ) {
  $full_name = "Hello ". $_POST["name"] ." ". $_POST["surname"];
  echo $full_name;
}

?>
