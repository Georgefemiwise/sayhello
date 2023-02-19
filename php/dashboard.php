<!DOCTYPE html>
<html lang="en">

	<head>
		<?php require './data/connection/database_connector.php';?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>

	<body>

		<?php 
		$total_row_sql = "SELECT * from student";
		if ($result = mysqli_query($conn, $total_row_sql)) {

			// Return the number of rows in result set
			$rowcount = mysqli_num_rows( $result );
	
			// Display result
			printf("Total rows in this table :  %d\n", $rowcount);}?>
	</body>

</html>
