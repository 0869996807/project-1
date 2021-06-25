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
  	</style>
	<div class="content">
		<div class="row">
			<div class="col-md-11" style="margin-left: 43px; width: 95%;">
				<?php 
				$id=getGet('id_food');
				$sql = "select * from food where id_cat = $id";
				$foodlist = executeResult($sql);
				if($foodlist=='' || $foodlist == null){
					echo "<h3 style='margin-left:13px' >Hiện tại chưa có sản phẩm loại này</h3> ";
				}
				foreach($foodlist as $item){
					echo '			<div class="col-md-3" style="height: 350px; margin-top:20px ; margin-bottom:10px">
									<div class="anh" style="border:dotted 1px; border-radius:8px">
									<div class="title" style="height:65x;">
										<h3 style="margin: 10px;">'.$item['title'].'</h3>
									</div>
										<div class="img" style="height:250px;width:100%;">
								<a href="chitiet-food.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="height:250px;width:100%;border-bottom:dotted 1px;border-top:dotted 1px;"></a>
									</div>
									<div class="price" style="height:65x;coler:black;">
										<h3 style="margin: 10px;">Giá: '.number_format($item['price'], 0, '', '.').' VND</h3>
									</div>
									
						</div>
					</div>
							';
				}

		?>
						 
						
				</div>
				</div>
			</div>
		</div>
<?php	include_once('../layout/footer.php'); ?>