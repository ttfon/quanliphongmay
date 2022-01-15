<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Quan Ly Phong May</title>
	<link rel="stylesheet" type="text/css" href="admin/css/index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		.login{
			margin-top: 200px;
			background-color: 	#42c4f0;
			width: 500px;
			height: 550px;
			line-height: 40px;
			border-radius: 20px;
		}
		body {
			background-color: #4ce673;
		}
		.login  img{
			width: 400px;
			height: 300px;
		}
	</style>
</head>
<body>

	<center>
	    <div class="login">
				<img src="https://lms.ou.edu.vn/201/login/Login_v12/images/logo-white.png">
	    		<h1>Quản Lý Phòng Máy</h1>
	    	<form method="POST" action="login/index.php">
		            <table>
		                <tr>
		                    <td><input  class="btn btn-warning" type="submit"  name="dangnhap" value="Đăng nhập" /></td>
		                </tr>
		            </table>
		    </form>
		    <form method="POST" action="register/index.php">
		            <table>
		                <tr>
		                    <td><input class="btn btn-warning" type="submit"  name="dangky" value="Đăng ký" /></td>
		                </tr>
		            </table>
		    </form>
		</div>
    </center>
</body>
</html>