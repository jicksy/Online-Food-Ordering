<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
					
$con = mysql_connect("localhost","jjm","123");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);
$c=$_POST['cnam'];
$m=$_POST['mail'];
$p=$_POST['pass'];
$h=$_POST['house_no'];
$s=$_POST['st'];
$a=$_POST['area'];
$d=$_POST['uname'];
 session_start();

		$d=$_SESSION['name'];
$sql="update customer set cname='$_POST[cnam]',email='',house_no='".$h."',street='".$s."',area='".$a."' where uname='".$d."'";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
else
{?>	<script> alert("Saved");</script>
	<?php header("Location:user.php");
}?>
</body>
</html>