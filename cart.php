<?php
session_start();
ob_start();
?>



<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="../CT502H-LVTN/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9e4c6e4a9c.js" crossorigin="anonymous"></script>

    <title>Trang chủ </title>
</head>

<body>
    <?php
    if (isset($_SESSION['username']) && $_SESSION['username']) {
        echo 'Bạn đã đăng nhập với tên là ' . $_SESSION['username'] . "<br/>";
        echo 'Click vào đây để <a href="logout.php">Logout</a>';
    } else {
        echo 'Bạn chưa đăng nhập';
    }
    ?>
    <header>
        <div class="logo">
            <img src="./HinhPc/logo.jpg" width="150" height="74">
        </div>
        <div class="menu">
            <li><a href="../index.php">Trang chủ</a></li>
            <li><a href="#">Danh mục sản phẩm</a>
                <ul class="sub-menu">
                    <li>
                        <a herf="#">Laptop</a>
                        <ul>
                            <li><a href="#">Dell</a></li>
                            <li><a href="#">ASUS</a></li>
                            <li><a href="#">HP</a></li>
                            <li><a href="#">Acer</a></li>
                            <li><a href="#">Lenovo</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Bộ PC</a></li>
                    <li>
                        <a href="#">PC</a>
                        <ul>
                            <li><a href="#">Mainboard</a></li>
                            <li><a href="#">RAM</a></li>
                            <li><a href="#">CPU</a></li>
                            <li><a href="#">PSU</a></li>
                            <li><a href="#">Ổ Cứng</a></li>
                            <li><a href="#">DVD-ROM</a></li>
                            <li><a href="#">GPU</a></li>
                            <li><a href="#">Quạt</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Phụ kiện</a>
                        <ul>
                            <li><a href="#">Chuột máy tính</a></li>
                            <li><a href="#">Bàn phím</a></li>
                            <li><a href="#">Màn hình</a></li>
                            <li><a href="#">Tai nghe</a></li>
                            <li><a href="#">Webcam</a></li>
                            <li><a href="#">Micro</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Giảm giá</a></li>
            <li><a href="#">Đăng ký sửa chửa</a></li>
            <li><a href="#">Liên hệ</a></li>
        </div>
        <div class="others">
            <li><input placeholder="Tìm kiếm" type="text"><i class="fa fa-search"></i></li>
            <li> <a class="fas fa-shopping-bag" href=""></a> </li>
            <li><a class="fas fa-user" href=""></a></li>
            <li> <a class="fas fa-paw" href=""></a> </li>

        </div>
    </header>

</body>


</html>