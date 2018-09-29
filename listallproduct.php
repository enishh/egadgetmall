<?php
// Start the session
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="footercss/footer-basic-centered.css">
<link rel="stylesheet" href="footercss/demo.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<title>E-Gadget Mall Home</title>
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
            <li class="active"><a href="adminallmobilehome.php">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="addallproduct.php">Add Product</a></li>
		    <li><a href="listallproduct.php">View Product</a></li>               
                </ul>
	    </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="addallcus.php">Add Customer</a></li>
		    <li><a href="listallcus.php">View Customer</a></li>                 
                </ul>
	    </li>
		<li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="col-sm-3 col-md-3 pull-right">
            <form class="navbar-form" role="search" method="post" action=""  id="searchform">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="name">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
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
$query1=mysqli_query($query,"select id,name,code,image,price from tblproduct");
echo "<table border=1><tr><td>ItemName</td><td>ItemCode</td><td>Image</td><td>ItemPrice</td><td></td><td></td><br/>
";

while($query2=mysqli_fetch_array($query1))
{

echo "<tr><td>".$query2['name']."</td>";
echo "<td>".$query2['code']."</td>";
echo "<td>".$query2['image']."</td>";
echo "<td>".$query2['price']."</td>";
echo "<td><a href='editallproduct.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td><a href='deleteallproduct.php?id=".$query2['id']."'>x</a></td><tr>";
}
?>
</ol>
</table>
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
