<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"/>
<head>
	<title>Multiplicand Table</title>
</head>
<body>
<section>
	<header>
		<h3>Login here</h3>
	</header>
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-Type: text/plain');
//ob_start();
session_start();
if(isset($_SESSION['username'])
{
	$echo 'You are currently logged in as ' $_SESSION['username'] '.';
}
else
{
?>
	<form action='content1.php' method='post'>
	<input type='text', name='login', value = 'username', id='username'><br>
	<input type='button', name = 'log_button', value = 'Login', id='log_button'>
	</form>
<?php	
}
?>

	
</section
</body>
</html>