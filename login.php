<?php
$con = mysql_connect("localhost","jjm","123");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);
$unam=$_POST['username'];
$password=$_POST['pass'];


$sql="select *from user";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$result=mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
  {
$uname=$row['username'];
$pass=$row['password'];
$t=$row['type'];

if((strcmp($unam,$uname)==0)&&(strcmp($password,$pass)==0))
{

echo "success";
echo $t;
if($t==0)
{   session_start();

		$_SESSION['name']=$unam;
		$_SESSION['type']=0;
	header("Location: admin.php");
}
if($t==1)
{session_start();
		$_SESSION['name']=$unam;
		$_SESSION['type']=1;
	header("Location: hotel_user.php");
}

if($t==2)
{session_start();
		$_SESSION['name']=$unam;
		$_SESSION['type']=2;
	header("Location: user.php");
}
}


}
mysql_close($con);
?>