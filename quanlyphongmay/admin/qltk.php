<?php
	include '../database.php';
	session_start(); 
	if (isset($_SESSION['username']))
	{
		require'../admin/layout/header.php';
?>
<h1>Quản Lý Tài Khoản</h1>
<div class="info">
	<h2>Thông Tin Tài Khoản</h2>
	<table class="table table-bordered">
		<tr>
			<th>Username</th>
			<th>Họ và Tên</th>
			<th>Mật Khẩu</th>
		</tr>
	<?php
		$username = $_SESSION['username'];
		$sql = "SELECT * FROM thanhvien WHERE username = '$username'  ";
		$change = mysqli_query($dbconnect,$sql);
		if($change->num_rows > 0)
		{
			while($row = $change->fetch_assoc())
			{
				echo "<tr><td>".$row["username"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["password"]."</td></tr>";
				
			}
		}
	?>
</table>
</div>
<button class="btn btn-primary" id="themMHbtn">Sửa Thông Tin</button>
<button class="btn btn-danger" id="anThem">Ẩn </button>
<script type="text/javascript">
	
		document.getElementById('themMHbtn').onclick = function(){
			document.getElementById('themMH').style.display='block';
		}
		document.getElementById('anThem').onclick = function(){
			document.getElementById('themMH').style.display='none';
		}
	
</script>
<div class="change" id="themMH" style="display: none;">
	<form method="POST" action="qlkt_action.php">
		 <div class="form-group">
		    <label for="email">Họ và tên</label>
		    <input type="text" class="form-control" id="email" name="name">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Đổi mật khẩu</label>
		    <input type="text" class="form-control" id="pwd" name="password">
		  </div>
		  <div class="form-group form-check">
		  </div>
		  <button type="submit" class="btn btn-primary">Cập Nhật</button>
	</form>
</div>
<?php
		require '../admin/layout/footer.php';
	}
	else
	{
		echo "Bạn phải đăng nhập";
	}

?>
