<?php
  require 'connection/database_connector.php';

//  Taking all 5 values from the form data(input)


        $school_Name =  $_POST['schName'];
        $school_location = $_POST['school_location'];
        $student_name =  $_POST['student_name'];
        $program = $_POST['program'];
        $year_enrolled = $_POST['year'];

        
         echo   " $school_Name $school_location $student_name $program $year";

// $year_enrolled = 21;
// $school = 'ttu';
// $program = 'bcict';


   $school_sql = "INSERT INTO school (name, location)
           VALUES ('$school_Name','$school_location')";


           
// for ($index = 1; $index <= 200; $index++ ){
    
//     // leading zeros
//    $re_index = sprintf('%03d',$index);
    
    // sql insert into database
   $student_sql = "INSERT INTO student (name, email_address, school_id, program, year)
           VALUES ('$program$year@ttu.edu.gh','$school_Name','$program','$year_enrolled')";
    
    $result = mysqli_query($conn, $sql);
    
    // if(!$result){
    //     die('Invalid Query: ');
    // }else{
    //     echo "<script>alert('$school email for $program is created..');</script>";
    //     header("location: ../dashboard.php");
        
//     }
// }


mysqli_close($conn);
 ?>
