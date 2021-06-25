<?php
session_start();

$title = 'Cart Page';
include_once('../layout/header.php');
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');
?>
<style type="text/css">
   input {
    margin-top:35px;
  }
</style>
<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Hình </th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>
          <th></th>
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
      <td><button class="btn btn-danger" onclick="deleteItem('.$item['id'].')">Delete</button></td>
    </tr>';
}
?>
      </tbody>
    </table>
    <p style="font-size: 26px; color: red">
      <span style="float:right; margin-right:20px ; margin-bottom: 10px;">Tổng tiền: <?=number_format($total, 0, '', '.')?> VND</span>
    </p>
    <a href="checkout.php">
      <button class="btn btn-success" style="width: 100%; font-size: 30px;">Tiếp tục</button>
    </a>
  </div>
</div>
<!-- body END -->
<script type="text/javascript">
  function deleteItem(id) {
    $.post('api-product.php', {
      'action': 'delete',
      'id': id
    }, function(data) {
      location.reload()
    })
  }
</script>
<?php
include_once('../layout/footer.php');
?>