<?php
  require 'connection/database_connector.php';

 // Taking all 5 values from the form data(input)
     //    $first_name =  $_REQUEST['first_name'];
     //    $last_name = $_REQUEST['last_name'];
     //    $gender =  $_REQUEST['gender'];
     //    $address = $_REQUEST['address'];
     //    $email = $_REQUEST['email'];
         

$year_enrolled = 21;
$school = 'ttu';
$program = 'computer science';


for ($index = 1; $index <= 200; $index++ ){
    
    $re_index = sprintf('%03d',$index);
    $sql = "INSERT INTO student (email_address, school, program, year_enrolled) 
    VALUES ('bcict21$re_index@ttu.edu.gh','$school','$program','$year_enrolled')";
    $result = mysqli_query($conn, $sql);
    
    if(!$result){
        die('Invalid Query: ');
    }else{
        echo "<script>alert('$school email for $program is created..')</script>";
        header("location: ../dashboard.php");
        
    }
}


mysqli_close($conn);













// $addres =[];
// for ($i=1; $i <= 100; $i++){ // array_push($addres,$i); // } // foreach($addres as $fruits){ // echo sprintf('%03d',
	// $fruits) . "<br>" ; // } ?>
