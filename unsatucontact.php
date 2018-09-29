
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
            <li class="active"><a href="unsatugadgethome.php">Home</a></li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="unsatusmartphone.php">Smartphone</a></li>
		    <li><a href="unsatutablet.php">Tablet</a></li>
		    <li><a href="unsatusmartwatch.php">Smartwatch</a></li>
		    <li><a href="unsatuaccessories.php">Accessories</a></li>                 
                </ul>
	    </li>
            <li><a href="unsaturegister.php">Register</a></li>
	    <li><a href="unsatuabout.php">About</a></li>
	    <li><a href="unsatucontact.php">Contact Us</a></li>
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
  


<h1>CONTACT US</h1>

 <table width="100%">
    <tbody>
    <tr>
    <td width="23%"><span style="font-size: 12pt;"><strong>Office No.</strong></span></td>
    <td width="2%"><span style="font-size: 12pt;">:</span></td>
    <td width="60%"><span style="font-size: 12pt;">03 - 9282 3811
    <span style="font-size: 12pt;"> - 
   <img src="images/SYmbol.png" alt="" width="20px"> Call Us
   </span></span></td>
    </tr>
    <tr>
    <td><span style="font-size: 12pt;"><strong>Call/SMS/Whatsapp</strong></span></td>
    <td><span style="font-size: 12pt;">:</span></td>
    <td><span style="font-size: 12pt;">017 - 388 8388 - 
   <img src="images/SYmbol.png" alt="" width="20px"> Call Us<br></span></td>
    </tr>
    </tbody>
    </table>
    
   <p><span style="font-size: 12pt;"><strong>or E-Mail us</strong></span></p>
    <hr>
   <ul>
   <li><span style="font-size: 12pt;">Sales Team: <a href="mailto:sales@satugadget.com.my">sales@satugadget.com.my</a></span></li>
   <li><span style="font-size: 12pt;">Support Team: <a href="mailto:support@satugadget.com.my">support@satugadget.com.my</a></span></li>
   </ul> 
 
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(3.1221109,101.7291885),
    zoom:20,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="googleMap" style="width:500px;height:380px;"></div>


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
