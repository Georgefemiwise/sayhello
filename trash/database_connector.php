<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'sayhello_schema';

// establish a connection
 $conn = mysqli_connect($servername, $username, $password, $database);
         
// Check connection
 if($conn === false){
	die("ERROR: Could not connect. <br>". mysqli_connect_error());
        }
	
?>
