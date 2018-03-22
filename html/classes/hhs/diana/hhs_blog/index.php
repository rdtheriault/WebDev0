<html>
  <head>
    <link rel="stylesheet" type="text/css" href= "style.css">
    
    
    
    </head>
  <body>
    <div id="main">
    <?php
    include "include.php"

   ?>
      <div id="right"> 
        <img src="http://hhs.hermiston.k12.or.us/wp-content/uploads/hhs/sites/7/2015/05/HHS-Banner.png" style="width:900px"><br><br>
    Before
  <?php
 echo "<h1>Welcome to my blog!</h1>";
 echo "<h1>Hello World</h1>";
   //phpinfo();
	$words="More Words";
	echo "<h2>" .$words."</h2>";

	session_start();
	if(!isset($_SESSION['owner123'])){
    header("Location: login.php");
      exit();
      
    }


   ?>
  After
      </div>
      </div>
  </body>
  
 </html> 