<?php

//database connection configuration
require 'config.php';
$conn = db_config();

require './template/navigation.php';

// get school
function getSchool($conn, $school)
{
 $school_sql = "SELECT * FROM school WHERE id = $school";
 $result     = mysqli_query($conn, $school_sql);
 $row        = mysqli_fetch_assoc($result); 
 $name       = strtoupper($row['name']);
 return $name;
}


//get count of objects
function getCount($conn, $table )
{
$query  		= "SELECT COUNT(*) FROM $table";
$result 		= mysqli_query($conn, $query);

if ($result) {
 $row  		= mysqli_fetch_row($result);
 $count 		= $row[0];
} else {
echo "Can't retrieve data " . mysqli_error($conn);
 exit;
}
return $count;
}






// $query = "SELECT * FROM email_address WHERE  LIKE %ttu%";
// $result = mysqli_query($conn, $query);

// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_array($result)) { 
// 	echo $row['name'];
    
// 		};
// 	}




// 		// $search_name = "an";
// 		searchUsersByName($conn, $search_name);
		
// 		// Close database connection
// 		mysqli_close($conn);
?>


<a href="./mailSender.php"><button>sender</button></a>

















<style>
		

	</style>
<!-- 
		<h1>Dashboard</h1>
		<div class="container">
			<div class="card">
				<div class="title">School</div>

				<div class="content">




				<!- <div class="sch"><?php echo getSchool($conn, 1); ?></div>
				<div class="sch"><?php echo getSchool($conn, 2); ?></div>
				<div class="sch"><?php echo getSchool($conn, 1); ?></div>
				<div class="sch"><?php echo getSchool($conn, 2); ?></div>
				<div class="sch"><?php echo getSchool($conn, 1); ?></div>
				<div class="sch"><?php echo getCount($conn, 'email_address'); ?></div> 
				</div>
			</div>
			<div class="card">
				<div class="title">email</div>
				 <div class="content"><?phpecho 'red'; ?></div> 
			</div>
			<div class="card">
				<div class="title">messages</div>
				 <div class="content"><?phpecho 'red'; ?></div> 
			</div>

		</div>  -->
