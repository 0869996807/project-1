<?php
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');
include_once('../layout/header.php');
		$user = checkLogin();
 	 	if($user == null){
 		header('location: login.php');
 	}
 	$name=$user['fullname'];
 	?>
 <?php
$cart = [];
if(isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
}
$count = 0;
foreach ($cart as $item) {
	$count += $item['num'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>puppy website</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<style>
  		.navbar {
  			background-color :#f5f3eb	;

  		}
  		.dropdown-menu {
  			background-color:#f5f3eb ;
  		}
  	</style>
 	</head>
<body>
	<div class="header">
		<div class="logo">
			<div class="row">
				<div class="col-md-2">
					<center><img src="../img/logo.png" width="100px" height="76px" style="margin:10px"></center>
				</div>
				<div class="col-md-3" style="float:right">
				  	<h3 style="text-align:center; margin-right:10px;"><i class="fa fa-map-marker" aria-hidden="true"></i> 54 - Lê Thanh Nghị , Hai Bà Trưng , Hà Nội</h3>
				</div>
					
				</div>
				
				
			</div>
			<nav class="navbar" style="padding-left: 40px;margin-bottom: 0px;">			
	  			<div class="container-fluid">
	    			<div class="navbar-header">
	     			 <a class="navbar-brand" href="#">SHOP WOOF</a>
	   			</div>
	   			<ul class="nav navbar-nav">
	     			<li class="active"><a href="home.php">Trang chủ</a></li>
	     			<li><a href="gioithieu.php">Giới thiệu</a></li>
	     			<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Thú cưng
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu dropdown-info ">
				        	<?php
				        		$sql = "select * from category_dog";
				        		$cate = executeResult($sql);
				        		foreach ($cate as $item) {
				        			echo '<li><a href="thucung.php?id_dog='.$item['id'].'">'.$item['name'].'</a></li>';
				        		}
				        	 ?>
				          
				        </ul>
				     </li>
	     			<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Thức ăn
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				        	<?php
				        		$sql_food = "select * from category_food";
				        		$cate_food = executeResult($sql_food);
				        		foreach ($cate_food as $item_food) {
				        			echo '<li><a href="thucan.php?id_food='.$item_food['id'].'">'.$item_food['name'].'</a></li>';
				        		}
				        	 ?>
				        </ul>
				     </li>
				     <li><a href="phanhoi.php">Phản hồi </a></li>
				     <?php  
				     if($user['id']==1){
							echo '<li><a href="../admin">Admin </a></li>';
						}
				     ?>
	   			</ul>
	   			<ul class="nav navbar-nav navbar-right">
	   			<li><a href="#"><h3 style="font-family:cursive;margin: 0px;"><?php echo $name ?></h3></a></li>
	      		<li style="background-color:#e6e1ed"><a href="cart.php"><i class="fa fa-cart-plus"></i>
	      			<span>Giỏ hàng</span>
	      			(<?php echo $count."sản phẩm"; ?>)

	      				</a></li>
	      		<li style="background-color:#b5e9f5;"><a href="form-signout.php"><span class="glyphicon glyphicon-log-in"> Signout</span></a></li>
	   			</ul>
	  			</div>
			</nav>
		</div>
	</div>
