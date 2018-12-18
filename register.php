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
<form action="" method="post" style="margin-top:100px;">
	<div class="col-md-4 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" class="form-control" name="user_name" placeholder="Nhập tên đăng nhập...">
				</div>
	
				<div class="form-group">
					<label for="pwd">Mật khẩu: </label>
					<input required type="password" class="form-control" name="pass1" placeholder="Nhập mật khẩu...">
				</div>
	
				<div class="form-group">
					<label for="pwd">Nhập lại mật khẩu:</label>
					<input required type="password" class="form-control" name="pass2" placeholder="Nhập lại mật khẩu...">
				</div>
				
			
				<button type="submit" class="btn btn-success" name="dangky">Đăng ký</button>
			</div>
		</div>
	</div>
</form>
</body>
</html>