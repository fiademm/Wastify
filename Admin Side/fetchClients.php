<?php


include 'conn.php';

$query= "select * from Client limit 50"; // Fetch all the data from the table drivers

$result=mysqli_query($dbCon,$query);

?>