<html>
<body>
<?php
include('config.php');
if(isset($_GET['CustomerID']))
{
$id=$_GET['CustomerID'];
$query1=mysql_query("delete from customer where CustomerID='$id'");
if($query1)
{
header('location:listallcus.php');
}
}
?>
</body>
</html>