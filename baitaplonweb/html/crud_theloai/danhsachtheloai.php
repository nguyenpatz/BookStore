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
				
				<th class="col col__row1">Mã thể loại</th>

				<th class="col col__row1">Tên thể loại</th>

				<th class="col col__row1">Tên sách</th>

				<th class="col col__row1">Tuỳ chọn</th>

			</tr>

			<?php 

				$seachName = "";

				$searchSQL = "";

				if(isset($_GET['timkiemtheloai'])) {

					$searchName = $_GET['timkiemtheloai'];

				}

				if(empty($searchName)) {

					$searchSQL = "SELECT * FROM theloaisach";
				}

				else {

					$searchSQL = "SELECT * FROM theloaisach WHERE ten LIKE '%$searchName%'";

				}

				$stmt = $conn->prepare($searchSQL);

				$stmt->execute();

				$theloais= $stmt->fetchAll(PDO::FETCH_ASSOC);

				foreach ($theloais as $value) {
					// code...
			?>

			<tr class="row">
				
				<td class="col"><?php echo $value['theloai_id']?></td>

				<td class="col"><?php echo $value['ten']?></td>

				<td class="col"><?php echo $value['sach_id']?></td>

				<td class="col">
					
					<span><a href="sua.php<?php echo '?id='.$value['theloai_id'];?>">Sửa</a></span>

					<span><a href="xoa.php<?php echo '?id='.$value['theloai_id'];?>">Xóa</a></span>

				</td>
			</tr>

		<?php }?>

		</table>

	</div>
</body>
</html>