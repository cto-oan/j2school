<?php

//Lấy thông tin từ thanh địa chỉ
$tieu_de = $_POST['tieu_de'];
$noi_dung = $_POST['noi_dung'];
$anh = $_POST['anh'];

//Đẩy thông tin vào database

//Hàm mysqli_connect('localhost', 'tên tài khoản', 'mật khẩu', 'tên database đã tạo trong phpmyadmin')
$ket_noi = mysqli_connect('localhost', 'root', '', 'j2school');
mysqli_set_charset($ket_noi, 'utf8');								//Chèn này vào để xác định chắc chắn không bị lỗi tiếg việt

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