<?php 

	$db = mysqli_connect('localhost', 'root', '' , 'registration');


	if (isset($_POST['register'])) {
		$username = mysql_real_escape_string($_POST['username']);# code...
		$email	=	mysql_real_escape_string($_POST['email']);
		$password_1	=	mysql_real_escape_string($_POST['password_1']);
		$password_2	=	mysql_real_escape_string($_POST['password_2']);

		if (empty($username)) {
			array_push($errors, "Username is required");# code...
		}
		if (empty($email)) {
			array_push($errors, "email is required");# code...
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");# code...
		}

		if ($password_1 != $password_2) {
			array_push($errors, "The two password do not match");
		}

		if (count($errors) == 0) {
			$password = md5($password_1);
			$sql = "INSERT INTO users (username, email, password) 
						VALUES ('$username', '$email', '$password')";

			mysqli_query($db, $sql);
		}

	}
 ?>