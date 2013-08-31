<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
 
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
    <?php 
session_start();
if(empty($_SESSION['name']))
{
header("Location:login.html");
}
else
{
?>
</head>
<body id="page6">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        &nbsp;&nbsp;<a href="logout.php"><strong>Logout</strong></a>
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
            	<article class="col-1">
                	<div class="indent-left">
                    	
                       
                        <dl>
                           <input type="button" class="button-2" onClick="location.href='menu.php'" value="Menu">
                           <input type="button" class="button-2" onClick="location.href='complaint.php'" value="Post Complaints/Reviews">
                        </dl>
                    </div>
                </article>
                <article class="col-2">
                	<h3 class="p1">User Profile</h3>
                    <?php
					
$con = mysql_connect("localhost","jjm","123");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);

$nm=$_SESSION['name'];


$sql="select *from restraunt.customer where uname='".$nm."'";
$sql1="select password from user where username='".$nm."'";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$result=mysql_query($sql,$con);
$result1=mysql_query($sql1,$con);

while($row = mysql_fetch_array($result))
  {
$cname=$row['cname'];
$uname=$row['uname'];
$mail=$row['email'];
$hn=$row['house_no']; 
$st=$row['street'];
$ar=$row['area'];
//$pass=$row['password'];
  
?>
                    <form id="contact-form" name="reg" method="post"  action="update.php">                    
                        
			<table border="0">
			  	<tr>
				
                    <td>Name</td><td><input  id="appnam" name="cnam" type="text" class="input" readonly value="
					<?php echo $cname; ?>
                    "></td>
		    <td><div id="appnam1"><br/></div><br/><br/></td>
                 
</tr>
 
				<tr>
				
                    <td>Username</td><td><input id="uname" name="uname" type="text" class="input" readonly value="
					<?php echo $uname; ?>
                    "></td>
		            <td><div id="village1"><br/></div><br/><br/></td>
                  
				</tr>
	 
				 <tr>
                 
                    <td>Email-id</td>
                    <td><input id="mail2" name="mail" type="text" class="input"readonly="true" value="
					<?php echo $mail; ?>
                    " ></td>
					<td><div id="mail1"><br/></div></br></br></td>
                  
				</tr>
                
 
               
			 
                <tr>
                 
                    <td>House Number</td>
					<td><input id="h_no" name="house_no" type="text" class="input" readonly value="
					<?php echo $hn; ?>
                    "></td>
					<td><div id="hno1"><br/></div><br/><br/></td>
                  
				</tr>

 <tr>
                 
                    <td>Street</td>
                    <td><input id="st" name="street" type="text" class="input"readonly="true" value="
					<?php echo $st; ?>
                    "></td>
					<td><div id="street1"><br/></div><br/><br/></td>
                  
</tr>
                 <tr>
                 
                    <td>Area</td>
                    <td><input id="area2" name="area" type="text" class="input"readonly="true" value="
					<?php echo $ar; }?>
                    "></td>
					<td><div id="area1"><br/></div><br/><br/></td>
                  
				</tr>

				
                </table>
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
</body><?php }?>
</html>
