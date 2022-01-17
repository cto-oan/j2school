<?php
//Hàm mysqli_connect('localhost', 'tên tài khoản', 'mật khẩu', 'tên database đã tạo trong phpmyadmin')
$ket_noi = mysqli_connect('localhost', 'root', '', 'j2school');
//Chèn này vào để xác định chắc chắn không bị lỗi tiếg việt
mysqli_set_charset($ket_noi, 'utf8');								