<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Đăng nhập</title>
</head>

<body>
    <div class="container">
        <div class="rwo">
            <div class="col-6 offset-md-3">
                <form id="form_reg" class="bg-light p-4 my-3" action="checkloginadmin.php" method="post">
                    <h2 class="py-3 text-center text-uppercase">Đăng nhập tài khoản Admin</h2>

                    <div class="form-group">
                        <label for="user">Tên đăng nhập</label>
                        <input type="text" name="user" class="form-control" id="user">
                    </div>
                    <div class="form-group">
                        <label for="pass">Mật khẩu</label>
                        <input type="text" name="pass" class="form-control" id="pass">
                    </div>


                    <input type="submit" class="btn btn-primary btn-block mt-4" name="btn-checkloginadmin" value="đăng nhập">

            </div>
        </div>
    </div>

</html>