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
$conn->query("SET NAMES 'utf8mb4'");
$conn->query("SET CHARACTER SET utf8mb4");
$conn->query("SET SESSION collation_connection = 'utf8mb4_unicode_ci'");
