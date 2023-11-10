<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật</title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <?php
    // Truy vấn database
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include_once(__DIR__ . '/./connect.php');

    // 2. Chuẩn bị câu truy vấn $sqlSelect, lấy dữ liệu ban đầu của record cần update
    // Lấy giá trị khóa chính được truyền theo dạng QueryString Parameter key1=value1&key2=value2...
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM `sanpham` WHERE id=$id;";

    // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu ban đầu của record cần update
    $resultSelect = mysqli_query($conn, $sqlSelect);

    $info = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC); // 1 record

    // Nếu không tìm thấy dữ liệu -> thông báo lỗi

    ?>

    <!-- Main content -->
    <div class="container">
        <h1>Form Cập nhật </h1>

        <form name="frmEdit" id="frmEdit" method="post" action="" class="form">
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id" id="id" class="form-control" value="<?php echo $info['id'] ?>" readonly /></td>
                </tr>
                <tr>
                    <td>Loại SP</td>
                    <td><input type="text" name="LoaiSP" id="LoaiSP" class="form-control" value="<?php echo $row['LoaiSP'] ?>" /></td>
                </tr>
                <tr>
                    <td>Tên SP</td>
                    <td><input type="text" name="TenSP" id="TenSp" class="form-control" value="<?php echo $row['TenSP'] ?>" /></td>
                </tr>
                <tr>
                    <td>Ghi chú</td>
                    <td><textarea name="GhiChu" id="GhiChu" class="form-control" value="<?php echo $row['GhiChu'] ?>"></textarea></td>
                </tr>
                <tr>
                    <td>Ảnh đại diện</td>
                    <td><input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png" value="<?php echo $row['image'] ?>" /></td>
                </tr>
                <tr>
                    <td>Số Lượng</td>
                    <td><textarea name="SoLuong" id="SoLuong" class="form-control" value="<?php echo $row['SoLuong'] ?>"></textarea></td>
                </tr>
                <tr>
                    <td>Giá</td>
                    <td><textarea name="Gia" id="Gia" class="form-control" value="<?php echo $info['Gia'] ?>"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ liệu</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>


    <?php
    // 4. Nếu người dùng có bấm nút Đăng ký thì thực thi câu lệnh UPDATE
    if (isset($_POST['btnSave'])) {
        // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
        $LoaiSP = $_POST['LoaiSP'];
        $TenSP = $_POST['TenSP'];
        $GhiChu = $_POST['GhiChu'];
        $image = $_POST['image'];
        $SoLuong = $_POST['SoLuong'];
        $Gia = $_POST['Gia'];
        $updated_at = date('Y-m-d H:i:s'); // Lấy ngày giờ hiện tại theo định dạng `Năm-Tháng-Ngày Giờ-Phút-Giây`. Vd: 2020-02-18 09:12:12

        // Câu lệnh UPDATE
        $sql = "UPDATE sanpham SET LoaiSP='$LoaiSP', TenSP='$TenSP', GhiChu='$GhiChu', image='$image', SoLuong='$SoLuong', Gia='$Gia', updated_at='$updated_at' WHERE id='$id';";

        // Thực thi UPDATE
        mysqli_query($conn, $sql);

        // Đóng kết nối
        mysqli_close($conn);

        // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
        header('Location: listproduct.php');
    }
    ?>

    <!-- Liên kết JS Jquery bằng CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <!-- Liên kết JS Popper bằng CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Liên kết JS Bootstrap bằng CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Liên kết JS FontAwesome bằng CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>