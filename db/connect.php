<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "banhang";
// Create connection
$conn = new mysqLi($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("kết nối không thành công" . $conn->connect_error);
}
echo 'Kết nối thành công';
