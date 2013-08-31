<!DOCTYPE html>
<html lang="en">
<head>
    <title>order</title>
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
                            <li><a class="active" href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Online Food  <span>Ordering</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper">
            	<article class="col-1">
                	
                    	<h3 class="p1">My Cart</h3>
                        
                     <?php  
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

		session_start();
		
		if(empty($_SESSION['name']))
		{
			echo "Login to order";
		}
		else
		{
		$hnm=$_SESSION['name'];	
mysql_select_db("restraunt", $con);

  $r=mysql_query("select *from restraunt.order where uname='". $hnm . "'",$con);
  if((mysql_num_rows($r))==0){
	  echo "no item";
	  }
  else
  {
	  $result=mysql_query("select *from restraunt.order where uname='". $hnm . "'",$con);?>
	  <table width="280" style="background:#CCC">
<tr>
<td width="109">&nbsp;&nbsp;<strong>Item</strong></td><td width="50"><strong>Price</strong></td><td width="29"><strong>Qty</strong></td>
<td width="72">&nbsp;&nbsp;<strong>Sub Total</strong></td>
</tr>
 <?php
 $total=0;
  while($row=mysql_fetch_array($result))
{
	$it=$row['item'];
	$pr=$row['price'];
	$q=$row['quantity'];?>
<tr><td width="109">&nbsp;<?php echo $it;?></td><td width="50">&nbsp;<?php echo $pr;?></td><td width="29">&nbsp;<?php echo $q;?></td><td width="72">&nbsp;&nbsp;&nbsp;<?php
 echo $pr*$q;?></td></tr>	
<?php $total=$total+$pr*$q;}?>
<tr><td style="background:#333""><strong>TOTAL</strong></td><td style="background:#333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td style="background:#333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td style="background:#333">&nbsp;&nbsp;&nbsp;<?php  echo $total;?> </td></tr><?php }
?>
       </table> 
                    <input type="button" class="button" value="Check Out" onClick="location.href='order_sucess.php'"></article><?php }?>          
                </article>
                <article class="col-2">
                <?php 
				$rd=$_GET['id'];
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);



$sql="select *from restraunt where r_id='".$rd."'";
$sql1="select *from hotel_menu where r_id='".$rd."'";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$result=mysql_query($sql,$con);

while($row = mysql_fetch_array($result))
{
	$rname=$row['r_name'];
}
$result1=mysql_query($sql1,$con);
while($row1 = mysql_fetch_array($result1))
{
	$it=$row1['item_name'];
	$cat=$row1['category'];
	$pr=$row1['price'];
?>
 
                	<h3 class="p1"><?php echo $rname; ?></h3>
                   	<h4 class="p1">Menu</h4>
                    <table width="611" border="1">
                    <form action="process.php?id=<?php echo $rd; ?>" method="post" name="order" >
                    <tr><td width="147"><input type="text" name="nm"  value="<?php echo $it; ?>" readonly></td><td width="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td width="183">Rs.<input type="text" name="pri" value="<?php echo $pr; ?>" readonly></td><td width="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    
                    <td width="79">Quantity <input type="text" style="width:20px" name="qn"> </td><td width="6">&nbsp;&nbsp;&nbsp;&nbsp;</td><td width="89"><input type="submit" value="Add To Cart"></td>
                    </tr></form>
                    
                    
                    </table>
					<?php } ?>
                    
                </article>
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
</body></html>

