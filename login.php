<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
    if ($username == 'admin' && $password == '123') {
        $_SESSION['user'] = $username;
        header("location:index.php");
    } else {
        echo "incorrect username and password";
        require "login.html";
    }

?>