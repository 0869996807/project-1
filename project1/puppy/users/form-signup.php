<?php
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');
if(checkLogin() != null){
 		header('location: home.php');
 	}
 

	$fullname=$username = $email = $password =$address = $phonenumber = '' ;
	if(!empty($_POST)){
		$fullname = getPost('fullname');
		$username = getPost('username');
		$password = getPost('password');
		$password = getMd5Security($password);
		$cfm_password = getPost('cfm_password');
		$cfm_password = getMd5Security($cfm_password);
		$email = getPost('email');
		$address = getPost('address');
		$phonenumber = getPost('phonenumber');
		$created_at = $updated_at = date('Y-m-d H:i:s');
	}

 if(!empty($password) && !empty($cfm_password)){
 		if( $password == $cfm_password){
		if(!empty($username) && !empty($email)){
		$sql = "select * from users where username = '$username' or email = '$email'";
		$result = executeResult($sql);
		if($result != null && sizeof($result)>0){
			$message = "username/email đã tồn tại";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else {
			$sql = "insert into users (fullname,username,email,password,address,phonenumber,created_at,updated_at ) values ('$fullname','$username', '$email', '$password','$address','$phonenumber','$created_at','$updated_at') ";
			execute($sql);
			header('location: login.php');
		}
	}

	} else {
		$message = "mật khấu không khớp";
		echo "<script type='text/javascript'>alert('$message');</script>";
	} 
 }