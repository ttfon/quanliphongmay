<?php 
	session_start(); 
	include '../database.php';
	$username = $_SESSION['username'];
	$password = $_POST['password'];
	$name     = $_POST['name'];
	//$name = $_POST['name'];
	$sql = "SELECT * FROM thanhvien WHERE username = '$username'  ";
	$change = mysqli_query($dbconnect,$sql);
	if($change->num_rows == 1)
	{
		$sql = "UPDATE thanhvien SET password='$password', name = '$name' WHERE username = '$username'";
		if($password != '' || $name !='')
			{
				mysqli_query($dbconnect,$sql);
				header("location:qltk.php");
				
			}
	}

?>