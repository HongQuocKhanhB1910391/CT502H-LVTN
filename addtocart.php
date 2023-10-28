<?php
require 'db/connect.php';
require './product.php';

session_start();
ob_start();
if (!isset($_POST['giohang']) && ($_POST['giohang'])) {
    $LoaiSP = $_POST['LoaiSP'];
    $TenSP = $_POST['TenSP'];
    $Gia = $_POST['Gia'];

    $sp = array($LoaiSP, $TenSP, $Gia);
    if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
    array_push($_SESSION['cart'], $sp);
    header('location: ./cart.php');
}
