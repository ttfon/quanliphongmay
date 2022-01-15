<?php
include '../../database.php';
	if(isset($_REQUEST['id']) && $_REQUEST!="")
	{
	$id=$_GET['id'];
	$sql = "DELETE From monhoc WHERE maMH ='$id' ";
	if(mysqli_query($dbconnect,$sql))
	{
		header('location:../qlmh.php');
	}
	}
?> 