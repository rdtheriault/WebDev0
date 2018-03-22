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
              <img class="image" src="http://sportsdaydfw.imgix.net/Samford+TCU+Football_39527717_79121.JPG">
    
    	<?php
			echo "<h1 class='purp'>World of Football</h1><br>";
			$owner = $_SESSION['owner123'];
			echo "<h2>Blog Posts</h2>";
			include "../../connect.php";
			$s = "select * from hhs_blog WHERE user like '". $owner. "' and category like '%Football%'";
	        $q = mysqli_query($dbc, $s);
			if($q) {
              while($row = mysqli_fetch_array($q, MYSQLI_ASSOC)){
                
                echo '<h2 class="title">'.$row['title'].'</h2><div class="post">'.$row['info'].'</div>';
              }
            } 
			else {
              echo '<p>'. mysqli_error($dbc).'</p>';
              echo 'query issue';
            }
		?>

              
    		</div>
    </div>
    
    
  </body>
</html>