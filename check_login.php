<?php
session_start();
$is_logged_in = isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;
// ตรวจสอบว่ามี id ที่ส่งมาหรือไม่
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // ตรวจสอบการล็อกอิน
    if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
        // ถ้าล็อกอินแล้ว ให้ไปหน้าจองโต๊ะ
        header("Location: booking.php?id=$id");
        exit();
    } else {
        // ถ้ายังไม่ได้ล็อกอิน
        // เก็บ URL ที่ต้องการจะไปหลังจากล็อกอินสำเร็จ
        $_SESSION['redirect_to'] = "booking.php?id=$id";
        
        // ส่งไปหน้าล็อกอิน
        header("Location: login.php");
        exit();
    }
} else {
    die("Error: No ID provided in check_login.php");
}
?>