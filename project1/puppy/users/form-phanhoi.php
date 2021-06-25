<?php
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');

$name = $email = $phone = $content =$created_at = '';
if(!empty($_POST)){
	$name = getPost('name');
	$email = getPost('email');
	$phone = getPost('phone');
	$content = getPost('content');
	$created_at = date('Y-m-d H:i:s');	
	$sql = "insert into contact (name,email,phone,content,created_at) values ('$name','$email', '$phone', '$content', '$created_at') ";
	execute($sql);
	header('location: home.php');
	die();
}

 

