<?php
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');
require_once('form-phanhoi.php');
include_once('../layout/header.php'); ?>
  	<style>
  		.container {
  			margin-top: 20px;
  		}
  		label {
  			float: right;
  		}
  		form input {
  			margin-top:35px;
  		}
  		form .row input {
  			margin-top: 0px;
  			width: 80%;
  			border-radius: 5px;
  		}
  		input:focus {
  			background-color: #eaf2dc;
  		}
  		textarea {
  			height: 100px;
  			width: 80%;
  			border-radius: 5px;
  		}


  	</style>
	<div class="container" style="font-family:cursive;">
 		<div class="row">
 			<div class="col-md-6" style="background-color:#3775fa; height: 430px;"> 
 				
 			</div>
 			<div class="col-md-6" style="background-color:#10224a;height: 430px;">
 				
 			</div>
 			<div class="col-md-6" style="background-color:white;height: 330px;position: absolute; margin:50px;margin-left: 250px;margin-right: 250px;">
 				<form method="post">
 					<h2 style="text-align:center;">Phản hồi</h2>
 				<div class="row">
 					<div class="col-md-4"><label >Họ và tên:</label></div>
 					<div class="col-md-8"><input autofocus="true" required="true" type="text" name="name"></div>
 				</div>
 				<div class="row" style="margin-top:10px">
 					<div class="col-md-4"><label >Email:</label></div>
 					<div class="col-md-8"><input required="true" type="email" name="email"></div>
 				</div>
 				<div class="row" style="margin-top:10px">
 					<div class="col-md-4"><label>Số điện thoại:</label></div>
 					<div class="col-md-8"><input required="true" type="text" name="phone"></div>
 				</div>
 				<div class="row" style="margin-top:10px">
 					<div class="col-md-4"><label>Nội dung:</label></div>
 					<div class="col-md-8"><textarea required="true" name="content" ></textarea></div>
 				</div>
 				<center><button class="btn btn-primary" style="margin-top:8px">Gửi</button></center>
 				</form>

 			</div>
 		</div>
  	</div>
  	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.72957589102!2d105.84692901445419!3d21.003474494017965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad58455db2ab%3A0x9b3550bc22fd8bb!2zNTQgTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1623949743896!5m2!1svi!2s" width="100%" height="200" style="border:0; margin-top: 30px;" allowfullscreen="" loading="lazy"></iframe>
	<?php include_once('../layout/footer.php'); ?>