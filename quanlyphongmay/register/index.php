<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quan Ly Phong May</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		.login{
			margin-top: 350px;
			background-color: 	#42c4f0;
			width: 500px;
			height: 300px;
			line-height: 40px;
			border-radius: 50px;

		}
		body {
			background-color: #4ce673;
		}
	</style>
</head>
<body>
	<center>
	    <div class="login">
	    	<div>
	    		<h1>Đăng Ký</h1>
	    	</div>
	    	
	    	<form method="POST" action="register.php">
		            <table>
		                <tr>
		                    <td>Usename</td>
		                    <td><input type="text" placeholder="Username" name="username"/></td>
		                </tr>
		                <tr>
		                    <td>Password</td>
		                    <td><input type="password"  name="password"/></td>
		                </tr>
		                <tr>
		                    <td>Họ và tên: </td>
		                    <td><input type="text"  name="name"/></td>
		                </tr>
		                <tr><td><button class="btn btn-warning" type="submit" name="submit">Đăng ký</button></td></tr>
		              
		            </table>
		            <?php
		            if (isset($_GET['error'])) {
		            	if($_GET['error'] == "emptyinput")
		            		echo "Không được để trống";
		            	elseif ($_GET['error'] == "ivalidid") {
		            		echo "username khong hop le";
		            	}
		            	elseif ($_GET['error'] == "uidexisted") {
		            		echo "username không hợp lệ";
		            	}
		            }
		            

		             ?>
		    </form>
		   	<form method="POST" action="../index.php">
		   		<input class="btn btn-warning" type="submit" value="Trở về" />
		   	</form>
		   	</div>
    </center>
</body>
</html>