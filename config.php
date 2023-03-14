
<?php

$servername = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'emailgenics';

// establish a connection
function db_config()
{
 global $servername, $username, $password, $database;
 $conn = mysqli_connect($servername, $username, $password, $database);

 // Check connection
 if (false === $conn) {
  die("ERROR: Could not connect. <br>" . mysqli_connect_error());
 }

 return $conn;
}
?>
