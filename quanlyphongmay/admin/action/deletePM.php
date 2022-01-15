<?php
include '../../database.php';
	if(isset($_REQUEST['id']) && $_REQUEST!="")
	{
	$id=$_GET['id'];
	$sql = "DELETE From phongmay WHERE maPM ='$id' ";
	if(mysqli_query($dbconnect,$sql))
	{
		header('location:../qlpm.php');
	}
	}
?> 