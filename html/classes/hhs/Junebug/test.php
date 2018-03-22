<html>
  <head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
   
  </head>
  
  <body>
    <div id="main">
    	<?php include("include.php");
      		    session_start();
				if(!isset($_SESSION["owner123"])) {
                  header("Location: login.php");
                  exit();
                }
      ?>
    		<div id="right">
    
    	<?php
			
			echo "<Mustang <br>";
        	echo "Corvette</h3> <br>";
			echo "<img class='uno' src='http://www.insidethemagic.net/wp-content/uploads/2017/03/IMG_6780.jpg'>";
			echo "<img class='uno' src='http://www.blogcdn.com/slideshows/images/slides/850/389/S850389/slug/l/corvette-drive-1.jpg'> <br>";
			echo "<button id='btn1'>CLICK</button>";
		?>
			Array
        <br>
       	<form action="update.php" method="post">
        Title:
          <input type="text" name="title" value""><br>
          Post:<br>
          <textarea name="post" style="width:250px;height:300px;"></textarea><br><br>
          
          
          <select id="cat" name="cat">
                         
            
          </select>
          
          
          <input type="submit" value="Add Post">
        </form>
              <?php 

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              include "../../connect.php";
              $error = 0;
              
              
           

  </body>
</html>