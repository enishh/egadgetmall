<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" href="footercss/footer-basic-centered.css">
<link rel="stylesheet" href="footercss/demo.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<title>E-Gadget Mall About Us</title>  
</head>
<link href="./css/style.css" rel="stylesheet">
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

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
 

<?php include("connect.php"); 
  session_start();
 if(isset($_POST['register']))
       {
    	$user=$_POST['username'];
    	$name=$_POST['name'];
    	$address=$_POST['address'];
     	$pass=$_POST['password'];
    	$confirmpass = $_POST['confirmpass'];	
     	$phoneno=$_POST['phoneno'];
    	$select=mysql_query("select * from customer");
    	$fetch=mysql_fetch_array($select);
	$data_user=$fetch['Username'];

$C_Username=$fetch['Username'];

 
		 	 	
	$dbuser = mysql_query("SELECT * FROM customer WHERE Username='$user'");
		 if(mysql_num_rows($dbuser) > 0 ) {
	 echo "<center><font size=15>Name already exists ! ! !</font></center>";
	 	      	       }
	        else
		{
		if($pass!=$confirmpass){
	  			  		echo "You must need to inserted correct information";
						    	
	  			  		}
						    
	  		else{
			  if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
			  	$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect
				  }
				  else{// Captcha verification is Correct. Final Code Execute here!		
				  		$msg="<span style='color:green'>The Validation code has been matched.</span>";
			  $ins=mysql_query("insert into customer(Username,Name,Address,Password,Phone_no)
			  				  		values('$user','$name','$address','$pass','$phoneno')");
	  		echo "Your data inserted";
	  				  						 	            
	  				
	  		}
					
			  	}		
			  	}  
			 
	  		}
	 	 
		 
		  

 ?>	
<form action ="" method="POST" id="signup" >
  <h1>Registration Form</h1>
   <?php $a=1;?>
   Username : <br><input type="text" name="username" size="40" id="username" required value="<?php if(isset($_POST['username'])) echo $_POST['username'];?> " autofocus /><br/>
   Name : <br><input type="text" name="name" size="40" id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>"/><br/>
   Address : <br><input type="text" name="address" size="40" id="address" value="<?php if(isset($_POST['address'])) echo $_POST['address'];?>"/><br/>
   Password : <br><input type="password" name="password" id="password" size="40" placeholder="****" value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>"/><br/>
   Confirm Password : <br><input type="password" name="confirmpass" id="confirmpass" size="40" value="<?php if(isset($_POST['confirmpass'])) echo $_POST['confirmpass'];?>"/><br/>
   Phone No : <br><input type="text" name="phoneno" size="40" value="<?php if(isset($_POST['phoneno'])) echo $_POST['phoneno'];?>"/><br/> 
  
  
  
<table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="right" valign="top"> Validation code:</td>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="captcha_code" name="captcha_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <!-- <td><input name="Submit" type="submit" onclick="return validate();" value="Submit" class="button1"></td> -->
    </tr>
  </table>
  
  					
<button type="submit" name="register" value="register">Submit</button>	
<br/>
<br/>
<br/>
<br/>


 	</form>

<div class="footer-basic-centered">

			<p class="footer-company-motto">All About Technology.</p>

			<p class="footer-links">
				<a href="index.php">Home</a>
				�
				<a href="register.php">Register</a>
				�
				<a href="about.php">About</a>
				�
				<a href="contact.php">Contact Us</a>			</p>

			<p class="footer-company-name">E-Gadget Mall &copy; 2015 FYP</p>



</div>
  </div>

</body>
</html>
