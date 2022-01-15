<?php
	include '../database.php';
	session_start(); 
		if(isset($_REQUEST['id']))
		{
			$id=$_GET['id'];
			$sql = "SELECT * FROM phongmay WHERE maPM = $id";
			if(mysqli_query($dbconnect,$sql))
			$row = mysqli_query($dbconnect,$sql)->fetch_assoc();
			{
				require'../admin/layout/header.php';
				if($row['trangThai'] == 1)
					$row['trangThai'] ="Đang hoạt động";
				else
					$row['trangThai']= "Không hoạt động";
?>
<div class="info">
		<h2>Chi Tiết Phòng Máy  </h2>
		<h4>Tên: <?php  echo $row['tenPM']." </h4>";?>
		<h4>Mã: <?php echo $row['maPM']." </h4>";?>
		<h4>Trạng Thái: <?php echo $row['trangThai']." </h4>";?>
		<br>
		<button type="button" class="btn btn-primary"><a href="qlpm.php" style="text-decoration: none; color: white;"> Quay về</a></button>
</div>
<?php
			}

				
		}
?>
