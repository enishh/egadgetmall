
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
            <li class="active"><a href="index.htm">Home</a></li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="unallsmartphone.php">Smartphone</a></li>                 
                </ul>
	    </li>
            <li><a href="unallregister.php">Register</a></li>
	    <li><a href="unallabout.php">About</a></li>
	    <li><a href="unallcontact.php">Contact Us</a></li>
        </ul>
        <div class="col-sm-3 col-md-3 pull-right">
            <form class="navbar-form" role="search" method="post" action="unsearch_go.php"  id="searchform">
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
           <a href="#login_form" id="login_pop">Log In</a>
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
 </div>
<p>Please Select Your's Favorite Store : </p>


   <a href="adminalllogin.php">.</a>

  <center><img src="images/logo_131567_fmw.jpg" border="5" alt="HTML5 Icon" style="width:75%;height:50%;border:5px solid black" ></center>
   <br/><br/><br/> 
  <center>
   <div class="item-grid">
                   <!--<div class="item-box">
                       <div class="category-item">
                           <div class="picture">
                               <a href="/smartphone" title="Show products in category SmartPhone">
                                   <img alt="Picture for category SmartPhone" src="http://www.satugadget.com.my/content/images/thumbs/0002732_smartphone_333.jpeg" title="Show products in category SmartPhone" />
                               </a>
                           </div>
                           <h2 class="title">
                               <a href="/smartphone" title="Show products in category SmartPhone">
                                   SmartPhone
                               </a>
                           </h2>
                       </div>
                   </div>-->
                   <a href="unallsmartphone.php" title="Show products in category SmartPhone">
                                   <img alt="Picture for category SmartPhone" src="img/all6.jpg" title="Show products in category SmartPhone" width="333" height="332">
                               </a>
                   <!--<div class="item-box">
                       <div class="category-item">
                           <div class="picture">
                               <a href="/tablet" title="Show products in category Tablet">
                                   <img alt="Picture for category Tablet" src="http://www.satugadget.com.my/content/images/thumbs/0002733_tablet_333.jpeg" title="Show products in category Tablet" />
                               </a>
                           </div>
                           <h2 class="title">
                               <a href="/tablet" title="Show products in category Tablet">
                                   Tablet
                               </a>
                           </h2>
                       </div>
                   </div>-->
                   <a href="/tablet" title="Show products in category Tablet">
                                   <img alt="Picture for category Tablet" src="img/alls6.png" title="Show products in category Tablet" width="333" height="332">
                               </a>
                   <!--<div class="item-box">
                       <div class="category-item">
                           <div class="picture">
                               <a href="/smartwatch" title="Show products in category Smartwatch">
                                   <img alt="Picture for category Smartwatch" src="http://www.satugadget.com.my/content/images/thumbs/0002734_smartwatch_333.jpeg" title="Show products in category Smartwatch" />
                               </a>
                           </div>
                           <h2 class="title">
                               <a href="/smartwatch" title="Show products in category Smartwatch">
                                   Smartwatch
                               </a>
                           </h2>
                       </div>
                   </div>-->
   		<br/>
                   <a href="/smartwatch" title="Show products in category Smartwatch">
                                   <img alt="Picture for category Smartwatch" src="img/all6.jpg" title="Show products in category Smartwatch" width="333" height="332">
                               </a>
                   <!--<div class="item-box">
                       <div class="category-item">
                           <div class="picture">
                               <a href="/accessories" title="Show products in category Accessories">
                                   <img alt="Picture for category Accessories" src="http://www.satugadget.com.my/content/images/thumbs/0002735_accessories_333.jpeg" title="Show products in category Accessories" />
                               </a>
                           </div>
                           <h2 class="title">
                               <a href="/accessories" title="Show products in category Accessories">
                                   Accessories
                               </a>
                           </h2>
                       </div>
                   </div>-->
                   <a href="/accessories" title="Show products in category Accessories">
                                   <img alt="Picture for category Accessories" src="img/allnote5.jpg" title="Show products in category Accessories" width="333" height="332">
                               </a>
           </div>
   </center> 

<div class="footer-basic-centered">

			<p class="footer-company-motto">All About Technology.</p>

			<p class="footer-links">
							<a href="index.php">Home</a>
							·
							<a href="register.php">Register</a>
							·
							<a href="about.php">About</a>
							·
							<a href="contact.php">Contact Us</a>
						</p>

			<p class="footer-company-name">E-Gadget Mall &copy; 2015 FYP</p>



</div>
</div>

  
</body>
</html>
