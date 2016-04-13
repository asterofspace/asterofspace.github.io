<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<h2 class="jumbotron text-center">Registration Page</h2>
<a href="index.php">Click here to go back</a>
	<form action="register.php" method="post">
		<div class="form-group">
		<label class="">Enter Username:</label>
			<input type="text" class="form-control" name="username" required="required"/ ><br>
			<label>Enter Password:</label>
				<input type="password" name="password" class="form-control" required="required"/>
				<input type="submit" value="Register" />
			</div>
		</form>
	</body>
</html>

<?php 			//REQUEST_METHOD checks if the user clicked the submit button
	if($_SERVER["REQUEST_METHOD"] =="POST"){
	$username = mysql_real_escape_string($_POST['username']); // $_POST collects the data from the html Form value 'username'
				// mysql_real_escape_string makes sure the inputed value inside the form input isnt a sql injection 
	$password = mysql_real_escape_string($_POST['password']); // $_POST collects the data from the html Form value 'username'
	$bool = true;

	mysql_connect("localhost", "root","") or die(mysql_error()); // Connects to server
	mysql_select_db("first_db") or die("Cannot connect to database"); // This connects to the database :)
	

	$query = mysql_query("Select * from users"); //query the users table
	while($row = mysql_fetch_array($query)) // displays all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finshed
		if ($username == $table_users) // checks if there are any matching fields
		{
			$bool = false; //sets bool false 
			print '<script>alert("username has been taken!");</script>'; // prompts the user
			print '<script>window.location.assign("register.php");</script>'; //redirects to register.php
		}
	}
 


	if($bool) // checks if bool is true 
	{
		mysql_query("INSERT INTO users (username, password) VALUES ('$username', '$password')"); // inserts the values to table users
		print '<script>alert("Succesfully Registered!");</script>'; // prompts the user
		print '<script>window.location.assign("register.php");</script>'; //redirects to register.php


	}
}
?>