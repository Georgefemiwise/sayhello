<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>

	<body>

	</body>

</html><?php

//  Taking all 5 values from the form data(input)
        $school_Name =  $_POST['schName'];
        $school_location = $_POST['school_location'];
        $student_name =  $_POST['student_name'];
        $program = $_POST['program'];
        $year_enrolled = $_POST['year'];

        
        function sqlSubmit($QueryServer){
            require 'connection/database_connector.php';
             
            $done=mysqli_query($conn, $QueryServer);
            if(!$done){
                    die('Invalid Query');}
                     mysqli_close($conn);
        }




  
        echo   " $school_Name $school_location $student_name $program $year_enrolled";



   $school_sql = "INSERT INTO school (name, location)
           VALUES ('$school_Name','$school_location')";


           
// for ($index = 1; $index <= 200; $index++ ){
    
//     // leading zeros
//    $re_index = sprintf('%03d',$index);
    
//     // sql insert into database
   $student_sql = "INSERT INTO student (name, email_address, school_id, program, year)
 
            VALUES ('$student_name','$program$year_enrolled@ttu.edu.gh','$school_Name','$program','$year_enrolled')";
    

    sqlSubmit($school_sql );
    sqlSubmit($student_sql);
 
    // header("location: ../dashboard.php");
    



$severname = "localhost";
$username = "root";
$password = "";
$dbname = "proj";


//Create connection


$conn = new mysqli($severname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

header("location: input.php?remarks=success"); 

mysqli_error($con); 
?>