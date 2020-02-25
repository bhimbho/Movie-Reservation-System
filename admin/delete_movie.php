<?php
include '../db/conn.php';
$veri_id=$_GET['veri_id'];

$query="DELETE FROM tbl_movie WHERE movie_id='$veri_id'";
$result=$conn->query($query);
if($result){
header('refresh:0, view-movie.php');
echo "<script>alert('Profile Deleted')</script>";
}
else{
	echo "<script>alert('somethign wrong')</script>";
}
?>