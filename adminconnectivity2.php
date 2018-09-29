<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'mall');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db('mall') or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM store where StoreUsername = '$_POST[user]' AND StorePassword = '$_POST[pass]'") or die(mysql_error());
	$row = mysql_fetch_array($query);
	if(!empty($row['StoreUsername']) AND !empty($row['StorePassword']))
	{
	
		$_SESSION['StoreUsername'] = $_POST[user];
				header('Location:adminsatugadgethome.php');

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