<?php
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$it=$_GET['id'];
mysql_select_db("restraunt", $con);
$sql="update restraunt set status=0 where r_id='".$it."'";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  header("Location:review.php");
  }
?>
