 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css/styles.css">
 	<title>Home Page</title>
 </head>
 <?php 
session_start(); // starts the session
if($_SESSION['user']){ // checks if the user is logged in 

}
else{
	header("location:index.php"); // redirects if the user is not logged in 
}
$user = $_SESSION['user']; //assigns user value
 ?>
 <body>
 	<h2 class="jumbotron text-center">Home Page</h2>
 		<p class="text-center title-super"> Hello <?php print "$user"?>!</p>
 			<br/><br/>

 			<form action="add.php" method="POST">
 				<label class="form-group">Add more to list:</label> 
 				<input type="text" class="form-control" name="details"/> <br>

 				<label class="form-group">Public Post?</label> 
 				<input type="checkbox" class="checkbox" name="public[]" value="yes" />
 				<br>
 				<input type="submit" value="Add to list"/>
			</form>

			<h2 class="text-center">My List</h2>
			<table width="100%">
			<tr>
				<th>ID</th>
				<th>Details</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>


			</table>

 			<footer><a href="logout.php"> Click here to logout</a></footer>
 </body>
 </html>