<?php 
	 include "connect.php";

	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$fullname = $_POST['name'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$confirmpw = $_POST['confirmPassword'];

	$sql1 = "SELECT username FROM users WHERE username = '$username'";
	$result1 = mysqli_query($conn, $sql1);
	$row_count = mysqli_num_rows($result1);
	if ($row_count == 0 && ($password == $confirmpw)){
		$hashpw = sha1($password);
		$sql2 = "INSERT INTO users(username, email, fullname, password, address) VALUES ('$username','$email','$fullname','$hashpw','$address')";

		$result2 = mysqli_query($conn, $sql2);
		if ($result2 == true){
			echo "success";
			header('Location: ../registrationSuccess.php');
		} else {
			echo mysqli_error($conn);
		}
		// echo "USER SUCCESSFULLY REGISTERED";
	} else {
		echo "ERROR IN REGISTRATION";
	}

	mysqli_close($conn);

 ?>
<!-- 
 	if (authenticate($uname, $hashpw)) {
		$_SESSION['user'] = $uname;
		// echo 'User is Valid';
		header('Location: ../Zshop.php');
			
		$_SESSION["user"] = $username;
	}else{
		echo 'Incorrect login details.'."<br>"."<br>";
		echo "<a href='../Zlogin.php'>Try Again</a>";
	} -->




<!--  //  FOR TESTING
	// echo $name . "<br>";
	// echo $username . "<br>";
	// echo $email . "<br>";
	// echo $address . "<br>";
	// echo $password . "<br>";
	// echo $confirmpw . "<br>"; -->