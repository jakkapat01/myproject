<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$open_connect = 1;
require('connect.php');

if(isset($_POST['email_account']) && isset($_POST['password_account'])){
    $email_account = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['email_account']));
    $password_account = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['password_account']));
    $query_check_account = "SELECT * FROM account WHERE email_account = '$email_account'";
    $call_back_check_account = mysqli_query($connect, $query_check_account);
    if(mysqli_num_rows($call_back_check_account) == 1){
        $result_check_account = mysqli_fetch_assoc($call_back_check_account);
        $hash = $result_check_account['password_account'];
        if(password_verify($password_account, $hash)){
            $user_id = $result_check_account['user_id'];
            
            $_SESSION['is_logged_in'] = true; // ตั้งค่านี้เมื่อผู้ใช้ล็อกอินสำเร็จ
            $_SESSION['user_id'] = $user_id; // ตัวอย่างการจัดเก็บ user_id

            if($result_check_account['role_account'] == 'member'){
                header('Location: index.php'); // เข้าสู่ระบบสำเร็จ
                exit();
            } else if($result_check_account['role_account'] == 'admin'){
                header('Location: admin.php'); // เข้าสู่ระบบสำเร็จ
                exit();
            }
        } else {
            header('Location: login.php'); // รหัสผ่านไม่ถูกต้อง
            exit();
        }
    } else {
        header('Location: login.php'); // ไม่มีผู้ใช้รายนี้
        exit();
    }
} else {
    header('Location: login.php'); // ไม่มีข้อมูลการล็อกอิน
    exit();
}
?>