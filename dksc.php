<?php
require 'db/connect.php';
if (isset($_POST['btn-dksc'])) {



    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $lydo = $_POST['lydo'];
    $chitiet = $_POST['chitiet'];
    if (!empty($fullname) && !empty($address) && !empty($email) && !empty($phone) && !empty($chitiet) && !empty($lydo)) {
        echo "<pre>";
        print_r($_POST);

        $sql = "INSERT INTO `dksc` (`HoTenKH`, `email`, `Lydo`, `Diachilayhang`, `sodienthoai`, `ChiTiet`) VALUE('$fullname', '$email', '$address', '$lydo', '$phone', '$chitiet' )";

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