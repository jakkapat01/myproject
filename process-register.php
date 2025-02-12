
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php

$open_connect = 1;
require('connect.php');

if(isset($_POST['username_account']) && isset($_POST['email_account']) && isset($_POST['password_account1']) && isset($_POST['password_account2'])){
     $username_account = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['username_account']));
     $email_account = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['email_account']));
     $password_account1 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['password_account1']));
     $password_account2 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['password_account2']));
    
     if(empty($username_account)){
        die(header('Location: signup.php')); //คุณไม่ได้กรอกชื่อผู้ใช้
     }elseif(empty($email_account)){
        die(header('Location: signup.php')); //คุณไม่ได้กรอกอีเมล
     }elseif(empty($password_account1)){
        die(header('Location: signup.php')); //คุณไม่ได้กรอกรหัสผ่าน
     }elseif(empty($password_account2)){
        die(header('Location: signup.php')); //คุณไม่ได้กรอกการยืนยันรหัสผ่าน
     }elseif($password_account1 != $password_account2){
        die(header('Location: signup.php')); //กรุณายืนยันรหัสผ่านให้ถูกต้อง
     }else{
         $query_check_email_account = "SELECT email_account FROM account WHERE email_account = '$email_account'";
         $call_back_query_check_email_account = mysqli_query($connect, $query_check_email_account);
         if(mysqli_num_rows($call_back_query_check_email_account) > 0){
            die(header('Location: signup.php')); //มีผู้ใช้อีเมลนี้แล้ว
         }else{
             $password_account = password_hash($password_account1, PASSWORD_DEFAULT);
             $query_create_account = "INSERT INTO account (username_account, email_account, password_account, role_account, images_account, login_count_account, lock_account, ban_account) 
            VALUES ('$username_account', '$email_account', '$password_account', 'member', 'default_images_account.jpg', 0, 0, NULL)";


             $call_back_create_account = mysqli_query($connect, $query_create_account);
             if(!$call_back_create_account){
                die("Error: " . mysqli_error($connect));
            }else{
                die(header('Location: login.php')); //สมัครสมาชิกสำเร็จ
            }
         }
     }

}else{
    die(header('Location: signup.php')); //ไม่มีข้อมูล
    exit();
}

?>