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
                	<h1><a href="index.html">Catering<span>.com</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="index.html">About</a></li>
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
                	<h2>Online Food<span>Ordering</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper">
            	                <article class="col-2">
                	<h3 class="p1">Review/Complaint Form</h3>
                    <form id="contact-form" method="post" enctype="multipart/form-data" action="comp_add.php">                    
                        <fieldset>
                        <?php 
session_start();
$un=$_SESSION['name'];

$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);
$sql="select cname from customer where uname='".$un."'";
$rs=mysql_query($sql,$con);
while($row=mysql_fetch_array($rs))
{
	$n=$row['cname'];
}
?>
                              <label><span class="text-form">Your Name:</span><input name="name" type="text" value="<?php echo $n;?>" /></label>
                             
                              <div class="wrapper">
                                <div class="text-form">Message:</div>
                                <div class="extra-wrap">
                                    <textarea name="com"></textarea>
                                    <div class="clear"></div>
                                    <div class="buttons">
                                        <a class="button-2" href="#" onClick="document.getElementById('contact-form').reset()">Clear</a>
                                        <a class="button-2" href="#" onClick="document.getElementById('contact-form').submit()">Send</a>
                                    </div> 
                                </div>
                              </div>                            
                        </fieldset>						
                    </form>
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
</body>
</html>
