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
$servername = "localhost";
$username = "root";
$pw = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $pw, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get values from form
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $country = $_POST["country"];
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

  // Prepare SQL statement
  $stmt = $conn->prepare("INSERT INTO tbl_Students (username, Password, Email, Country, Hobbies) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $username, $password, $email, $country, $hobbies);

  // Execute statement
  if ($stmt->execute() === TRUE) {
    // Redirect to form with cleared values
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
    exit();
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}

$conn->close();
?>






		

</body>
</html>
