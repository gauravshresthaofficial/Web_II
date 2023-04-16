<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Login Form</h2>
	<?php
		if(isset($_POST['submit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($username == 'SuperUser' && $password == 'California') {
				echo '<p style="color:green;">Authentication successful!</p>';
			} else {
				echo '<p style="color:red;">Authentication failed. Please check your username and password and try again.</p>';
			}
		}
	?>
	<form method="post" action="">
		<label>Username:</label>
		<input type="text" name="username" required><br><br>

		<label>Password:</label>
		<input type="password" name="password" required><br><br>

		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>
