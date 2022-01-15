<?php
	session_start(); 
	if (isset($_SESSION['username']))
	{
		require '../admin/layout/header.php';

		echo '<div class = "info"> <h1>XIN CHÀO '. $_SESSION['username'];
		
		echo'<form method="POST" action="logout.php">
		<button type="submit" class="btn btn-danger" id="logout">Logout</button>
		 </form>';
		 echo '</h1></div>';
		require '../admin/layout/footer.php';
	}
	else
	{
		echo "Ban phai dang nhap";
	}

?>
		
	