<!DOCTYPE html>
<html lang='en'>
<meta charset='utf-8'>
<head>
</head>
<body>
<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

if(!isset($_SESSION['username']))
{
	$_SESSION['username'] = $_POST['username'];
}

if(!isset($_SESSION['username']))
{
	header('Location:login.php',true);
}

if(session_status() == PHP_SESSION_ACTIVE)
{
	if(isset($_SESSION['username']))
	{
		echo 'Click <a href="content1.php">here</a> to head back on over to that crazy initial page!';
	}
}
?>
</body>
</html>