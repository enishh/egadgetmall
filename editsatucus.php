
<?php
// Start the session
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Generator" content="Dev-PHP 2.6.1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="footercss/footer-basic-centered.css">
<link rel="stylesheet" href="footercss/demo.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="content">
    <center><img src="images/logo.JPG"></center>
    
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">E-Gadget Mall</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="adminsatumobilehome.php">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="addsatuproduct.php">Add Product</a></li>
		    <li><a href="listsatuproduct.php">View Product</a></li>                
                </ul>
	    </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="addsatucus.php">Add Customer</a></li>
		    <li><a href="listsatucus.php">View Customer</a></li>                 
                </ul>
	    </li>
		<li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="col-sm-3 col-md-3 pull-right">
            <form class="navbar-form" role="search" method="post" action=""  id="searchform">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="name">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" name=""><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>        
    </div>
</nav>

  </div>
  
  <div class="panel">
        <h3><?php
                echo  "You Are Login As  " .$_SESSION['StoreUsername']."";
                ?></h3>
  </div>

<p>Please Select Your's Favorite Store : </p>
<?php
include('config.php');
if(isset($_GET['CustomerID']))
{
$id=$_GET['CustomerID'];
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$query3=mysql_query("update customer set Username='$username',Password='$password',Name='$name',Address='$address', Phone_no='$phone' where CustomerID='$id'");
if($query3)
{
header('location:listsatucus.php');
}
}
$query1=mysql_query("select * from customer where CustomerID='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
Username :<input type="text" name="username" value="<?php echo $query2['Username']; ?>" /><br />
Password:<input type="text" name="password" value="<?php echo $query2['Password']; ?>" /><br /><br />
Name:<input type="text" name="name" value="<?php echo $query2['Name']; ?>" /><br />
Address:<input type="text" name="address" value="<?php echo $query2['Address']; ?>" /><br />
Phone No:<input type="text" name="phone" value="<?php echo $query2['Phone_no']; ?>" /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>

<div class="footer-basic-centered">

			<p class="footer-company-motto">All About Technology.</p>

			<p class="footer-links">
				<a href="index2.php">Home</a>
				·
				<a href="register.php">Register</a>
				·
				<a href="labout.php">About</a>
				·
				<a href="lcontact.php">Contact Us</a>
			</p>

			<p class="footer-company-name">E-Gadget Mall &copy; 2015 FYP</p>



</div>
</div>

</body>
</html>