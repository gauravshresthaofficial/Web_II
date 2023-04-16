<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
</head>
<body>
	<form method="post" action="process.php">
		<label>Username:</label>
		<input type="text" name="username" required><br><br>

		<label>Password:</label>
		<input type="password" name="password" required><br><br>

		<label>Email:</label>
		<input type="email" name="email" required><br><br>

		<label>Gender:</label>
		<input type="radio" name="gender" value="male" required>Male
		<input type="radio" name="gender" value="female" required>Female<br><br>

		<label>Country:</label>
		<select name="country" required>
			<option value="">Select Country</option>
			<option value="USA">USA</option>
			<option value="UK">UK</option>
			<option value="Nepal">India</option>
		</select><br><br>

		<label>Hobbies:</label>
		<input type="checkbox" name="hobbies[]" value="reading" >Reading
		<input type="checkbox" name="hobbies[]" value="music" >Music
		<input type="checkbox" name="hobbies[]" value="sports" >Sports<br><br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
