<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from tblproduct2 where id='$id'");
if($query1)
{
header('location:listsatuproduct.php');
}
}
?>
</body>
</html>