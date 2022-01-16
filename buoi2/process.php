<?php 

$ten = $_POST['name'];
$gioi_tinh = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$ngay_sinh = $_POST['date'];
$dia_chi = $_POST['adress'];
$so_thich = $_POST['hobby'];

echo "Bạn đã nhập tên là: $ten <br>";
echo "Bạn đã nhập giới tính là: $gioi_tinh <br> ";
echo "Bạn đã nhập email là: $email <br> ";
echo "Bạn đã nhập mật khẩu là: $password <br> ";
echo "Bạn đã nhập ngày sinh là: $ngay_sinh <br> ";
echo "Bạn đã nhập địa chỉ là: $dia_chi <br> ";
echo "Bạn đã nhập sở thích là: $so_thich <br> ";