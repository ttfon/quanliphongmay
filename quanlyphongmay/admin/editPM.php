<?php
	include '../database.php';
	session_start(); 
	if (isset($_SESSION['username']))
	{
		require'../admin/layout/header.php';
?>
<h1>Quản Lý Thông Tin Phòng Máy</h1>
<div class="info">
	<h2>Thông Tin Các Phòng Máy</h2>
	<table class="table table-bordered">
		<tr>
			<td>Mã Phòng Máy </td>
			<td>Tên Phòng Máy </td>
		</tr>
		<?php
			$username = $_SESSION['username'];
			if(isset($_REQUEST['id']) && $_REQUEST!="")
			{
					$id=$_GET['id'];
					$sql = "SELECT * FROM phongmay WHERE maPM = '$id' ";
					$change = mysqli_query($dbconnect,$sql);
					if($change->num_rows > 0)
				{
					while($row = $change->fetch_assoc())
					{
						echo "<tr>
								<td> ".$row['maPM']." </td>
								<td>".$row['tenPM']." </td>

							</tr>";
						$temp = $row['maPM'];
					}
		?>
	</table>
</div>
<div class="editPM">
	<h2>Chỉnh Sửa Thông Tin </h2>
	<form method="POST" action=<?php echo"action/editPM.php?id=".$temp;?>>
		 <div class="form-group">
		    <label for="email">Mã Phòng Máy</label>
		    <input type="text" class="form-control" id="email" name="maPM">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Tên Phòng Máy</label>
		    <input type="text" class="form-control" id="pwd" name="tenPM">
		  </div>
		  <div class="form-group form-check">
		  </div>
		  <button type="submit" class="btn btn-primary">Cập Nhật</button>
		  <button type="button" class="btn btn-primary"><a href="qlpm.php" style="text-decoration: none; color: white;"> Quay về</a></button>
	</form>
</div>
<?php
			}
		}
		require '../admin/layout/footer.php';
	}
	else
	{
		echo "Ban phai dang nhap";
	}

?>
