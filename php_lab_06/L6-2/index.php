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

// Create table
$sql = "CREATE TABLE tbl_Students (
        StudentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Username VARCHAR(30) NOT NULL,
        Password VARCHAR(30) NOT NULL,
        Email VARCHAR(50),
        Country VARCHAR(30),
        Hobbies VARCHAR(300)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table tbl_Students created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
