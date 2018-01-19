<?php

const DB_HOST = "localhost";
const DB_NAME = "php_mysql_tuts";
const DB_USERNAME = "root";
const DB_PASSWORD = "123456";

$mysql = new Mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
  echo "Error in DB";
  exit();
}
$mysql->set_charset("utf8mb4");

?>
