<?php
// Kết nối đến cơ sở dữ liệu
include_once(__DIR__ . '/./connect.php');

// Lấy id từ form
$id = $_GET['id'];

// Thực hiện truy vấn DELETE để xóa dữ liệu
$query = "DELETE FROM sanpham WHERE id=$id;";


$result = mysqli_query($conn, $query);



header("location: listproduct.php");
