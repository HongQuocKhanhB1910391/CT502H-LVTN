<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$sql = "SELECT * FROM sanpham ";
$result = mysqli_query($conn, $sql);



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

    <title>Product </title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="./HinhPc/logo.jpg" width="150" height="74">
        </div>
        <div class="menu">
            <li><a href="./index.php">Trang chủ</a></li>
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

    <div class="container">
        <div class="main">
            <br>
            <br>
            <h1>Product List</h1>
            <table>
                <tr>
                    <th>Lọai Sản Phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>

                </tr>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <tr>
                        <td><?php echo $row['LoaiSP'] ?></td>
                        <td><?php echo $row['TenSP'] ?></td>
                        <td><?php echo $row['SoLuong'] ?></td>
                        <td><?php echo $row['Gia'] ?></td>
                        <td>
                            <div class="giohang">
                                <a href="./addtocart.php" class="btn btn-primary">Add to cart</a>
                            </div>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </table>
        </div>
        <div class="sidebar">

        </div>
    </div>
    <style>
        .body {
            font-family: Verdana;
            font-size: 12px;
            color: #444;
        }


        .container {
            width: 700px;
            margin: 150px auto;
            background-color: #eee;
            overflow: hidden;

            padding: 15px;
        }

        .main {
            width: 490px;
            float: left;
        }

        .main table {
            width: 480px;
        }

        .main table th {
            padding: 10px;
            background-color: #48577D;
            color: #fff;
            text-align: left;
        }

        .h1 {
            align-items: center;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .sidebar {
            width: 200px;
            float: left;
        }
    </style>
</body>

</html>