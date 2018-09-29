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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stores<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="allmobilehome.php">All Mobile</a></li>
		    <li><a href="satugadgethome.php">Satu Gadgets</a></li>                
                </ul>
	    </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Profile<b class="caret"></b></a>
                <ul class="dropdown-menu">
                   <li><a href="userinfo.php">User Info</a></li>
                   <li><a href="changepass.php">Change Password</a></li>                  
                </ul>
	    </li>
		<li><a href="cart.php">Cart</a></li>
		<li><a href="labout.php">About</a></li>
		<li><a href="lcontact.php">Contact Us</a></li>
		<li><a href="logout.php">Logout</a></li>
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
</nav>

  </div>
  
  <div class="panel">
        <h3><?php
                echo  "You Are Login As  " .$_SESSION['Username']."";
                ?></h3>
  </div>

<a href="#x" class="overlay" id="login_form"></a>
<div class="popup">
     <h2>Welcome Guest!</h2>
     <p>Please enter your login and password here</p>
   <div>
   <form method="POST" action="connectivity.php">
 User <br><input type="text" name="user" size="40"><br>
 Password <br><input type="password" name="pass" size="40"><br>
 <input id="button" type="submit" name="submit" value="Log-In">
 
   <a class="close" href="#close"></a>
   </form>
</div>
<p>&nbsp;</p>
</div>
<p>Please Select Your's Favorite Store : </p>

<center><img src="images/homepage.gif" border="5" alt="HTML5 Icon" style="width:75%;height:50%;border:5px solid black"  ></center>
<br/><br/><br/>
<center><a href="allmobilehome.php"><img name="allmobile" src="images/logo_131567_fmw.jpg" width="303" height="176" alt=""></a>						
<a href="satugadgethome.php"><img name="satugadget" src="images/s.jpg" width="303" height="176" alt=""></center></a>

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
