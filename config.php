<?php 
	// kết nối đến database devpro_project_mvc và lưu vào biến $ketnoi:
	$ketnoi = mysqli_connect("localhost", "root", "", "DULIEU");
	//việc truy vấn sẽ có thể sử dụng dữ liệu tiếng Việt:
	mysqli_set_charset($ketnoi,"UTF8");
 ?>