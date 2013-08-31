<?php
$con = mysql_connect("localhost","jjm","123");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);


$sql="insert into complaint values('$_POST[name]','$_POST[com]')";
if(!mysql_query($sql,$con))
{
}
else
{?><script>
	var c=confirm("Complaint/Review sucessfully registered");
	if(c==true)
	{
	self.location="user.php";}
	</script><?php
}
?>