<?php
	session_start();
		include '../database.php';
		include_once '../functions.php';
			//$username = $_POST["username"];
			//$password = $_POST["password"];

			/*$sql = "SELECT * FROM thanhvien WHERE username = '$username' and password = '$password'";
			$user = mysqli_query($dbconnect,$sql);
			if(mysqli_num_rows($user)> 0)
			{
				$_SESSION['username'] = $username;
				header("location: ../admin/index.php");
			}
			else
			{
				echo "ban da nhap sai username hoac password";
			}*/

		//update

	if(isset($_POST['submit'])){
		$username = $_POST["username"];
		$password = $_POST["password"];


		if(emtyinput($username,$password) !== false){
			header("location:index.php?error=emptyinput");
			exit();
		}
		if(invalidID($username) !== false){
			header("location:index.php?error=ivalidid");
			exit();
		}
		

		login($dbconnect,$username,$password);
	}

?>