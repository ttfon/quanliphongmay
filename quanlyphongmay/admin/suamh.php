<?php
	include '../database.php';
	session_start(); 
	if (isset($_SESSION['username']))
	{
		require'../admin/layout/header.php';
?>
<h1>Chỉnh Sửa Môn Học</h1>
<div class="info">
	<h2>Môn Học Hiện Tại</h2>
	<table class="table table-bordered">
		<tr>
			<td>Mã Môn Học</td>
			<td>Tên Môn Học</td>
		</tr>
		<?php
			$username = $_SESSION['username'];
			if(isset($_REQUEST['id']) && $_REQUEST!="")
			{
					$id=$_GET['id'];
					$sql = "SELECT * FROM monhoc WHERE maMH = '$id' ";
					$change = mysqli_query($dbconnect,$sql);
					if($change->num_rows > 0)
				{
					while($row = $change->fetch_assoc())
					{
						echo "<tr>
								<td> ".$row['maMH']." </td>
								<td>".$row['tenMH']." </td>

							</tr>";
						$temp = $row['maMH'];
					}
				
			
			

				
			
		?>
	</table>
</div>
<div class="editPM">
	<h2>Chỉnh Sửa Thông Tin </h2>
	<form method="POST" action=<?php echo"action/suamh.php?id=".$temp;?>>
		 <div class="form-group">
		    <label for="email">Mã Môn Học</label>
		    <input type="text" class="form-control" id="email" name="maMH">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Tên Môn Học</label>
		    <input type="text" class="form-control" id="pwd" name="tenMH">
		  </div>
		  <div class="form-group form-check">
		  </div>
		  <button type="submit" class="btn btn-primary">Cập Nhật</button>
		  <button type="button" class="btn btn-primary"><a href="qlmh.php" style="text-decoration: none; color: white;"> Quay về</a></button>
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
