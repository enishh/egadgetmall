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

<p> <h3>If You(gadget store) interest in join us please contact us :</h3></p>
<br/>

<table width="100%">
    <tbody>
    <tr>
    <td width="23%"><span style="font-size: 12pt;"><strong>Office No.</strong></span></td>
    <td width="2%"><span style="font-size: 12pt;">:</span></td>
    <td width="60%"><span style="font-size: 12pt;">07 -  2553997
    <span style="font-size: 12pt;"> - 
   <img src="images/SYmbol.png" alt="" width="20px"> Call Us
   </span></span></td>
    </tr>
    <tr>
    <td><span style="font-size: 12pt;"><strong>Call/SMS/Whatsapp</strong></span></td>
    <td><span style="font-size: 12pt;">:</span></td>
    <td><span style="font-size: 12pt;">017 - 7049039 - 
   <img src="images/SYmbol.png" alt="" width="20px"> Call Us<br></span></td>
    </tr>
    </tbody>
    </table>
    
   <p><span style="font-size: 12pt;"><strong>or E-Mail us</strong></span></p>
    <hr>
   <ul>
   <li><span style="font-size: 12pt;">Sales Team: <a href="mailto:sales@EGM.com.my">sales@EGM.com.my</a></span></li>
   <li><span style="font-size: 12pt;">Support Team: <a href="mailto:support@EGM.com.my">support@EGM.com.my</a></span></li>
   </ul> 

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