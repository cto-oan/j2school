<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	$ma = $_POST['ma'];
	//Kết nối vs database
	require 'connect.php';
	//thực hiện câu lệnh sql
	$sql = "select * from tin_tuc
	where ma = $ma";
	//hàm ket_qua trả về là mảng
	$ket_qua = mysqli_query($ket_noi, $sql);
	//dùng fetch_array để chuyển mảng có vị trí là tên cột
	$bai_tin_tuc = mysqli_fetch_array($ket_qua);
?>
<h1>
	<?php echo $bai_tin_tuc['tieu_de'] ?>
</h1>
<p>
	<?php echo nl2br($bai_tin_tuc['noi_dung']) ?>
</p>
<p>
	<img src="<?php echo $bai_tin_tuc['anh'] ?>">
</p>

<!-- Đóng kết nối khi không còn sử dụng nữa -->
<?php 
	mysqli_close($ket_noi)
?>
</body>
</html>