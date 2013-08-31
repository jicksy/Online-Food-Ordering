<!DOCTYPE html>
<html lang="en">
<head>
    <title>Locations</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>    
    <script src="js/jquery.bxSlider.js" type="text/javascript"></script> 
    <script type="text/javascript">
		$(document).ready(function() {
			$('#slider').bxSlider({
				pager: true,
				controls: false,
				moveSlideQty: 1,
				displaySlideQty: 3
			});
		}); 
	</script>
	
</head>
<body id="page2">
	<!--==============================header=================================-->
    
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.html">Fudla</a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a class="active" href="menu.php">Menu</a></li>
                            
                            <li><a href="comp.php">Reviews</a></li>
                         
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Online Food  <span>Delivery</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper">
            <form action="menu.php">
Filter By<select name='myfield' onchange='this.form.submit()'>
  <option >Cuisine</option>
  <option selected>Location</option>
  
</select>
<noscript><input type="submit" value="Submit"></noscript>
</form>
            <table>
         <?php 
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);



$sql="select *from restraunt where status=0";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$result=mysql_query($sql,$con);
?>
 
       <tr>
                <td>
            	<article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Bangalore</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/images (5).jpg" alt=""></figure>
                                <div class="extra-wrap">
                                   
                                    <ul class="price-list p2">
                                   <?php
								   
								   while($row = mysql_fetch_array($result))
  {
  $rid=$row['r_id'];
  $loc=$row['r_area'];
  $street=$row['r_street'];
  $rnam=$row['r_name'];
  $s="bangalore";
  $s1="chennai";
  								if(strcmp($loc,$s)==0)
                                    {?>
                                    
                     <li><span><?php echo $street?></span><a href="order.php?id=<?php echo $rid;?>"><?php echo $rnam ?></a></li>
									<?php }} ?>
                 </ul>
                              </div>
                            </div>
                           
                        </div>
                        
                </article></td><td>
                <article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Chennai</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/img (1).jpg" alt=""></figure>
                                <div class="extra-wrap">
                                   
                                    <ul class="price-list p2">
                                     <?php
									 $result=mysql_query($sql,$con);
								   while($row = mysql_fetch_array($result))
  {
  $rid=$row['r_id'];
  $loc=$row['r_area'];
  $rnam=$row['r_name'];
  $street=$row['r_street'];
  
                                    if(strcmp($loc,$s1)==0)
                                    {?>
                      <li><span><?php echo $street?></span><a href="order.php?id=<?php echo $rid; ?>"><?php echo $rnam?></a></li>
                      <?php }} ?>
                    </ul>
                              </div>
                            </div>
                           
                        </div>
                        
                </article>
                </td></tr>
                <tr>
            
                <td>
            	<article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Mumbai</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/img (4).jpg" alt=""></figure>
                                <div class="extra-wrap">
                                    
                                    <ul class="price-list p2">
                                     <?php
									 $result=mysql_query($sql,$con);
								   while($row = mysql_fetch_array($result))
  {
  $rid=$row['r_id'];
  $loc=$row['r_area'];
  $rnam=$row['r_name'];
   $street=$row['r_street'];
                                     if(strcmp($loc,"mumbai")==0)
                                    {?>
                      <li><span><?php echo $street?></span><a href="order.php?id=<?php echo $rid; ?>"><?php echo $rnam?></a></li>
                      <?php }}?>
                    </ul>
                              </div>
                            </div>
                           
                        </div>
                        
                </article></td><td>
                <article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">kolkata</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/img (2).jpg" alt=""></figure>
                                <div class="extra-wrap">
                                    
                                    <ul class="price-list p2">
                                     <?php
									 $result=mysql_query($sql,$con);
								   while($row = mysql_fetch_array($result))
  {
 $rid=$row['r_id'];
  $loc=$row['r_area'];
  $rnam=$row['r_name'];
   $street=$row['r_street'];
                                    if(strcmp($loc,"kolkata")==0)
                                    {?>
                      <li><span><?php echo $street?></span><a href="order.php?id=<?php echo $rid;?>"><?php echo $rnam?></a></li>
                      <?php }} ?>
                    </ul>
                              </div>
                            </div>
                           
                        </div>
                        
                </article>
                </td></tr>
  
									<?php mysql_close($con);
									 ?></table>
          </div></div>
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
