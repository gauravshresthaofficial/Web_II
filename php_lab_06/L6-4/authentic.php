<?php
session_start();

$dbname = "DB_NAME"; // replace with your database name
$servername = "localhost"; // replace with your servername
$username = "root"; // replace with your username
$password = ""; // replace with your password

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user inputs
$username = $_POST['username'];
$password = $_POST['password'];

// SQL statement to authenticate user
$sql = "SELECT * FROM tbl_Users WHERE Username='$username' AND Password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // Authentication successful
    $_SESSION['username'] = $username;
    header('Location: available_students.php');
} else {
    // Authentication failed
    echo "Authentication failed. Please try again.";
}

mysqli_close($conn);
?>
