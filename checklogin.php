<?php

$username = $_POST['username'];
$password = $_POST['password'];


$servername = "localhost";
$username = "root";
$password = "";
$db = "banhang";

$conn = mysqli_connect($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("kết nối không thành công" . $conn->connect_error);
}

$sql = "SELECT *FROM khachhang WHERE username='$username' AND password='$password'";

$result = mysqLi_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "thành công";
} else {
    echo "fail";
    require_once 'login.php';
}
