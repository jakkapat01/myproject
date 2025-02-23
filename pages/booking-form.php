<?php
require_once 'condb.php';

// ตรวจสอบว่ามีค่า id ถูกส่งมาหรือไม่
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: ID is missing");
}

// แปลง id เป็นตัวเลขเพื่อป้องกัน SQL Injection
$table_id = intval($_GET['id']);

// Query ข้อมูลโต๊ะ
$query = "SELECT * FROM tbl_table WHERE id=$table_id";
$result = mysqli_query($condb, $query) or die(mysqli_error($condb));

// ตรวจสอบว่ามีข้อมูลหรือไม่
$row = mysqli_fetch_array($result);
if (!$row) {
    die("Error: Table not found.");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>แสดงข้อมูลโต๊ะเพื่อทำการจอง</title>
    <style>.devbanban { background-color: #ffffff; }</style>
</head>
<body style="background-color:black;">
<div class="container d-flex justify-content-center align-items-center min-vh-100 mt-5">
    <div class="col-12 col-sm-11 col-md-7 devbanban bg-white p-4 rounded">
        <h4 class="text-center text-danger">กรอกข้อมูล</h4>
        <div class="alert alert-warning text-center"><b class="text-danger"> กรอกข้อมูลให้ตรงตามความจริง </b></div>
        <form action="save_booking.php" method="post">
            <div class="form-group">
                <label>เลขโต๊ะ</label>
                <input type="text" class="form-control" disabled value="<?php echo htmlspecialchars($row['table_name']); ?>">
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
            <input type="hidden" name="table_id" value="<?php echo $table_id; ?>">
            <button type="submit" class="btn btn-success btn-block">บันทึกการจอง</button>
        </form>
    </div>
</div>
<footer class="text-center text-white mt-3">
    สนับสนุนได้ที่ <a href="/" target="_blank" class="text-info">คลิก</a>
</footer>
</body>
</html>
