<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
</head>
<body>
	<form method="post" action="process.php">
		<label>Username:</label>
		<input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : 'John Doe'; ?>" required><br><br>

		<label>Password:</label>
		<input type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : 'mypassword'; ?>" required><br><br>

		<label>Email:</label>
		<input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : 'johndoe@example.com'; ?>" required><br><br>

		<label>Gender:</label>
		<input type="radio" name="gender" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'male') ? 'checked' : ''; ?> required>Male
		<input type="radio" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ? 'checked' : ''; ?>>Female<br><br>

		<label>Country:</label>
		<select name="country" required>
			<option value="">Select Country</option>
			<option value="USA" <?php echo (isset($_POST['country']) && $_POST['country'] == 'USA') ? 'selected' : ''; ?>>USA</option>
			<option value="UK" <?php echo (isset($_POST['country']) && $_POST['country'] == 'UK') ? 'selected' : ''; ?>>UK</option>
			<option value="Nepal" <?php echo (isset($_POST['country']) && $_POST['country'] == 'Nepal') ? 'selected' : ''; ?>>India</option>
		</select><br><br>

		<label>Hobbies:</label>
		<input type="checkbox" name="hobbies[]" value="reading" <?php echo (isset($_POST['hobbies']) && in_array('reading', $_POST['hobbies'])) ? 'checked' : ''; ?>>Reading
		<input type="checkbox" name="hobbies[]" value="music" <?php echo (isset($_POST['hobbies']) && in_array('music', $_POST['hobbies'])) ? 'checked' : ''; ?>>Music
		<input type="checkbox" name="hobbies[]" value="sports" <?php echo (isset($_POST['hobbies']) && in_array('sports', $_POST['hobbies'])) ? 'checked' : ''; ?>>Sports
		<span style="color:red;">*</span> At least one hobby is required<br><br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
