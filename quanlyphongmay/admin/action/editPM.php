<?php
	include '../../database.php';
	session_start(); 
		if(isset($_REQUEST['id']))
		{
			$id=$_GET['id'];
			$maPM =$_POST['maPM'];
			$tenPM = $_POST['tenPM'];
			$sql = "UPDATE phongmay SET maPM = '$maPM',tenPM='$tenPM' WHERE maPM = '$id'";
			if(mysqli_query($dbconnect,$sql))
			{
				header("location:../qlpm.php");
			}
				
		}
?>
