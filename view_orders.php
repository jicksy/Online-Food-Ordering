<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
	
</head>
<body id="page6">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.html">Fudla</a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            
                            <li><a href="comp.php">Reviews</a></li>
                            
                            <li><a class="active" href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Online Food<span>Ordering</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper">
            	
                
           	  <h3 class="p1">Orders</h3>
              <table width="1080" border="10" style="cellpading:20px">
<tr><td width="115"><strong>Item Name</strong></td><td width="115"><strong>Quantity</strong></td><td width="124"><strong>
Customer Name</strong></td><td width="139"><strong>Mobile Number</strong></td><td width="132"><strong>House number</strong></td><td width="132"><strong>Street</strong></td><td width="138"><strong>Area</strong></td></tr>
                   
                   <?php
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
session_start();
mysql_select_db("restraunt", $con);
$sql1="select r_id from restraunt where uname='". $_SESSION['name']."'";
$rs=mysql_query($sql1,$con);
while($row=mysql_fetch_array($rs))
{
$id=$row['r_id'];}
$r=mysql_query("select *from restraunt.order where r_id='".$id."'",$con);

if((mysql_num_rows($r))==0)
{

	?>
    <script>
	var c=confirm("No orders");
	if(c==true)
	{	self.location="hotel_user.php";
	}</script>
    
	<?php }
else
{
	$rs1=mysql_query("select *from restraunt.order where r_id='".$id."' and status=1",$con);
while($row1=mysql_fetch_array($rs1))



{
    $order=$row1['id'];
	$it=$row1['item'];
	$u=$row1['uname'];
	$qu=$row1['quantity'];
	$rs2=mysql_query("select *from restraunt.customer where uname='".$u."'");
    $row2=mysql_fetch_array($rs2);
	$n=$row2['cname'];
	$hn=$row2['house_no'];
	$st=$row2['street'];
	$a=$row2['area'];
	$m=$row2['mobile'];
?>
<tr>
    <td width="115"><?php echo $it; ?></td>
    <td width="115"><?php echo $qu;?></td>
    <td width="115"><?php echo $n;?></td>
<td width="124"><?php echo $m;?></td>
<td width="139"><?php echo $hn;?>
</td><td width="132"><?php echo $st; ?></td><td width="132">

<?php echo $a; ?></td><td width="200"><input type="button" class="button" onClick="location.href='accept.php?order=<?php echo $order;?>'" value="Approve"></td></tr>
<?php }} ?>


  </table>      
</div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
