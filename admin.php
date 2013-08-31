<!DOCTYPE html>
<html lang="en">
<head>
    <title>admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
	
<?php 
session_start();
if(empty($_SESSION['name'])){
header("Location:login.html");
}
else
{
?></head>
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
                	<div class="indent-left">
                    	<h3 class="p1">Dashboard</h3>
                        
                        <dl>
                            <table><tr>
                              <td><input type="button" class="button-1" value="Review registration" onClick="location.href='review.php'"></td></tr>
                            </table>
                            
                        </dl>
                    </div>
                </article>
                <article class="col-2">
                	<h3 class="p1">Profile</h3>
                    <form id="contact-form" method="post" enctype="multipart/form-data">                    
                        <fieldset>
                              <label><span class="text-form">Name:</span><input name="name" type="text" value="ADMIN" readonly /></label>
                              <label><span class="text-form">Email:</span><input name="email" type="text" value="admin@fudla.com" readonly /></label>                              
                              
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
</body><?php }?>
</html>
