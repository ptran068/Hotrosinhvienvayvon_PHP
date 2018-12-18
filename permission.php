<?php
if (isset($_SESSION['user_id']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: index.php');
}else {
	if ($_SESSION['loged'] == true) {
		// Ngược lại nếu đã đăng nhập
		$permission = $_SESSION['quyen'];
		// Kiểm tra quyền của người đó có phải là admin hay không
		if ($permission == '0') {
			// Nếu không phải admin thì xuất thông báo
			echo "Bạn không đủ quyền truy cập vào trang này<br>";
			echo "<a href='danhsach_view.php'> Click để về lại trang chủ</a>";
			exit();
		}
	}	
}
?>

// <?php include("permission.php")?>