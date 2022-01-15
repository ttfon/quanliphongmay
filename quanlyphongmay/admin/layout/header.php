<!DOCTYPE html>
<html>
<head>
	<title>Admin - Quản Lý Phòng Máy</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" <?php echo 'href="../admin/css/index.css"' ?>>


</head>
<body>
	<div class="header">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		  <a class="navbar-brand" href="../admin/index.php">Trang Chủ</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>  
		</nav>
	</div>
	<div class="contain">
		<div class="left_contain">
			<ul class="list-group">
				<li class="list-group-item">
			  	<?php echo '<a href="../admin/index.php">Trang Chủ</a>' ?>
			  </li>
			  <li class="list-group-item">
			  	<?php echo '<a href="../admin/qltkb.php"> Quản Lý Thời Khóa Biểu</a>' ?>
			  </li>
			  <li class="list-group-item">
			  	<?php echo '<a href="../admin/qlpm.php"> Quản Lý Phòng máy</a>' ?>
			  </li>
			  <li class="list-group-item">
			  	<?php echo '<a href="../admin/qlmh.php"> Quản Lý Môn Học</a>' ?>
			  </li>
			  <li class="list-group-item">
			  	<?php echo '<a href="./qltk.php">Thông Tin Tài Khoản</a>' ?>
			  </li> 
			</ul>
		</div>
		<div class="right_contain">
		