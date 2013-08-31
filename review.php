<!DOCTYPE html>
<html lang="en">
<head>
    <title>review</title>
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
                	<h1><a href="index.html">Fudla></a></h1>
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
                	<h2>Online Food<span>  Delivery</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper">
            	
                
           	  <h3 class="p1">Orders</h3>
              <table width="960" border="1" >
<tr><td width="115"><strong>Hotel ID</strong></td><td width="115"><strong>Username</strong></td><td width="115"><strong>
Hotel Name</strong></td><td width="115"><strong>Email-ID</strong></td><td width="115"><strong>Street</strong></td><td width="80"><strong>Area</strong></td></tr>
                   
                   <?php
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
session_start();
mysql_select_db("restraunt", $con);

$r=mysql_query("select *from restraunt.restraunt where status=1",$con);

if((mysql_num_rows($r))==0)
{

	?>
    <script>
	var c=confirm("No Applications");
	if(c==true)
	{	self.location="admin.php";
	}</script>
    
	<?php }
else
{
	// $rs1=mysql_query("select *from restraunt.order where r_id='".$id."' and status=1",$con);
while($row1=mysql_fetch_array($r))
{
	$it=$row1['r_id'];
	$u=$row1['r_name'];
	$qu=$row1['uname'];
	
	$n=$row1['mail'];
	
	$st=$row1['r_street'];
	$a=$row1['r_area'];
	
?>
<tr><td width="115"><?php echo $it; ?></td><td width="115"><?php echo $qu;?></td><td width="115"><?php echo $u;?></td>
<td width="115"><?php echo $n;?></td><td width="115"><?php echo $st; ?></td><td width="80">
<?php echo $a; ?></td><td width="60"><input type="button" class="button" onClick="location.href='up.php?id=<?php echo $it;?>'" value="Approve"></td></tr>
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
