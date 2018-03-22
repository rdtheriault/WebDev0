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
      
		//phpinfo();
		
		$news = "<span id='title'>Welcome to Zair's Soccer News</span>";
         
		echo "<h1>".$news."</h1>";
	?> 
      <div id="img">
     <div> <img src="https://i.ytimg.com/vi/RM_5tJncHww/maxresdefault.jpg" width="500px"/></div>
     
        <div> <img src="http://statics.memedeportes.com/mmds/2017/04/MMD_997518_gif_espectacular_chilena_de_aviles_hurtado_en_la_liga_mx_thumb.jpg?cb=6135020"  width="468px"/></div>
         <form action="login.php" method="post".>
          User Name: <input name="name"><br>
          Password: <input name="pw" type="password"><br>
          <input type="submit" value="Login">
        </form>
        <?php
		if($_SERVER['REQUEST_METHOD'] == 'POST') { include("../../blogLogin.php");}
?>

      </div>
    </div>              
    After
   </div>
    
    
    
    
  </body>
</html>