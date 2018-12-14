<?php
	$connect = mysqli_connect('localhost','root','','DULIEU');
	mysqli_set_charset($connect,"utf8");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Devpro.edu.vn</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	if(!isset($_SESSION["loged"])){
		header("location:index.php");
		setcookie("error", "Bạn chưa đăng nhập!", time()+1, "/","", 0);
	}
	else
		echo "Chào mừng bạn đến với devpro.edu.vn";
 
?>	
</body>
</html>