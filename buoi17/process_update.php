<?php
//lấy giá trị từ database
//mã dùng phương thức post vì đã truyền lại ma bằng phương thức post, còn trong process_update.php không dùng phương thức post vì cái này là do database tự sinh ra
$ma = $_POST['ma'];
$tieu_de = $_POST['tieu_de'];
$noi_dung = $_POST['noi_dung'];
$anh = $_POST['anh'];

//Kết nối file vs database
require 'connect.php';

// Hàm sql
$truy_van = "update tin_tuc
set
tieu_de = '$tieu_de',
noi_dung = '$noi_dung',
anh = '$anh'
where
ma = '$ma'";

//Đẩy hàm sql vào database và đóng kết nối
mysqli_query($ket_noi, $truy_van);
mysqli_close($ket_noi);