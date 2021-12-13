<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/header_admin.css">
</head>
<body>

<div class="sidebar">

	<!-- Nút tắt -->
	<button class="sidebar__open">Đóng X</button>

	<a><?php 

		if(isset($_SESSION['taikhoan'])) {

			echo "Xin chào ".$_SESSION['taikhoan']." !!!";

		} else {
			echo "<script>alert('Sai tài khoản và mật khẩu');</script>";

			echo "<script>location.href='login_admin.php'</script>";
		}
	?></a>

	<!-- Danh sách các trang admin truy cập -->

	<a href="#" id="sanpham">Danh sách sản phẩm</a>

	<a href="#" id="theloai">Danh sách thể loại</a>


	<a href="#" id="user">Danh sách user</a>

	<a href="logout_admin.php">Logout</a>

</div>


<!-- Nút bật  -->
<div class="activeSideBar">

	<button class="activeSideBar__btn">☰</button>

</div>

<!-- Nơi hiển thị cách trang mình chọn -->
<div class="hienthi">
	
</div>

</body>

<script src="../js/sidebar.js"></script>

</html>