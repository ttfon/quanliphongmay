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
			<th>Tên Phòng Máy </th>
			<th>Hành Động</th>
			<th>Trạng Thái</th>
		</tr>
		<?php

			$username = $_SESSION['username'];
			$sql = "SELECT * FROM phongmay  ";
			$change = mysqli_query($dbconnect,$sql);
			if($change->num_rows > 0)
			{
				
				while($row = $change->fetch_assoc())
				{	
					
					$active = "<a href='../admin/action/doitrangthai.php?id=".$row['maPM']."'><img src='images/on.png' width='50px' height='50px' ></a>";
					$nonactive ="<a href='../admin/action/doitrangthai.php?id=".$row['maPM']."'><img src='images/off.png' width='50px' height='50px'></a>";
					echo "<br/>";
					echo "<tr>
								<td>".$row['tenPM']." </td>
								<td> <button type= 'button' class= 'btn btn-primary'><a href='editPM.php?id=".$row['maPM']."'/>Sửa</button>
									<button type= 'button' class= 'btn btn-info'><a href='chitietpm.php?id=".$row['maPM']."'/>Chi Tiết</button>
								 <button type= 'button' class= 'btn  btn-danger' ><a href='action/deletePM.php?id=".$row['maPM']."' =/>Xóa</button> </td>
								 <td>";
						if($row['trangThai'] == 1){echo $active;} else{echo $nonactive;};
					
								 echo "</td></tr>";
							

				}
			}
		?>
	</table>

</div>
<button class="btn btn-primary" id="themMHbtn">Thêm Phòng Máy</button>
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
	<h2>Thêm Phòng Thực Hành:</h2>
	<form method="POST" action="action/qlpm.php">
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
		  <button type="submit" class="btn btn-primary">Thêm Phòng Máy</button>
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
