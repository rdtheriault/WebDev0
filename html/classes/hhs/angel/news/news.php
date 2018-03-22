<html>
  <head>
    <link rel="stylesheet" type="text/css"href="style.css">
          
          
    
  </head>
  <body>
    <div id="main">
    <?php include "include.php"; 
      session_start();
      if(!isset($_SESSION['angel345'])) {
        header("Location: login.php" );
        exit();
      }
      
      ?>
    	
    <div id="News" >      
    <?php		
		$owner = $_SESSION['angel345'];
			echo "<h1>Skateboard posts<h1>";
			include "../../connect.php";
		$s = "Select * from hhs_blog WHERE user ='".$owner."' and category like '%skateboard%'";
     $q = mysqli_query($dbc,$s);
		  if ($q)
          {
           while($row = mysqli_fetch_array($q, MYSQLI_ASSOC))
           {
             echo '<h2 class="class">'.$row['title'].' by - '.$row['user'].'</h2><div class="div1">'.$row['info'].'</div>';
           }
            
          }
            
            
            
	?> 
      <div id="img">
  
      </div>
    </div>              
    
   </div>
    
    
    
    
  </body>
</html>