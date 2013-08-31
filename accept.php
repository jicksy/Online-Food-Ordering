<?php
$id=$_GET['order'];
echo $id;
$con = mysql_connect("localhost","jjm","123");
mysql_select_db("restraunt", $con);
$sql="DELETE from restraunt.order WHERE id  = $id";
mysql_query($sql,$con);
header("Location: view_orders.php");
?>
