<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

$name;

//if a session value corresponding to the 'username' key is not set
//sets it equal to the value corresponding to the same key in post
if(!isset($_SESSION['username']))
{
	$_SESSION['username'] = $_POST['username'];
}

//if no active session with an entered username redirects to login.php
if(!isset($_SESSION['username']))
{
	header('Location: login.php',true);
}
?>
<!DOCTYPE html>
<html lang='en'>
<meta charset='utf-8'>
<head>
</head>
<body>
<?php
//verifies that a session is currently in progress
if(session_status() == PHP_SESSION_ACTIVE)
{	
	//verifies that the value associated with the username key is not null and is not an empty string
	if($_SESSION['username'] != null && $_SESSION['username'] != '')
	{	
		$name = $_SESSION['username'];
		
		//if no value corresponding to 'count' key it creates one and begins at zero
		//if one already exists, it increments the value by 1
		if(!isset($_SESSION['count']))
		{
			$_SESSION['count'] = 0;
		}
		else
		{
			$_SESSION['count']++;
		}

		echo "Hello ".  $name . " you have visited this page " .$_SESSION['count']. " times before. <br>";
		echo 'Click <a href="content2.php">here</a> to visit yet another exciting page <br>';
		echo 'Click <a href="logout.php">here</a> to log out.<br>';
			
	}
	else
	{
		echo 'A user name must be entered. Click <a href="login.php">here</a> to return to the login screen.';
	}	
}
?>