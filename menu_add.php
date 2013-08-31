<?php
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);
session_start();
echo $_SESSION['name'];
$sql1="select r_id from restraunt where uname='". $_SESSION['name']."'";
$rs=mysql_query($sql1,$con);
while($row=mysql_fetch_array($rs))
{
$id=$row['r_id'];
$sql="INSERT INTO hotel_menu
VALUES
('$id','$_POST[item_name]','$_POST[sel]','$_POST[price]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  header("Location:hotel_user.php");
  }
}


mysql_close($con);
?>