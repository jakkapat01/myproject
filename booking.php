<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once 'condb.php';
//query
$query = "SELECT * FROM tbl_table WHERE id=$_GET[id]";
$result = mysqli_query($condb, $query);
$row = mysqli_fetch_array($result);
//print_r($row);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>แสดงข้อมูลโต๊ะเพื่อทำการจอง</title>
    <style type="text/css">
    .devbanban{
    background-color: #ffffff;
    }
    </style>
  </head>
  <body style="background-color:black;">
  <div class="container d-flex justify-content-center align-items-center min-vh-100 mt-5">
    <div class="col-12 col-sm-11 col-md-7 devbanban bg-white p-4 rounded">
      <h4 class="text-center text-danger">กรอกข้อมูล</h4>
      <div class="alert alert-warning text-center" role="alert">
        <b class="text-danger"> กรอกข้อมูลให้ตรงตามความจริง </b>
      </div>
      <form action="save_booking.php" method="post">
        <div class="form-group">
          <label>เลขโต๊ะ</label>
          <input type="text" class="form-control" disabled value="<?php echo $row['table_name']; ?>">
        </div>
        <div class="form-group">
          <label>ผู้จอง</label>
          <input type="text" name="booking_name" class="form-control" required placeholder="ชื่อผู้จอง" minlength="5">
        </div>
        <div class="form-group">
          <label>วันที่</label>
          <input type="date" name="booking_date" class="form-control" required value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>">
        </div>
        <div class="form-group">
          <label>เวลา</label>
          <input type="time" name="booking_time" class="form-control" required>
        </div>
        <div class="form-group">
          <label>เบอร์โทร</label>
          <input type="text" name="booking_phone" class="form-control" required placeholder="เบอร์โทร" minlength="10" maxlength="10">
        </div>
        <input type="hidden" name="table_id" value="<?php echo $_GET['id']; ?>">
        <button type="submit" class="btn btn-success btn-block">บันทึกการจอง</button>
      </form>
    </div>
  </div>
  <footer class="text-center text-white mt-3">
    สนับสนุนได้ที่ <a href="https://www.instagram.com/jatokapoa?igsh=MTRrc2ljc3VxcWd6" target="_blank" class="text-info">คลิก</a>
  </footer>
</body>
    </html>