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
			<li><a href="./index.php">Trang chủ</a></li>
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
		<div class="others">
			<li><input placeholder="Tìm kiếm" type="text"><i class="fa fa-search"></i></li>
			<li> <a class="fas fa-shopping-bag" href=""></a> </li>
			<li><a class="fas fa-user" href=""></a></li>
			<li> <a class="fas fa-paw" href=""></a> </li>

		</div>
	</header>
	<section id="Slider">
		<div class="aspect-ratio-169">
			<img src="./HinhPc/quangcao.jpg">
			<img src="./HinhPc/quangcao2.png">
			<img src="./HinhPc/quangcao3.jpg">
			<img src="./HinhPc/quangcao5.jpg">
			<img src="./HinhPc/quangcao6.jpg">
		</div>
		<div class="dot-container">
			<div class="dot active"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div>
	</section>
	<footer>
		<icon><i class="icon-facebook"></i></icon>
		<icon><i class="icon-gmail"></i></icon>
	</footer>
</body>
<script>
	const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
	const imgContainer = document.querySelector('.aspect-ratio-169')
	const dotItem = document.querySelectorAll(".dot")
	let imgNumber = imgPosition.length
	let index = 0

	imgPosition.forEach(function(image, index) {
		image.style.left = index * 100 + "%"
		dotItem[index].addEventListener("click", function() {
			slider(index)
		})
	})

	function imgSlide() {
		index++;
		console.log(index)
		if (index >= imgNumber) {
			index = 0
		}
		imgContainer.style.left = "-" + index * 100 + "%"
	}

	function slider(index) {
		imgContainer.style.left = "-" + index * 100 + "%"
		const dotActive = document.querySelector('.active')
		dotActive.classList.remove("active")
		dotItem[index].classList.add("active")
	}

	setInterval(imgSlide, 5000)
</script>
<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: Arial, Helvetica, sans-serif;
	}

	header {
		display: flex;
		justify-content: space-between;
		padding: 12px 50px;
		height: 70px;
		align-items: center;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		z-index: 1;
		background: rgba(255, 255, 255, 0.3);
	}

	header:hover {
		background: rgba(255, 255, 255, 1);
	}

	li {
		list-style: none;
	}

	a {
		text-decoration: none;
		color: #000;
	}

	.logo {
		flex: 1;

	}

	.menu {
		flex: 3;
		display: flex;
	}

	.menu>li {
		padding: 0 15px;
		position: relative;
	}

	.menu>li:hover .sub-menu {
		visibility: visible;
		top: 30px;
	}

	.sub-menu {
		position: absolute;
		width: 150px;
		border: 1px solid #ccc;
		padding: 10px 0 10px 20px;
		visibility: hidden;
		top: 50px;
		transition: 0.3s;
	}

	.sub-menu ul {
		padding-left: 20px;
	}

	.sub-menu ul a {
		font-weight: normal !important;
		font-size: 12px !important;
	}

	.sub-menu li a {
		font-weight: normal;
		font-size: 12px !important;
	}

	.menu>li a {
		font-size: 16px;
		font-weight: bold !important;
		display: block;
		line-height: 30px;
	}

	.others {
		flex: 1;
		display: flex;
	}

	.others>li {
		padding: 0 12px;
	}

	.others>li:first-child {
		position: relative;
	}

	.others>li:first-child input {
		width: 100%;
		border: none;
		border-bottom: 3px solid #333;
	}

	.others>li:first-child i {
		position: absolute;
		right: 10px;
	}

	.aspect-ratio-169 {
		display: block;
		position: relative;
		padding-top: 56.25%;
		transition: 0.3s;
	}

	.aspect-ratio-169 img {
		display: block;
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
	}

	#Slider {
		padding-bottom: 30px;
		border-bottom: 2px solid #000;
		overflow: hidden;
	}

	.dot-container {
		position: absolute;
		height: 30px;
		width: 100%;
		display: flex;
		align-items: center;
		text-align: center;
		justify-content: center;
	}

	.dot {
		height: 14px;
		width: 14px;
		background-color: #CCC;
		border-radius: 50%;
		margin-right: 10px;
		cursor: pointer;
	}

	.dot.active {
		background-color: #0c0b0b;
	}
</style>

</html>