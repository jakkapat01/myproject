<?php
session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header('Location: login.php'); // ส่งผู้ใช้ไปยังหน้า login ถ้ายังไม่เข้าสู่ระบบ
    exit();
}

header('Location: booktable.php');
?>