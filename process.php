<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
session_start();
if($_SESSION['name']=="")
{
?>
<script>
var c=confirm("login to order");
if(c==true)
{
<?php header("Location:login.html"); ?>
}
</script>
<?php
}
else
{
?>
<body>
<?php 
session_start();
$un=$_SESSION['name'];
$rd=$_GET['id'];
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);


$sql="INSERT INTO restraunt.order VALUES('".$un."','$_POST[nm]','".$rd."','$_POST[pri]','$_POST[qn]',0)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  header("Location:order.php?id=$rd");
  }
?>

</body><?php }?>
</html>