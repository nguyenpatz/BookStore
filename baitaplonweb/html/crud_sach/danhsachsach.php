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
	<link rel="stylesheet" href="style.css">
</head>
<body>

	

	<div class="content">
		
		<!-- Bảng gồm tên sách, tác giả, ngày xuất bản, giá tiền, ảnh có nút sửa và xóa-->

		<table class="table__styled">

			<tr class="row row1">
				
				<th class="col col__row1">Tên sách</th>

				<th class="col col__row1">Tác giả</th>

				<th class="col col__row1">Ngày xuất bản</th>

				<th class="col col__row1">Giá tiền</th>

				<th class="col col__row1">Ảnh</th>

				<th class="col col__row1">Tùy chọn</th>

			</tr>

			<?php 

				$searchName = "";

				$searchSQL = "";

				if(isset($_GET['timkiemtensach'])) {

					$searchName = $_GET['timkiemtensach'];

				}

				if(empty($searchName)) {
				
					$searchSQL = "SELECT * FROM sach";

				} else {

					$searchSQL = "SELECT * FROM sach WHERE ten LIKE '%$searchName%'";

				}

				$stmt = $conn->prepare($searchSQL);

				$stmt->execute();

					// đổ dữ liệu vào biến
				$sachs = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($sachs as  $value) {
						// code...
			?>

			<tr class="row">
				
				<td class="col"><?php echo $value['ten']?></td>

				<td class="col"><?php echo $value['tacgia']?></td>

				<td class="col"><?php echo $value['ngayxuatban']?></td>

				<td class="col"><?php echo $value['giatien']?></td>

				<td class="col">

					<img class="anhsach" src="<?php echo '../uploads/'.$value['anh']?>" alt="ảnh">
						
				</td>

				<td class="col">
					
					<span><a href="sua.php<?php echo '?id='.$value['sach_id'];?>">Sửa</a></span>

					<span><a href="xoa.php<?php echo '?id='.$value['sach_id'];?>">Xóa</a></span>

				</td>

			</tr>

			<?php }?>

		</table>

	</div>

</body>
</html>