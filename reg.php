<?php
require 'db/connect.php';
if (isset($_POST['btn-reg'])) {


    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    if (!empty($username) && !empty($password) && !empty($fullname) && !empty($address) && !empty($email) && !empty($gender) && !empty($phone)) {
        echo "<pre>";
        print_r($_POST);

        $sql = "INSERT INTO `khachhang` (`HoTenKH`, `GioiTinh`, `DiaChi`, `SoDienThoai`, `username`, `password`, `email`) VALUE('$fullname', '$gender', '$address', '$phone', '$username', '$password', '$email' )";

        if ($conn->query($sql) === TRUE) {
            echo "Thêm dữ liệu thành công";
        } else {
            echo "Lỗi {$sql}" . $conn->error;
        }
    } else {
        echo "bạn cần phải nhập đầy đủ thông tin trước khi đăng ký!";
    }
}

?>

<a href="index.php">Trang chủ</a>