<?php
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');
include_once('../layout/header.php'); ?>
  	<style>
  		form input {
  			margin-top:35px;
  		}
  		
  		.content {
  			width: 100%;
  		}
		 #banner {
			width: 100%;
			height: 450px;
			overflow: hidden;
			position: relative;
		}

		#banner img {
			width: 100%;

		}

		#banner div.overlay {
			display: block;
			width: 100%;
			height: 450px;
			background:#000;
			position: absolute;
			top: 0px;
			left: 0px;
			opacity: .1;
		}
		h3 {
			text-align: justify;
			margin-left: 53px;
		}
		.content ul li {
			margin-left: 40px;
		} 
  	</style>
<div class="content">
		<div id="banner">
			<img src="../img/banner.png">
			<div class="overlay"></div>
		</div>	
				<h2 style="font-weight: bold;text-align: center;font-size: 50px">Giới thiệu về WoofShop  <i class="fas fa-dog"></i></h2>
  		<h3>Woofshop một trang web giới thiệu về các loại chó trong và ngoài nước .Cung cấp thông tin, cách chăm sóc nuôi dưỡng chúng. </h3>
  		<h3>Woofshop cung cấp , bán các loại thưc ăn cho chó uy tín , chất lượng . Các loại thức ăn đa dạng phong phú</h3>
  		<h3>Ngoài ra woofshop cũng là địa chỉ tin cậy để tưu vấn cho quý khách hàng về thông tin , và chữa ệnh cho chó </h3>
  	 
<p>
<h3>
Woofshop sẽ đồng hành cùng quý khách hàng với đội ngũ nhân viên có chuyên môn chăm sóc pet nhiều năm cũng như kinh doanh các loại thức ăn chính hãng, nhập khẩu...

Một số địa chỉ chăm sóc chó cảnh uy tín ,trách nhiệm nhiệt tình phục vụ :
WOOF Shop : (Địa chỉ: 54 Lê Thanh Nghị)</h3>
</p>
<br>
<br>

  		<h2 style="font-weight: bold;text-align: center;font-size: 50px">Bảng thông tin   <i class="fas fa-dog"></i></h2>
  		<h3>

  			Tìm hiểu thông tin chó cảnh hiện nay để nắm được thông tin cần thiết với từng giống chó là nhu cầu tất yếu của người chăm  chó cảnh. Các loại chó cảnh ở Việt Nam hoặc nhập , lại tạo cũng có những đặc điểm và thích nghi riêng với môi trường nên cần lưu ý chăm sóc và các loại thức ăn phù hợp với từng loại </h3>
<br>
<h3>
Danh sách các loại chó phổ biến sau đây mang tính chất tham khảo.Cụ thể, các giống chó cảnh nhập , lai , chó con sinh ra ở Việt Nam:</h3>
<ul>
	<li>Chó Phốc (Miniature Pinscher), Chó Lạp Xưởng (Dachshund), Chó Chihuahua (Chihuahua), Chó Cocker (Cocker Spaniel), Chó Bắc Kinh (Shih Tzu)</li>
	<li>Chó Phú Quốc (Phu Quoc Ridgeback)</li>
	<li>Chó Đốm (Dalmatian)</li>
	<li>Chó Pug (Pug), Chó Boxer (Boxer), Chó Becgie (German Shepherd Dog)</li>
	<li>Chó Labrador (Labrador Retriever)</li>
	<li>Chó Golden (Golden Retriever)</li>
</ul>
</div>
	<?php include_once('../layout/footer.php');