<html>
  <head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
   
  </head>
  
  <body>
    <div id="main">
    	<?php include "include.php" ?>
    		<div id="right">
    
    	<?php
			echo "<h1 class='purp'>Welcome to the News!</h1>";
			$words = "Here are the categories:";
			echo "<h2>".$words."</h2> <br>";
			echo "<h3>Football <br>";
        	echo "Hermiston high school</h3> <br>";
			echo "<img class='uno' src='http://www4.pictures.zimbio.com/gi/Jacquizz+Rodgers+Oregon+v+Oregon+State+0PaUXemKDtYl.jpg'>";
			echo "<img class='uno' src='http://www.aawielandarchitecture.com/communities/5/004/012/577/575//images/4609934040.jpg'> <br>";
			echo "<button id='btn1'>CLICK</button>";
		?>
              <?php 
              session_start();
				if(!isset($_SESSION["owner123"])) {
                  header("Location: login.php");
                  exit();
                }
              
              ?>
    		</div>
    </div>
    
    
  </body>
</html>