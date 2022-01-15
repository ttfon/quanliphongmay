<?php 
include '../../database.php';
if(isset($_REQUEST['id']))
		{
			$id=$_GET['id'];
			$sql ="SELECT trangThai from `phongmay` WHERE maPM =".$id;
			$ketqua = mysqli_query($dbconnect,$sql);
			if($row = mysqli_fetch_assoc($ketqua))
			{
				$tam = $row['trangThai'];
				if($tam == 0)
					$tam = 1;
				else
					$tam = 0;
			}
			$sql ="UPDATE `phongmay` SET trangThai =".$tam ." WHERE maPM =".$id;
			mysqli_query($dbconnect,$sql);
			echo $tam;
			header('location:../qlpm.php');
		}
	
?>