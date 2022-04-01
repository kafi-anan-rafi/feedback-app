<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'rafi');
define('DB_PASS', 'rafi');
define('DB_NAME', 'php-dev');

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if ($conn->connect_error) {
  die('Connection failed!' . $conn->connect_error);
}
