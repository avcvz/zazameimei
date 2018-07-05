<?php  
	session_start();
	$uname = htmlspecialchars($_POST['username']);
	$pw = htmlspecialchars($_POST['password']);
	$hashpw = sha1($pw);
	
	if(authenticate($uname, $hashpw)){
		$_SESSION['user'] = $uname;
		header("Location: ../shop.php");
	} else {
		echo 'You have entered an invalid username or password.'."<br>"."<br>";
		echo "<a href='../login.php'>Try Again</a>";
	}

	function authenticate($uname, $pw){
		include "connect.php";	
		$sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pw'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) { 
			return true;
		} else {
			return false;
		}
		mysqli_close($conn);
	}
?>