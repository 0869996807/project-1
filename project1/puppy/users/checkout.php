<?php
session_start();

$title = 'Checkout Page';
include_once('../layout/header.php');
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');

require_once('form-checkout.php');
?>
<form method="post">
<div class="row">
	<div class="col-md-4" style="margin-left:53px" >
		<div class="form-group">
		  <label for="usr">FullName <font color="red">*</font>:</label>
		  <input required="true" type="text" class="form-control" id="fullname" name="fullname">
		</div>
		<div class="form-group">
		  <label for="email">Email <font color="red">*</font>:</label>
		  <input required="true" type="email" class="form-control" id="email" name="email">
		</div>
		<div class="form-group">
		  <label for="phone_number">Phone Number <font color="red">*</font>:</label>
		  <input required="true" type="tel" class="form-control" id="phone_number" name="phone_number">
		</div>
		<div class="form-group">
		  <label for="address">Address <font color="red">*</font>:</label>
		  <input required="true" type="text" class="form-control" id="address" name="address">
		</div>
	</div>
	<div class="col-md-7">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Hình ảnh</th>
					<th>Tên sản phẩm</th>
					<th>Giá</th>
					<th>Số lượng</th>
					<th>Thành tiền</th>
				</tr>
			</thead>
			<tbody>
<?php
$cart = [];
if(isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
}
$count = 0;
$total = 0;
foreach ($cart as $item) {
	$total += $item['num'] * $item['price'];
	echo '
		<tr>
			<td>'.(++$count).'</td>
			<td><img src="'.$item['thumbnail'].'" style="width: 100px"></td>
			<td>'.$item['title'].'</td>
			<td>'.number_format($item['price'], 0, '', '.').' VND</td>
			<td>'.$item['num'].'</td>
			<td>'.number_format($item['num'] * $item['price'], 0, '', '.').' VND</td>
		</tr>';
}
?>
			</tbody>
		</table>
		<p style="font-size: 26px; color: red">
			<span style="float:right; margin-right:20px ; margin-bottom: 10px;">Tổng tiền: <?=number_format($total, 0, '', '.')?> VND</span>
		</p>
		<button class="btn btn-success" style="width: 100%; font-size: 30px;">Complete</button>
	</div>
</div>
</form>
<?php
include_once('../layout/footer.php');
?>