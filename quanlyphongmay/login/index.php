<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Phòng Máy</title>
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
		.login a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body >
	<center>
	    <div class="login">
	    	<div>
	    		<h1>Đăng Nhập</h1>
	    	</div>
	    	
	    	<form method="POST" action="login.php">
		            <table>
		                <tr>
		                    <td>Usename</td>
		                    <td><input type="text" placeholder="Usename" name="username"/></td>
		                </tr>
		            </table>
		            <table>
		                <tr>
		                    <td>Password</td>
		                    <td><input type="password"  name="password"/></td>
		                </tr>
		            </table>
		             <table>
		                <tr><td><button class="btn btn-warning" type="submit" name="submit">Đăng nhập</button></td>
		                	<td><button class="btn btn-warning"><a  href="../index.php"> Trở về</a></button></td>
		                </tr>

		            </table>
		            <?php
		            if (isset($_GET['error'])) {
		            	if($_GET['error'] == "emptyinput")
		            		echo "Không được để trống";
		            	elseif ($_GET['error'] == "ivalidid") {
		            		echo "username không hợp lệ";
		            	}
		            }
		            

		             ?>
		    </form>
		    </div>
    </center>
</body>
</html>