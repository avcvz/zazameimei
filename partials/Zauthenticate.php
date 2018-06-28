<?php 
	// include "connect.php";
	session_start();


	$uname =htmlspecialchars($_POST['username']);
	$password =htmlspecialchars($_POST['password']);
	$hashpw = sha1($password);

	if (authenticate($uname, $hashpw)) {
		$_SESSION['user'] = $uname;
		// echo 'User is Valid';
		header('Location: ../Zshop.php');
			
		$_SESSION["user"] = $username;
	}else{
		echo 'You have entered an invalid username or password.'."<br>"."<br>";
		echo "<a href='../Zlogin.php'>Try Again</a>";
	}

	function authenticate($uname, $pw){
		include "Zconnect.php";
		$sql = "SELECT * FROM users WHERE username = '$uname'
		AND password = '$pw'";


		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			return true;
		}else {
			return false;
		}
		mysqli_close($conn);
	}
	


		// if($username == 'admin' && $password == 'secret'){
		// 	return true;
		// }else{
		// 	return false;
		// }

 ?>