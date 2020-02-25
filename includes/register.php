<?php
require('../db/conn.php');
session_start();
if(isset($_POST['user1']) && isset($_POST['password'])){
	$username=$_POST['user1'];
	$pass=$_POST['password'];
	$fname=$_POST['fname'];
	$sname=$_POST['sname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$dob=$_POST['age'];
$query=$conn->query("INSERT INTO tbl_login VALUES (NULL,'$username','$pass','$fname','$sname','$email','$phone','$dob',NOW())");
if($query){
	
	echo "1";
}
else{
	echo '0';
}
}
?>