<?php

//Lấy thông tin từ thanh địa chỉ
$tieu_de = $_POST['tieu_de'];
$noi_dung = $_POST['noi_dung'];
$anh = $_POST['anh'];

//Đẩy thông tin vào database
require 'connect.php';

//câu lệnh sql 
$sql = "insert into tin_tuc(tieu_de,noi_dung,anh)
value('$tieu_de', '$noi_dung', '$anh')";

//hàm dùng để kết nối database và chèn câu lệnh vào
mysqli_query($ket_noi, $sql);

//in ra kết quả lỗi trong quá trình kết nối vs database
$loi = mysqli_error($ket_noi);
echo "$loi";

//đóng kết nối sau khi chạy
mysqli_close($ket_noi);