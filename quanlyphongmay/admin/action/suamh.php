<?php
	include '../../database.php';
	session_start(); 
		if(isset($_REQUEST['id']))
		{
			$id=$_GET['id'];
			$maMH =$_POST['maMH'];
			$tenMH = $_POST['tenMH'];
			$sql = "UPDATE monhoc SET maMH = '$maMH',tenMH='$tenMH' WHERE maMH = '$id'";
			if(mysqli_query($dbconnect,$sql))
			{
				header("location:../qlmh.php");
			}
				
		}
?>
