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
  	</style>
</head>
<body style="margin-top:0px">
	<div class="content">
		<div id="banner">
			<img src="../img/banner.png">
			<div class="overlay"></div>
		</div>
				<div class="puppy">
					<center><h1>Thú cưng được ưa chuộng nhất hiện nay</h1></center>
					<div class="row">
						<div class="col-md-2" style="width:12%; margin-left:53px">
							<div class="list-group" style="margin-top: 20px; margin-left: 0px;">
								<div class="list-group-item" style="background-color:#d9deb6; text-align: center;"  ><span>Giới tính</span></div>
		  						<a href="?case=Đực" class="list-group-item" style="text-align:center"><span>Con đực</span></a>
		 						<a href="?case=Cái" class="list-group-item" style="text-align: center;"><span>Con cái</span></a>
		  					
							</div>
						</div>
						<div class="col-md-10">
							<?php 
							
									if(empty($_GET)){
										$sql = "select *from dog limit 0,20	";
									}else {
										$case=getGet('case');
										$sql = "select *from dog where gender='$case'limit 0,20";}
							
							$doglist=executeResult($sql);
							foreach ($doglist as $item ){
							echo '<a href="chitiet-dog.php?id='.$item['id'].'">
									<div class="col-md-3" style="height: 315px; margin-top:20px">
									<div class="anh" style="border:dotted 1px;">
										<div class="img" style="height:250px;width:100%;">
								 <img src="'.$item['thumbnail'].'" style="height:250px;width:100%">
									</div>
									<div class="title" style="height:65x;">
										<h3 style="margin: 10px;">'.$item['title'].'</h3>
								</div>
						</div>
					</div>
							<a/>';
							}
							
						 ?>
						 
						
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once('../layout/footer.php');