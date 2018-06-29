<?php 
	session_start(); 

	$username =htmlspecialchars($_POST['username']);
	$password =htmlspecialchars($_POST['password']);

	if (authenticate($username, $password)) {
		// echo 'User is Valid';
		header('Location: ../catalog.php');
			
		$_SESSION["user"] = $username;
	}else{
		echo 'Incorrect login details.'."<br>"."<br>";
		echo "<a href='../Zlogin.php'>Try Again</a>";
	}

	function authenticate($username, $password){
		include "Zconnect.php";
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			return true;
		}else {
			return false;
		}
		mysqli_close($conn);
	}
 ?>
