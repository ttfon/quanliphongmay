<?php
	include '../database.php';
	session_start(); 
	if (isset($_SESSION['username']))
	{
		require'../admin/layout/header.php';
?>

<h1>Quản Lý Môn Học </h1>
<div class="info">
	<h2>Thông Tin Môn Học</h2>
	<table class="table table-bordered">
		<tr>
			<th>Tên Môn Học</th>
			<th>Hành Động</th>
		</tr>
	<?php
		$username = $_SESSION['username'];
		$sql = "SELECT * FROM monhoc ";
		$change = mysqli_query($dbconnect,$sql);
		if($change->num_rows > 0)
		{
			while($row = $change->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".$row["tenMH"]."</td>";
				echo "<td> <button type= 'button' class= 'btn btn-primary'><a href='suaMH.php?id=".$row['maMH']."'/>Sửa</button>
									<button type= 'button' class= 'btn btn-info'><a href='chitietmh.php?id=".$row['maMH']."'/>Chi Tiết</button>
								 <button type= 'button' class= 'btn  btn-danger' ><a href='action/deletemh.php?id=".$row['maMH']."' =/>Xóa</button> </td>
								 ";
				
			}
		}
	?>
</table>
</div>
<button class="btn btn-primary" id="themMHbtn">Thêm môn học</button>
<button class="btn btn-danger" id="anThem">Ẩn </button>
<script type="text/javascript">
	
		document.getElementById('themMHbtn').onclick = function(){
			document.getElementById('themMH').style.display='block';
		}
		document.getElementById('anThem').onclick = function(){
			document.getElementById('themMH').style.display='none';
		}
	
</script>
<div class="change"  id="themMH" style="display: none;">
	<form method="POST" action="action/qlmh_action.php">
		 <div class="form-group">
		    <label for="email">Mã Môn Học </label>
		    <input type="text" class="form-control" id="email" name="maMH">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Tên Môn Học</label>
		    <input type="text" class="form-control" id="pwd" name="tenMH">
		  </div>
		  <div class="form-group form-check">
		  </div>
		  <button type="submit" class="btn btn-primary">Cập Nhật</button>
	</form>
</div>
<?php
		//require '../admin/layout/footer.php';
	}
	else
	{
		echo "Ban phai dang nhap";
	}

?>
