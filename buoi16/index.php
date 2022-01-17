<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tin tức</title>
</head>
<body>
<h1>
	Đây là trang chủ
</h1>
<a href="form_insert.php">
	Thêm bài viết
</a>
<?php 
	
	//Kết nối vs database
	$ket_noi = mysqli_connect('localhost', 'root', '', 'j2school');
	mysqli_set_charset($ket_noi,'utf8');

	//thực hiện câu lệnh sql
	$sql = "select * from tin_tuc";
	$ket_qua = mysqli_query($ket_noi, $sql);
?>

<!-- Tạo giao diện cơ bản để hiển thị kết quả -->
<table border="1" width="100%">
	<tr>
		<th>Mã</th>
		<th>Tiêu đề</th>
		<th>Nội dung</th>
		<th>Ảnh</th>
	</tr>

	<!-- truyền nội dung lấy được từ database để truyền vào biến -->
	<?php foreach ($ket_qua as $tung_bai_tin_tuc){ ?>
		<tr>
			<td><?php echo $tung_bai_tin_tuc['ma'] ?> </td>
			<td> 
				<a href="show.php?ma=<?php echo $tung_bai_tin_tuc['ma'] ?>">
					<?php echo $tung_bai_tin_tuc['tieu_de'] ?>
				</a>
			</td>
			<td><?php echo $tung_bai_tin_tuc['noi_dung'] ?> </td>
			<td>
				<img src="<?php echo $tung_bai_tin_tuc['anh'] ?>" height='200'>
			</td>
		</tr>
	<?php } ?>
</table>


</body>
</html>