<!DOCTYPE html>
<html lang="en">
<head>
    <title>confirm</title>
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
                	<h2>Online Food  <span>Ordering</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper">
              <article class="col-2">
              <?php  
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  session_start();
  $hnm=$_SESSION['name'];	


  mysql_query("update restraunt.order set status=1 where uname='". $hnm . "'",$con);
  ?>
               	<h3 class="p1">Order Sucessfully</h3>
                                    
                Your order has been sucessfully placed. Order confirmation will be recieved through phone call.&nbsp;<a href="user.php">BACK</a>
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
