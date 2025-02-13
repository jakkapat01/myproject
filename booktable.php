<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once 'condb.php';

//query
$query = "SELECT * FROM tbl_table ORDER BY id ASC";
$result = mysqli_query($condb, $query);



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>จองโต๊ะ</title>
    <style type="text/css">
    .devbanban{
    background-color: #ffffff;
    }
    </style>
  </head>
  <body style="background-color: #000000;">
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-12 col-sm-11 col-md-7 devbanban p-4">
      <h4 class="text-center text-danger">เลือกโต๊ะ</h4>
      <div class="alert alert-warning text-center" role="alert">
        Tables
      </div>
      <hr>
      <div class="row justify-content-center">
        <?php foreach ($result as $row) {
          if ($row['table_status'] == 0) { // ว่าง
            echo '<div class="col-2 m-1">';
            echo '<a href="booking.php?id='.$row["id"].'&act=booking" class="btn btn-success">'.$row['table_name'].'</a></div>';
          } else { // ถูกจอง
            echo '<div class="col-2 m-1">';
            echo '<a href="#" class="btn btn-secondary disabled">'.$row['table_name'].'</a></div>';
          }
        } ?>
      </div>
      <p class="text-center" style ="padding-top: 30px;" >*เขียว = ว่าง, เทา = ไม่ว่าง</p>
    </div>
  </div>
  <hr>
  <center> 
    <font color="white"> สนับสนุนได้ที่ 
      <a href="https://www.instagram.com/jatokapoa?igsh=MTRrc2ljc3VxcWd6" target="_blank"> คลิก </a>
    </font>
  </center>
</body>

    </html>