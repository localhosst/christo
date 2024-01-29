<html>
	<head>
		<title>Register</title>
	</head>
	<body>
		<h1>REGISTER</h1>
		<form action="" method="post">
			USERNAME: <input type="text" name="username"><br>
			E-MAIL: <input type="text" name="email"><br>
			PHONE NO: <input type="text" name="phone"><br>
			PASSWORD: <input type="password" name="password"><br>
			RE-TYPE PASSWORD: <input type="password" name="repassword">
			<input type="submit" value="Register">
		</form>
		<div>
			Already have an account? <a href="loggin.php">Login</a>
		</div>
<?php
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];

	if($password!=$repassword) 
	{
		echo "Passwords do not match";
	}
	else
	{
        include 'connn.php';
		if(!$conn)
		{
			echo "Cannot connect";
		}
		else
		{
			$q = "INSERT INTO login (username, email, phone, password) VALUES ('$username', '$email', '$phone', '$password')";
			$query = mysqli_query($conn, $q);
			if ($query) {
				echo "<h2>Registered!</h2>";
			} else {
				echo "<h2>Cannot register!</h2>";
			}
			mysqli_close($conn);
		}
	}
?>
	</body>
</html>

