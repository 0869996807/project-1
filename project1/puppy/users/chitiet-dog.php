<?php
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');
include_once('../layout/header.php'); ?>
  	<style>
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
  	</style>
	<div class="content">
		<?php
			$id= getGet('id');
			$sql = "select *from dog where id = $id";
			$dog = executeResult($sql,true);
			echo '<div class="row">
      		<div class="col-md-3" style="margin-left:53px"  >
            	<img style="width: 350px" src="'.$dog['thumbnail'].'">
    		</div>

	    <div class="col-md-5" >
	      <div class="container">
	        <div class="row" style="margin-left: 20px;margin-bottom: 35px">
	              <h1 style="padding-top: 30px">'.$dog['title'].'</h1>
	        </div>
	        <hr>
	        <div class="row" style="margin-left: 30px;">
	          <label class="col-md-2" style="text-align: left;"> Xuất xứ: </label>
	            <div class="col-md-8" style="text-align: left;" >
	              <label> '.$dog['origin'].' </label>
	            </div>
	        </div>
	        <div class="row" style="margin-left: 30px;">
	          <label class="col-md-2" style="text-align: left;"> Chủng loại:</label>
	            <div class="col-md-8" style="text-align: left;">
	              <label>'.$dog['species'].'</label>
	            </div>
	        </div>
	      </div>
	    </div>
	    </div>
	      <div class="detail" style="margin-left:50px; text-align:justify ;">
		    <center><h1>Chi tiết về '.$dog['title'].'</h1></center>
		     	<label style="margin-right:20px;">'.$dog['detail'].'</label>
		    </div>
		';
		?>

	</div>
	<?php include_once('../layout/footer.php'); ?>



