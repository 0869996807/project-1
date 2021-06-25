<?php
session_start();

$title = 'Complete Page';
include_once('../layout/header.php');
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');
?>
<div class="row">
	<div class="col-md-12">
		<h1 style="text-align: center;">Đặt hàng thành </h1>
	</div>
</div>
<?php
include_once('../layout/footer.php');
?>