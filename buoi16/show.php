<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	$ma = $_GET['ma'];
	//Kết nối vs database
	$ket_noi = mysqli_connect('localhost', 'root', '', 'j2school');
	mysqli_set_charset($ket_noi,'utf8');

	//thực hiện câu lệnh sql
	$sql = "select * from tin_tuc
	where ma = $ma";
	$ket_qua = mysqli_query($ket_noi, $sql);
	$bai_tin_tuc = mysqli_fetch_array($ket_qua);
?>
<h1>
	<?php echo $bai_tin_tuc['tieu_de'] ?>
</h1>
<p>
	<?php echo $bai_tin_tuc['noi_dung'] ?>
</p>
<p>
	<img src="<?php echo $bai_tin_tuc['anh'] ?>">
</p>
</body>
</html>