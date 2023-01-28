<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title>Form</title>
		<style>
			form {width: 499px; margin: auto; background-color: red;}
			label { width: 250px; padding: 20px; margin: auto;}
			input{width: 299px;}
			body {background-color: powderblue;}
		</style>
	</head>
	<body>
		<form action="index.php" method="post">
			<label for="name">Name</label>
			<input type="text" name="name"><br>
			
			<label for="email">Email</label>
			<input type="email" name="email"><br>
			
			<label for="password">Password</label>
			<input type="password" name="pass"><br>

			<button type="submit">Submit</button>
		</form>

		<?php 
		
		sayHello('remote world');
			
		
			
		?>
	</body>
</html>