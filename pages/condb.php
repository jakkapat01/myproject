<?php 
//connect database
$condb= mysqli_connect("localhost","root","254810","workshop_booking_table") or die("Error: " . mysqli_connect_error());
mysqli_query($condb, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
?>