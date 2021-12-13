<?php 

include '../connectDB.php';

include 'header.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<div class="content">
	
		<table class="table__styled">
			
			<tr class="row row1">
				
				<th class="col col__row1">Tài khoản</th>

				<th class="col col__row1">Mật khẩu</th>

				<th class="col col__row1">Tên</th>

				<th class="col col__row1">Địa chỉ</th>

				<th class="col col__row1">Số điện thoại</th>

				<th class="col col__row1">Giới tính</th>

				<th class="col col__row1">Tùy chọn</th>

			</tr>

			<?php 

				$seachName = "";

				$searchSQL = "";

				if(isset($_GET['timkiemuser'])) {

					$searchName = $_GET['timkiemuser'];

				}

				if(empty($searchName)) {

					$searchSQL = "SELECT * FROM user";
				}

				else {

					$searchSQL = "SELECT * FROM user WHERE ten LIKE '%$searchName%'";

				}

				$stmt = $conn->prepare($searchSQL);

				$stmt->execute();

				$tens= $stmt->fetchAll(PDO::FETCH_ASSOC);

				foreach ($tens as $value) {
					// code...
			?>

			<tr class="row">
				
				<td class="col"><?php echo $value['taikhoan'];?></td>

				<td class="col"><?php echo $value['matkhau'];?></td>

				<td class="col"><?php echo $value['ten'];?></td>

				<td class="col"><?php echo $value['diachi'];?></td>

				<td class="col"><?php echo $value['sodienthoai'];?></td>

				<td class="col"><?php echo $value['gioitinh'];?></td>

				<td class="col">
					
					<span><a href="sua.php<?php echo '?id='.$value['id'];?>">Sửa</a></span>

					<span><a href="xoa.php<?php echo '?id='.$value['id'];?>">Xóa</a></span>

				</td>
			</tr>

		<?php }?>

		</table>

	</div>

</body>
</html>