<?php
require('../db/conn.php');
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
	$username=$_POST['username'];
	$pass=$_POST['password'];
$query=$conn->query("SELECT * FROM tbl_login WHERE username='$username' AND password='$pass'");
$row=$query->num_rows;
if($row>0){
	$row=$query->fetch_assoc();
	$_SESSION['user_id']=$row['user_id'];
	$_SESSION['email']=$row['email'];
	$_SESSION['user']=$username;
	echo "1";
}
else{
	echo '0';
}
}
?>