<?php 

	//quang cac ham vao day de de quan ly

	function emtyinput($username,$password){
		$result = false;
		if(empty($username) || empty($password))
			$result = true;
		return $result;
	}

	function invalidID($username)
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
			return true;
		else
			return false;
	}
	function IDexist($conn,$username)
	{
		$sql = "SELECT * FROM thanhvien WHERE username = ?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location:index.php?error=preparestmtfailed");
			exit();
		}
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_execute($stmt);

		$resultData = mysqli_stmt_get_result($stmt);
		if($row = mysqli_fetch_assoc($resultData))
			return $row;
		else
			return false;
		mysqli_stmt_close($stmt);
		}

	
	function login($conn,$username,$pwd)
	{
		$nameExist = IDexist($conn,$username);
		if($nameExist === false){
			header("location:index.php?error=whoareu");
			exit();
		}
		if($pwd === $nameExist['password']){
			session_start();
			$_SESSION['username'] = $username;
			
			header("location: ../admin/index.php");
		}
		else{
			header("location:index.php?error=wrongpass");
			exit();
		}
	}
	function signup($conn,$username,$password,$name)
	{

		$sql = "INSERT INTO thanhvien(username,password,name)
				VALUES (?,?,?)";

		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location:index.php?error=stmtfailed111");
			exit();
		}
		mysqli_stmt_bind_param($stmt, "sss", $username,$password,$name);
		mysqli_stmt_execute($stmt);
		header("location:../login/index.php");
		mysqli_stmt_close($stmt);
	}
	
 ?>