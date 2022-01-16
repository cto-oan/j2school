<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" action="process.php">
		Tên
		<input type="text" name="name">
		<br>
		Giới tính
		<input type="radio" name="gender" value="Nam">Nam
		<input type="radio" name="gender" value="Nữ">Nữ
		<br>
		Email
		<input type="mail" name="email">
		<br>
		Mật khẩu
		<input type="password" name="password">
		<br>
		Ngày sinh
		<input type="date" name="date">
		<br>
		Địa chỉ
		<input type="text" name="adress">
		<br>
		Sở thích
		<select name="hobby">
			<option>Kinh di</option>
			<option>Trinh thám</option>
			<option>Thể thao</option>
		</select>
		<button>Đăng ký</button>
	</form>
</body>
</html>