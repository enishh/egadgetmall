<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'mall');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
$db=mysqli_select_db($con,'mall') or die("Failed to connect to MySQL: " . mysqli_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " .mysqli_error());
$db=mysqli_select_db($con,'mall') or die("Failed to connect to MySQL: " . mysqli_error());
	$query = mysqli_query($con,"SELECT *  FROM customer where Username = '$_POST[user]' AND Password = '$_POST[pass]'") or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	if(!empty($row['Username']) AND !empty($row['Password']))
	{
		$_SESSION['Username'] = $_POST[user];
		header('Location:index2.php');

	}
	else
	{	echo "SORRY... YOU ENTER WRONG ID AND PASSWORD... PLEASE RETRY...";
		header('Location:index.htm');
		
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}


?>