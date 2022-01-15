<?php include '../database.php'; 
	include_once '../functions.php';
?>
<?php
	
	/*$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$sql = "INSERT INTO thanhvien(username,password,name)
		        VALUES('$username', '$password','$name')";
	$check= "SELECT * FROM thanhvien WHERE username = '$username'";
	if(mysqli_query($dbconnect,$check)->num_rows > 0)
	{
		echo "Ten dang nhap da ton tai";
	}
	else
	{
		mysqli_query($dbconnect,$sql);
		if(!$dbconnect) 
	    {
	         echo mysqli_error(); 
	    }
	    else
	    {
	        echo "Successfully Inserted <br />";
	       echo "<a href='../login/index.php'>Login</a>";
	    }

	}*/
	
	//update

	if(isset($_POST['submit'])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$name = $_POST['name'];

		if(emtyinput($username,$password) !== false){
			header("location:index.php?error=emptyinput");
			exit();
		}
		if(invalidID($username) !== false){
			header("location:index.php?error=ivalidid");
			exit();
		}

		if(IDExist($dbconnect,$username) !== false){
		header("location:index.php?error=uidexisted");
		exit();
	}
		signup($dbconnect,$username,$password,$name);
	}
		    
?>