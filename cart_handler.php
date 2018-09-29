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
            <li class="active"><a href="index2.php">Home</a></li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="allsmartphone.php">Smartphone</a></li>               
                </ul>
	    </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Profile<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">User Info</a></li>
		    <li><a href="userinfo.php">User Info</a></li>
		    <li><a href="changepass.php">Change Password</a></li>                
                </ul>
	    </li>
 		<li><a href="cart.php">Cart</a></li>
 		<li><a href="labout.php">About</a></li>
 		<li><a href="lcontact.php">Contact Us</a></li>
        </ul>
        <div class="col-sm-3 col-md-3 pull-right">
            <form class="navbar-form" role="search" method="post" action="search_go.php"  id="searchform">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="name">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>        
    </div>

  </div>
  
  <div class="panel">
        <h3><?php
                echo  "You Are Login As  " .$_SESSION['Username']."";
                ?></h3>
  </div>




<?php  


require_once("dbcontroller.php");
?>




<?php	

   echo" Successfully paid ! Item Will be Delivered , we will contact you . "
   
   
   
?>   
<br/>
<a href="allsmartphone.php?action=empty">Continue Buying 	<br/>
<a href="allsmartphone.php?action=empty">Logout

<div class="footer-basic-centered">

			<p class="footer-company-motto">All About Technology.</p>

			<p class="footer-links">
				<a href="index2.php">Home</a>
				�
				<a href="register.php">Register</a>
				�
				<a href="labout.php">About</a>
				�
				<a href="lcontact.php">Contact Us</a>
			</p>

			<p class="footer-company-name">E-Gadget Mall &copy; 2015 FYP</p>



</div>
</div>

</body>	
</html>		