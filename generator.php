<?php  

//database connection configuration
require 'config.php';
$conn = db_config();


//inputted value 
$school = strtolower($_POST['school']);
$program =strtolower($_POST['program']) ;
$year = strtolower($_POST['year']);
$num_in_class =strtolower($_POST['numInClass']);


// get school
function getSchool($conn, $school)
{
 $school_sql = "SELECT * FROM school WHERE id = $school";
 $result     = mysqli_query($conn, $school_sql);
 $row        = mysqli_fetch_assoc($result); // add semicolon
 $name       = $row['name'];
 return $name;
}


// generate email addresses and save to database
for ($i = 1; $i <= $num_in_class; $i++) {
 $index       = sprintf('%03d', $i);
 $db_school   = getSchool($conn, $school);
 $address     = $program . $year . $index . '@' . $db_school . '.edu.gh';
 $student_sql = "INSERT INTO email_address (address) VALUES ('$address')";
 $result      = mysqli_query($conn, $student_sql);
 if ($result) {
  echo 'saved';
 }
}

 ?>
