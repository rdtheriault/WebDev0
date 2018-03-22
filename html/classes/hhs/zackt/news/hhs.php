<html>
  <head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
   
  </head>
  
  <body>
    <div id="main">
    	<?php include "include.php"; 
      		    session_start();
				if(!isset($_SESSION["zackt"])) {
                  header("Location: login.php");
                  exit();
                }      
      ?>
    		<div id="right">
    		<img class="image" src="http://static.hudl.com/users/prod/544464_91ba0cf47a4f41668ef8e9acae017a01.jpg">
    	<?php
			echo "<h1 class='purp'>Hermiston High School</h1><br>";
			$owner = $_SESSION['owner123'];
			echo "<h2>Blog Posts</h2>";
			include "../../connect.php";
			$s = "select * from hhs_blog WHERE user like '". $owner. "' and category like '%Hermiston High School%'";
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