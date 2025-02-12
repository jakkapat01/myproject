<?php
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
            if($result_check_account['role_account'] == 'member'){
                die(header('Location: index.html')); //เข้าสู่ระบบสำเร็จ
            }else if($result_check_account['role_account'] == 'admin'){
                die(header('Location: admin.php')); //เข้าสู่ระบบสำเร็จ
            }
        }else{
            die(header('Location: login.php')); //รหัสผ่านไม่ถูกต้อง
        }
    }else{
        die(header('Location: login.php')); //ไม่มีผู้ใช้นี้
    }
}else{
    die(header('Location: login.php')); //ไม่มีข้อมูล
}
?>