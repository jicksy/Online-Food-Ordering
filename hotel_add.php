<?php
$con = mysql_connect("localhost","jjm","123");
$con1 = mysql_connect("localhost","jjm","123");
if (!$con||!$con1)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);
mysql_select_db("user",$con1);

function rand_string( $length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}
$id=rand_string( 5 );
$sql="INSERT INTO restraunt
VALUES
('$id','$_POST[hnam]','$_POST[uname]','$_POST[mail]','$_POST[street]','$_POST[area]',1)";
$sql1="INSERT INTO user VALUES(1,'$_POST[uname]','$_POST[pass]')";
if (!mysql_query($sql,$con)||!mysql_query($sql1,$con1))
  {	
  die('Error: ' . mysql_error());
  }
else
{	session_start();
		$_SESSION['name']='$_POST[uname]';
		$_SESSION['type']=1;
	header("Location:reg_success.html");

}
mysql_close($con);
mysql_close($con1);
?>