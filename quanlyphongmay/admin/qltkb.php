<?php
	include '../database.php';
	session_start(); 
	if (isset($_SESSION['username']))
	{
		require'../admin/layout/header.php';
?>

<h1>Quản Lý Thời Khóa Biểu </h1>
<div class="info">
	<h2>Thời Khóa Biểu</h2>
	<table class="table table-bordered" style="width: 550px;">
		<tr>
			<td></td>
			<th>Thứ 2</th>
			<th>Thứ 3</th>
			<th>Thứ 4</th>
			<th>Thứ 5</th>
			<th>Thứ 6</th>
			<th>Thứ 7</th>
		</tr>
	<?php
		$username = $_SESSION['username'];
		$sql = "SELECT  * FROM phongmay,monhoc,tkb WHERE phongmay.maPM = tkb.maPM and monhoc.maMH = tkb.maMH";
		$ketqua = mysqli_query($dbconnect,$sql);
		while($row = $ketqua->fetch_array())
		{
			for ($a=1; $a < 5 ; $a++) 
			{ 
				echo "<tr><td>Tiết".$a."</td>";	
				for ($i=2; $i < 8; $i++)
				{ 
					if($row['thu'] == $i && $row['tiet']==$a)
					{
						echo "<td>".$row['tenMH']." || ".$row['tenPM']."</td>";
					}
					else
					{
						echo "<td></td>";
					}
					
				}		
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
	<form method="POST" action="action/qltkb_action.php">
		 <div class="form-group">
		    <label for="email">Mã Môn Học </label>
		    <input type="text" class="form-control" id="email" name="maMH">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Mã Phòng Máy</label>
		    <input type="text" class="form-control" id="pwd" name="maPM">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Thứ</label>
		    <input type="text" class="form-control" id="pwd" name="thu">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Tiết bắt đầu</label>
		    <input type="text" class="form-control" id="pwd" name="tiet">
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
		echo "Bạn phải đăng nhập";
	}

?>
