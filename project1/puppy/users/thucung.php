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
	<div class="content" style="width:93%; margin-left:53px">
		<div class="row">
		<?php 
				$id=getGet('id_dog');
				$sql = "select * from dog where id_cat = $id";
				$doglist = executeResult($sql);
				if($doglist=='' || $doglist==null){
					echo "<h3 style='margin-left:17px' >Hiện tại chưa có thú cưng loại này</h3> ";
				}
				foreach($doglist as $item){
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
							<a/>
							';
				}
		?>
</div>
</div>
		
<?php include_once('../layout/footer.php'); ?>