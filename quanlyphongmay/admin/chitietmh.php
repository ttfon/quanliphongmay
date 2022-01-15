<?php
	include '../database.php';
	session_start(); 
		if(isset($_REQUEST['id']))
		{
			$id=$_GET['id'];
			$sql = "SELECT * FROM monhoc WHERE maMH = $id";
			if(mysqli_query($dbconnect,$sql))
			$row = mysqli_query($dbconnect,$sql)->fetch_assoc();
			{
				require'../admin/layout/header.php';
?>
<div class="info">
		<h2>Chi Tiết Môn Học  </h2>
		<h4>Tên Môn Học: <?php  echo $row['tenMH']." </h4>";?>
		<h4>Mã Môn Học: <?php echo $row['maMH']." </h4>";?>
		<br>
		<button type="button" class="btn btn-primary"><a href="qlmh.php" style="text-decoration: none; color: white;"> Quay về</a></button>
</div>
<?php
			}

				
		}
?>
