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
<?php
include('config.php');
if(isset($_POST['submit']))
{
$name=mysqli_real_escape_string($query,$_POST['name']);
$code=mysqli_real_escape_string($query,$_POST['code']);
$image=mysqli_real_escape_string($query,$_POST['image']);
$price=mysqli_real_escape_string($query,$_POST['price']);
$query1=mysqli_query($query,"insert into tblproduct(id,name,code,image,price) values('','$name','$code','$image','$price')");
echo "insert into tblproduct(id,name,code,image,price) values('','$name','$code','$image','$price')";
if($query1)
{
header("location:listallproduct.php");
}
}
?>
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
                </li>
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


<fieldset style="width:300px;">
<form method="post" action="">
Name : <input type="text" name="name"/><br/>
Code : <input type="text" name="code"/><br/>
Image: <input type="text" name="image"/><br/>
price: <input type="text" name="price"/><br/>
<br/>
<input type="submit" name="submit"/>
</form>
</fieldset>

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
