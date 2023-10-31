<?php
session_start();
ob_start();

if (isset($_SESSION['logged_in']) && isset($_SESSION['user'])) {

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

        <title>Admin </title>
    </head>

    <body>

        <header>
            <h6>Hello, <?php echo $_SESSION['user']; ?></h6><br>
            <a href="./logoutadmin.php">Đăng xuất</a>

            <div class="logo">
                <img src="./HinhPc/logo.jpg" width="150" height="74">
            </div>
            <div class="menu">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="./product.php">Danh mục sản phẩm</a>
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
                <li><a href="./dangkysuachua.php">Đăng ký sửa chửa</a></li>
                <li><a href="#">Liên hệ</a></li>
            </div>
        </header>

    </body>

    </html>
<?php
}
?>