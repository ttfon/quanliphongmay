<?php
	include '../../database.php';
	session_start(); 
		if(isset($_REQUEST['id']))
		{
			$id=$_GET['id'];
			$sql = "SELECT * FROM phongmay WHERE maPM = $id";
			if(mysqli_query($dbconnect,$sql))
			{
				require'../../admin/layout/header.php';
?>

<?php
			}

				
		}
?>
