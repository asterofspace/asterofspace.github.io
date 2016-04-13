<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>login Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<h2 class="jumbotron text-center">Login Page</h2>
<a href="index.php">Click here to go back</a>
	<form action="checklogin.php" method="post">
		<div class="form-group">
		<label>Enter Username:</label>
			<input type="text" name="username" class="form-control" required="required"/ ><br>
			<label>Enter Password:</label>
				<input type="password" name="password" class="form-control" required="required"/>
				<input type="submit" value="Login" />
			</div>

	</form>
</body>
</html>