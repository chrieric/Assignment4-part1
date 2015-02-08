<?php
//ob_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

$name;

if(session_status == PHP_SESSION_NONE)
{
	session_start();
	$_SESSION['username'] = $_POST['username'];
}

if(!isset($_SESSION['username']))
{
	header('Location:login.php',true);
}

//verifies that a session is currently in progress
if(session_status() == PHP_SESSION_ACTIVE)
{	
	if(isset($_POST['username']) && $_POST['username'] != '')
	{
		$_SESSION['username'] = $_POST['username'];
		
		$name = $_SESSION['username'];
		
		if(!isset($_SESSION['count'])
		{
			$_SESSION['count'] = 0;
		}
		else
		{
			$_SESSION['count']++;
		}

		echo 'Hello '. $name . ' you have visited this page '  $_SESSION['count'] ' times before.';
		echo 'Click <a href="content2.php">here</a> to visit yet another exciting page';
		echo 'Click <a href="temp.php">here</a> to log out.';
			
	}
	else
	{
		echo 'A user name must be entered. Click <a href="login.php">here</a> to return to the login screen.';
	}
	

	
}




?>