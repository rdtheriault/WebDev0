 <html>
   <head>
    <link rel="stylesheet" type="text/css" href="style.css">
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
$owner = "mirandaa";
			//id user category info title approved
            echo "<h1>Blog Posts</h1>";
            
			include "../../connect.php";
			$s = "Select * From hhs_blog where user = '".$owner."'"; // Where owner = '".$owner."'";
		$q = mysqli_query($dbc,$s);
	if($q){
     while($row= mysqli_fetch_array($q,MYSQLI_ASSOC)) 
     {
       echo '<h2 class="design">'.$row['title'].'</h2><div class="zox">'.$row['info'].'</div>';
			
     }
      
    }


   ?>
  After
      </div>
      </div>
  </body>
  
 </html>