<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop bán hàng NetaShop</title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <!-- Main content -->
    <div class="container">
        <h1>Thêm mới Sản phẩm</h1>

        <form name="frmCreate" method="post" action="" class="form" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>Loại SP</td>
                    <td><input type="text" name="LoaiSP" id="LoaiSP" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Tên SP</td>
                    <td><input type="text" name="TenSP" id="TenSP" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Ghi chú</td>
                    <td><textarea name="GhiChu" id="GhiChu" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>Ảnh đại diện</td>
                    <td><input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png" /></td>
                </tr>
                <tr>
                    <td>Số Lượng</td>
                    <td><input type="text" name="SoLuong" id="SoLuong" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Giá</td>
                    <td><input type="text" name="Gia" id="Gia" class="form-control" /></td>
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
    // Truy vấn database
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include_once(__DIR__ . './connect.php');

    // 2. Người dùng mới truy cập trang lần đầu tiên (người dùng chưa gởi dữ liệu `btnSave` - chưa nhấn nút Save) về Server
    // có nghĩa là biến $_POST['btnSave'] chưa được khởi tạo hoặc chưa có giá trị
    // => hiển thị Form nhập liệu

    // Nếu biến $_POST['btnSave'] đã được khởi tạo
    // => Người dùng đã bấm nút "Lưu dữ liệu"
    if (isset($_POST['btnSave'])) {

        // 3. Nếu người dùng có bấm nút `Lưu dữ liệu` thì thực thi câu lệnh INSERT
        // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
        $LoaiSP = $_POST['LoaiSP'];
        $TenSP = $_POST['TenSP'];
        $GhiChu = $_POST['GhiChu'];
        $SoLuong = $_POST['SoLuong'];
        $Gia = $_POST['Gia'];
        $created_at = date('Y-m-d H:i:s'); // Lấy ngày giờ hiện tại theo định dạng `Năm-Tháng-Ngày Giờ-Phút-Giây`. Vd: 2020-02-18 09:12:12
        $updated_at = NULL;
        if ($_FILES['image']['error'] === 4) {
            echo
            "<script> alert('Hình không tồn tại'); </script>";
        } else {
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $tmpName = $_FILES['image']['tmp_name'];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
                echo
                "<script> alert('Hình không hợp lệ'); </script>";
            } else if ($fileSize > 1000000) {
                echo
                "<script> alert('Hình quá lớn'); </script>";
            } else {
                $newImageName = uniqid();
                $newImageName = '.' . $imageExtension;

                move_uploaded_file($tmpName, 'img/', $newImageName);
                $sqlInsert =  "INSERT INTO sanpham (LoaiSP, TenSP, GhiChu, image, SoLuong, Gia, created_at, updated_at) VALUES ('$LoaiSP', '$TenSP', '$GhiChu', '$newImageName ', '$SoLuong', '$Gia', '$created_at', '$updated_at')";
            }
        }


        // 6. Nếu không có lỗi dữ liệu sẽ thực thi câu lệnh SQL
        // Câu lệnh INSERT

        // Code dùng cho DEBUG
        // var_dump($sqlInsert); die;

        // Thực thi INSERT
        mysqli_query($conn, $sqlInsert);


        // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
        header('location:listproduct.php');
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