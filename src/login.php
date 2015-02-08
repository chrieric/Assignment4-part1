<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"/>
<head>
	<title>Multiplicand Table</title>
</head>
<body>
<section>
<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-Type: text/plain');
//checks to see if session with value associated to 'username' key has already been created
//if it has it lets the user know they are already logged in and gives a link for them to navigate to
if(isset($_SESSION['username']))
{
	echo "You are already logged in as $_SESSION[username]<br>";
	echo 'Click <a href="content1.php">here</a> to head back on over to that crazy initial page!';
}
//if not, displays form allowing user to enter a user name and submit it via post
else
{
?>
	<form action='content1.php' method='post'>
	<input type='text' name='username' value = 'User Name' id='username'><br>
	<input type='submit' value = 'Login'>
	</form>
<?php	
}
?>

</section
</body>
</html>