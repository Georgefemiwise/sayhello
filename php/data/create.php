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
            else{
                echo "<script>alert('Saved');</script>";
       }
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
    echo "
		<div class='body'>
			<div class='loading'>
				<h4>Loading...</h4>
			</div>
		</div>
		

		<style>
		
			.body {
				position: absolute;
				width: 100vw;
				height: 95vh;
				display: grid;
				place-content: center;
				background-color: rgba(24, 20, 255, 0.863);

			}

			.loading {
				position: relative;
				display: grid;
				place-content: center;
				height: 30px;
				color: rgb(244, 243, 248);
				font-size: larger;
			}

			.loading::after {
				position: absolute;
				content: '';
				width: 15px;
				height: 4px;
				background-color: rgb(246, 0, 0);
				bottom: 0;
				animation: loader linear infinite 2s;
			}

			@keyframes loader {
				0% {
					background-color: #ff0000;
				}

				30% {
					background-color: #00f80c;
				}

				60% {
					transform: translateX(50px);
					background-color: rgb(255, 0, 217);
				}

				100% {
					background-color: #f3e40d;
				}

			}

		</style>
	";
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



session_start();
include('input.php');

$user_id=$_POST['user_id'];
$user_name=$_POST['user_name'];
$proj_id=$_POST['proj_id'];


$qry="SELECT * FROM proj WHERE proj_id=$proj_id";
$result = mysqli_query($qry);
$num_rows = mysqli_num_rows($result);

if($num_rows > 0){
    mysqli_query("INSERT INTO user(user_id, user_name, proj_id) 
    VALUES('$user_id', '$user_name', $proj_id)");
}else{
    echo "Team is not valid!!!";
}
mysqli_close($con);
header("location: input.php?remarks=success"); 

mysqli_error($con); 
?>