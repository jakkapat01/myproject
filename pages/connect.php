<?php
if ($open_connect != 1){
    die(header('location:login.php'));
}
$hosname = "localhost";
$username = "root";
$password = "254810";
$database = "programming_world";
$port = NULL;
$socket = NULL;
$connect = mysqli_connect($hosname, $username, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    mysqli_set_charset($connect, "utf8");
}
?> 