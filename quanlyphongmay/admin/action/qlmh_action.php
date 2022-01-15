<?php 
	session_start(); 
	include '../../database.php';
	$tenMH= $_POST['tenMH'];
	$maMH     = $_POST['maMH'];
	$sql ="INSERT INTO monhoc(maMH,tenMH)
		        VALUES('$maMH', '$tenMH')";
	$change = mysqli_query($dbconnect,$sql);
	header("location:../qlmh.php");
?>