<?php
	 require_once('form-signup.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Signup page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/md5.js"></script>
<style type="text/css">
		.container{
			margin-top: 20px;
			border: solid 1px;
			border-radius: 10px;
			width: 400px;
			height: 720px;
			background-color: white;

		}
		
		
	</style>
</head>
<body style="background-color: #f7d5f2">
	<div class="container">
		<center><h1 class="h2 page-head-line">Đăng kí</h1></center>
			<form id="signup" action="" method="post">
				<div class="form-group">
					<label>Họ và tên:</label>
					<input required="true" type="text" class="form-control" autofocus id="fullname" placeholder="Họ và tên" name="fullname" value="<?php echo $fullname ;?>">
				</div>
				<div class="form-group">
					<label>Tên đăng nhập</label>
					<input required="true" type="text" class="form-control" id="username"  placeholder="Tên đăng nhập" name="username" maxlength="16" minlength="6"  value="<?php echo $username ;?>">
				</div>
				<div class="form-group">
					<label">Mật khẩu</label>
					<input required="true" type="password" class="form-control" id="password" placeholder="Mật khẩu" name="password">
				</div>
				<div class="form-group">
					<label>Nhập lại mật khẩu:</label>
					<input required="true" type="password" class="form-control" id="cfm_password" placeholder="Mật khẩu" name="cfm_password">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input required="true" type="email" class="form-control" id="email" placeholder="email" name="email" value="<?php echo $email ;?>">
				</div>
				<div class="form-group">
					<label>Địa chỉ:</label>
					<input required="true" type="text" class="form-control" id="address" placeholder="Địa chỉ" name="address" value="<?php echo $address ;?>">
				</div>
				<div class="form-group">
					<label>Số điện thoại:</label>
					<input required="true" type="phone" class="form-control" id="phonenumber" placeholder="Số điện thoại" name="phonenumber" value="<?php echo $phonenumber ;?>">
				</div>
				<div class="form-group">
				<div class="d-flex align-items-center justify-content-between">
					<button class="btn btn-primary" type="submit" id="submit">Đăng kí</button>
					<a href="login.php"> <button class="btn btn-info" type="button" id="submit1">Đăng nhập</button> </a>
				</div>
				</div>
			</form>
	</div>

</body>
</html>