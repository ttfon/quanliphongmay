<?php 
	session_start(); 
	include '../../database.php';
	$maMH = $_POST['maMH'];
	$maPM     = $_POST['maPM'];
	$tiet = $_POST['tiet'];
	$thu     = $_POST['thu'];
	$sql ="INSERT INTO tkb(maPM,tiet,maMH,thu)
		        VALUES('$maPM', '$tiet','$maMH','$thu')";
	$change = mysqli_query($dbconnect,$sql);
	header("location:../qltkb.php");
?>