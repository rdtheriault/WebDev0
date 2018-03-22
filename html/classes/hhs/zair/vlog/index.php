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

session_start();
      if(!isset($_SESSION['angel345'])) {
        header("Locations: login.php" );
        exit();
      }
		
        //phpinfo();
		
		$news = "<span id='title'>Welcome to Zair's Soccer News</span>";
         
		echo "<h1>".$news."</h1>";
	?> 
      <div id="img">
     <div> <img src="https://i.ytimg.com/vi/RM_5tJncHww/maxresdefault.jpg" width="500px"/></div>
     
        <div> <img src="http://statics.memedeportes.com/mmds/2017/04/MMD_997518_gif_espectacular_chilena_de_aviles_hurtado_en_la_liga_mx_thumb.jpg?cb=6135020"  width="468px"/></div>
      </div>
    </div>              
    After
   </div>
    
    
    
    
  </body>
</html>