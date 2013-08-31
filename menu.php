<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
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
            

            <form action="hotels.php">
                Filter By<select name='myfield' onchange='this.form.submit()'>
                           <option selected>Cuisine</option>
                           <option>Location</option>  
                        </select>

                <noscript><input type="submit" value="Submit"></noscript>
            </form>

<table>
  <?php 
   
//mysql connection db connect
    $con = mysql_connect("localhost","jjm","123");
     if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("restraunt", $con);


//
    $sql="select distinct *from hotel_menu";
    if (mysql_query($sql,$con))
     {$result=mysql_query($sql,$con);
     }

     else
       die('Error: ' . mysql_error());  
  ?>
     



       <tr>
            <td>
            	<article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Indian</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/indian.jpg" alt=""></figure>
                                <div class="extra-wrap">
                                   
                                    <ul class="price-list p2">
                                   <?php
								  

while($row = mysql_fetch_array($result))
  {
  $item=$row['item_name'];
  $category=$row['category'];
  $pri=$row['price'];
  $rd=$row['r_id'];
              

    if($category==1)
       {?>
                                    
        <li><span>Rs.<?php echo $pri?></span><a href="order.php?id=<?php echo $rd;?>"><?php echo $item ?></a></li>
									<?php }} 
        ?>
                 </ul>
                              </div>
                            </div>
                           
                        </div>
                        
                </article></td><td>
                <article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Chineese</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/chineese.jpg" alt=""></figure>
                                <div class="extra-wrap">
                                   
                                    <ul class="price-list p2">
                                     <?php
									 $result=mysql_query($sql,$con);
								   while($row = mysql_fetch_array($result))
  {
  $item=$row['item_name'];
  $category=$row['category'];
  $pri=$row['price'];
  $rd=$row['r_id'];
                                    if($category==2)
                                    {?>
                      
                      <li><span>Rs.<?php echo $pri?></span><a href="order.php?id=<?php echo $rd;?>"><?php echo $item ?></a></li>
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
                            <h3 class="prev-indent-bot">French</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/French-Cuisine.jpg" alt=""></figure>
                                <div class="extra-wrap">
                                    
                                    <ul class="price-list p2">
                                     <?php
									 $result=mysql_query($sql,$con);
								   while($row = mysql_fetch_array($result))
  {
  $item=$row['item_name'];
  $category=$row['category'];
  $pri=$row['price'];
  $rd=$row['r_id'];
                                    if($category==3)
                                    {?>
                      
                     <li><span>Rs.<?php echo $pri?></span><a href="order.php?id=<?php echo $rd;?>"><?php echo $item ?></a></li>
                  <?php }} ?>

                    </ul>
                              </div>
                            </div>
                           
                        </div>
                        
                </article></td><td>
                <article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Italian</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/page2-img1.jpg" alt=""></figure>-->
                                <div class="extra-wrap">
                                    
                                    <ul class="price-list p2">
                                     <?php
									 $result=mysql_query($sql,$con);
								   while($row = mysql_fetch_array($result))
  {
  $item=$row['item_name'];
  $category=$row['category'];
  $pri=$row['price'];
  $rd=$row['r_id'];
  
                                    if($category==0)
                                    {?>
                      <li><span>Rs.<?php echo $pri?></span><a href="order.php?id=<?php echo $rd;?>"><?php echo $item ?></a></li>
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
