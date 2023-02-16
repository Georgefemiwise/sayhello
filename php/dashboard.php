<?php
  require './data/connection/database_connector.php';
echo '<h1> dashborad </h1>';

$total_row_sql = "SELECT * from student";

if ($result = mysqli_query($conn, $total_row_sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("Total rows in this table :  %d\n", $rowcount);
 }
?>
