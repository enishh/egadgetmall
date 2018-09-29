

<?php
// Start the session
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<link href="style2.css" type="text/css" rel="stylesheet" />
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
<?php 

require_once("dbcontroller.php");
$db_handle = new DBController();
	  if(isset($_POST['submit'])){
	  if(!empty($_POST['name']))
	  {
	  $name=$_POST['name']; 
	  //connect  to the database 
	  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error()); 
	  //-select  the database to use 
	  $mydb=mysql_select_db("mall"); 
	  //-query  the database table 
	  $sql="SELECT name FROM tblproduct WHERE name LIKE '%" . $name .  "%' "; 
	  $sql2="SELECT name FROM tblproduct2 WHERE name LIKE '%" . $name .  "%' ";
	  //-run  the query against the mysql query function 
	  $result=@mysql_query($sql);
	  $result2=@mysql_query($sql2); 
	  //-create  while loop and loop through result set 
	  
	  
	  while($row=mysql_fetch_array($result) ){ 
	          
		$names=$row['name'];		
				
	           ?>
		   
		   <?php
		   		   	$product_array = @mysql_query("SELECT * FROM tblproduct WHERE name ='$names'   ");
		   		   	if ($product_array) { 
		   		   		while($rows = mysql_fetch_array($product_array,MYSQL_ASSOC)){
		   		   	?>
		   
		   <div class="product-item">
		   			<form method="post" action="allsmartphone.php?action=add&code=<?php echo $rows['code']; ?>">
		   			<div class="product-image"><img src="<?php echo $rows['image']; ?>" width="130" height="100"></div>
		   			<div><strong><?php echo $rows['name']; ?></strong></div>
		   			<div class="product-price"><?php echo "$".$rows['price']; ?></div>
		   			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
		   			</form>
		   		</div>
				   
				   <?php
				   			}
				   	}
				   	?>
					   
	   
	<?php
	  //-display the result of the array 
	  echo "<ul>\n"; 
 	 
	  echo "</ul>"; 
	  }
	  
	  
	  while($row2=mysql_fetch_array($result2) ){ 
	          
		$names2=$row2['name'];		
		
	           ?>
		   
		   <?php
		   		   	$product_array = @mysql_query("SELECT * FROM tblproduct2 WHERE name ='$names2'   ");
		   		   	if ($product_array) { 
		   		   		while($rows = mysql_fetch_array($product_array,MYSQL_ASSOC)){
		   		   	?>
		   
		   <div class="product-item">
		   			<form method="post" action="satusmartphone.php?action=add&code=<?php echo $rows['code']; ?>">
		   			<div class="product-image"><img src="<?php echo $rows['image']; ?>" width="130" height="100"></div>
		   			<div><strong><?php echo $rows['name']; ?></strong></div>
		   			<div class="product-price"><?php echo "$".$rows['price']; ?></div>
		   			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
		   			</form>
		   		</div>
				   
				   <?php
				   			}
				   	}
				   	?>
					   
	   
	<?php
	  //-display the result of the array 
	  echo "<ul>\n"; 
 	 
	  echo "</ul>"; 
	  }
	  
	   
	  }
	  else
	  {
	  echo '<center><img src="images/errorsearch.jpg" ></center>';
	  }
	  }	   
	  else{ 
	  echo  '<center><img src="images/errorsearch.jpg" ></center>'; 
	  } 
	?> 	 
</div>
<div class="container">	
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