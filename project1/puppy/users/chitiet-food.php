<?php 
session_start();
include_once('../layout/header.php');
?>
<form method="post">
	<?php
			$id= getGet('id');
			$sql = "select *from food where id = $id";
			$food = executeResult($sql,true);
			echo '<div class="row">
      		<div class="col-md-3" style="margin-left:53px ; margin-top:20px"  >
            	<img style="width: 350px" src="'.$food['thumbnail'].'">
    		</div>

	    <div class="col-md-5" >
	      <div class="container">
	        <div class="row" style="margin-left: 20px;margin-bottom: 35px">
	              <h1 style="padding-top: 30px">'.$food['title'].'</h1>
	        </div>
	        <hr>
	        <div class="row" style="margin-left: 30px;">
	          <label class="col-md-2" style="text-align: left;"> Xuất xứ: </label>
	            <div class="col-md-8" style="text-align: left;" >
	              <label> '.$food['origin'].' </label>
	            </div>
	        </div>
	        <div class="row" style="margin-left: 30px;">
	          <label class="col-md-2" style="text-align: left;"> Trọng lượng:</label>
	            <div class="col-md-8" style="text-align: left;">
	              <label>'.$food['weight'].' kg</label>
	            </div>
	        </div>
	        <div class="row" style="margin-left: 30px;">
	          <label class="col-md-2" style="text-align: left;"> Giá:</label>
	            <div class="col-md-8" style="text-align: left;">
	              <label>'.number_format($food['price'], 0, '', '.').' VND</label>
	            </div>
	        </div>
	      </div>
	      <button class="btn btn-primary" style="margin-left:60px;margin-top:10px" onclick="addToCart('.$id.')">Thêm vào giỏ hàng <i class="fa fa-cart-plus"></i></button>
	    </div>
	    </div>
	      <div class="detail" style="margin-left:50px; text-align:justify ; margin-right:20px">
		    <center><h1>Chi tiết về '.$food['title'].'</h1></center>
		    <h3>Thành phần:</h3
		     	<h4>'.$food['ingredient'].'</h4>
		     <h3>Hướng dẫn sử dụng :</h3
		     	<h4>'.$food['usermanual'].'</h4>
		    </div>
		';
		?>

</form>
<script type="text/javascript">
	function addToCart(id) {
		$.post('api-product.php', {
			'action': 'add',
			'id': id
		}, function(data) {
			location.reload()
		})
	}
</script>
<?php
include_once('../layout/footer.php') ?>