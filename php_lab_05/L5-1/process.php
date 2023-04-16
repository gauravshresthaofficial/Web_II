<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form - Result</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid black;
		}

		th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<?php
		// Get form data
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];
		$hobbies = $_POST['hobbies'];

		// Validate email
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "<p>Invalid email format</p>";
			exit;
		}

        //Check if at least one hobby is selected
        if (count($hobbies) < 1) {
			echo "<p style='color:red;'>At least one hobby is required</p>";
			exit;
		}

		// Display form data in table
		echo "<table>";
		echo "<tr><th>Field</th><th>Value</th></tr>";
		echo "<tr><td>Username</td><td>$username</td></tr>";
		echo "<tr><td>Password</td><td>$password</td></tr>";
		echo "<tr><td>Email</td><td>$email</td></tr>";
		echo "<tr><td>Gender</td><td>$gender</td></tr>";
		echo "<tr><td>Country</td><td>$country</td></tr>";
		echo "<tr><td>Hobbies</td><td>" . implode(", ", $hobbies) . "</td></tr>";
		echo "</table>";
	?>
</body>
</html>
