<?php
session_start();

// Xác định thông tin tài khoản
$validUser = "admin";
$validPass = "password";

// Xử lý đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    if ($user === $validUser && $pass === $validPass) {
        // Đăng nhập thành công, lưu thông tin đăng nhập vào session
        $_SESSION["logged_in"] = true;
        $_SESSION["user"] = $user;
        echo "Đăng nhập thành công!";
        // Chuyển đến trang đặt hàng
        header("Location: indexadmin.php");
        exit();
    } else {
        // Đăng nhập thất bại
        echo "Sai thông tin đăng nhập!";
    }
}
