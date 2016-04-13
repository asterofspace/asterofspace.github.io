<?php 
session_start();
$username = mysql_escape_string($_POST['username']);
$password = mysql_escape_string($_POST['password']);

mysql_connect("localhost", "root", "") or die(mysql_error()); //Connects to the server
				//selects database from the phpmyadmin
mysql_select_db("first_db") or die ("Cannot connect to database"); //connects to the database

$query = mysql_query("SELECT * from users WHERE username= '$username'"); //checks if the username matches any other usernames in the database

$exists = mysql_num_rows($query); //checks if the username exists in the database
$table_users = "";
$table_passwords = "";
if($exists > 0 ) //if there are no returning rows or no existing username
{
	while ($row = mysql_fetch_assoc($query))
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users and so on until the query is complete
		$table_passwords = $row['passwords']; // the first username row is passed on to $table_users and so on until the query is complete
	}
			if (($username == $table_users) && ($passwords == $table_passwords)) //checks if theres any matching fields
			{
					if($passwords == $table_passwords)
					{
						$_SESSION['user'] = $username;
						header("location: home.php");//redirects the user to the authenticated home page
					}
			}
			else
			{
				print '<script>alert("Incorrect Password");</script>';//prompts the user
				print '<script>window.location.assign("login.php");</script>'; // redirects to the login page 
			}


}
else
{
	print '<script>alert("Incorrect Username");</script>';//prompts the user
	print '<script>window.location.assign("login.php");</script>'; // redirects to the login page 
}



?>