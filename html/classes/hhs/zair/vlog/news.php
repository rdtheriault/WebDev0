<html>
  <head>
    <link rel="stylesheet" type="text/css"href="style.css">
          
          
    
  </head>
  <body>
    <div id="main">
    <?php include "include.php"; ?>
    	Before
    <div id="News" >      
    <?php		
		$owner = "zairG";
			echo "<h1>Blog Post<h1>";
			include "../../connect.php";
		$s = "Select * from hhs_blog WHERE user ='".$owner."' and category like '%skateboard%'";
     $q = mysqli_query($dbc,$s);
		  if ($q)
          {
           while($row = mysqli_fetch_array($q, MYSQLI_ASSOC))
           {
             echo '<h2 class="class">'.$row['title'].'</h2><div class="div1">'.$row['info'].'</div>';
           }
            
          }
            
            
            
	?> 
      <div id="img">
  
      </div>
    </div>              
    After
   </div>
    
    
    
    
  </body>
</html>