<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <!-- Main content -->
    <div class="container">
        <h1>Danh sách Sản phẩm</h1>

        <?php
        // Truy vấn database để lấy danh sách
        // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
        include_once(__DIR__ . './connect.php');

        // 2. Chuẩn bị câu truy vấn $sql
        $sql = "select * from `sanpham`";

        // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
        $result = mysqli_query($conn, $sql);

        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        $rowNum = 1;
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[] = array(
                'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'LoaiSP' => $row['LoaiSP'],
                'TenSP' => $row['TenSP'],
                'GhiChu' => $row['GhiChu'],
                'image' => $row['image'],
                'SoLuong' => $row['SoLuong'],
                'Gia' => $row['Gia'],
                'created_at' => $row['created_at'],
                'updated_at' => $row['updated_at'],
            );
            $rowNum++;
        }
        ?>

        <!-- Button Thêm mới -->
        <a href="add.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm mới
        </a>

        <table class="table table-borderd">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Loại SP</th>
                    <th>Tên SP</th>
                    <th>Ghi chú</th>
                    <th>Ảnh đại diện</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Ngày tạo mới</th>
                    <th>Ngày cập nhật</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) : ?>
                    <tr>
                        <td><?php echo $row['rowNum']; ?></td>
                        <td><?php echo $row['LoaiSP']; ?></td>
                        <td><?php echo $row['TenSP']; ?></td>
                        <td><?php echo $row['GhiChu']; ?></td>
                        <td> <img src="img/<?php echo $row['image']; ?>" width=200 title="<?php echo $row['image']; ?>"></td>
                        <td><?php echo $row['SoLuong']; ?></td>
                        <td><?php echo $row['Gia']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['updated_at']; ?></td>
                        <td>
                            <!-- Button Sửa -->
                            <a href="edit.php?id=<?php echo $row['rowNum']; ?>" id="btnUpdate" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>

                            <!-- Button Xóa -->
                            <a onclick="return confirm('Bạn có chắc xóa dữ liệu này không');" href="delete.php?id=<?php echo $row['rowNum']; ?>" id="btnDelete" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

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