<?php 
	session_start(); 
	include '../../database.php';
	$tenPM = $_POST['tenPM'];
	$maPM     = $_POST['maPM'];
	$sql ="INSERT INTO phongmay(maPM,tenPm)
		        VALUES('$maPM', '$tenPM')";
	$change = mysqli_query($dbconnect,$sql);
	header("location:../qlpm.php");
?>