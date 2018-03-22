<html>
  <head>
    <link rel="stylesheet" type="text/css"href="style.css">
          
          
    
  </head>
  <body>
    <div id="main">
    <?php include "include.php"; ?>
    
    <div id="News" >      
    <?php		

 session_start();
      if(!isset($_SESSION['angel345'])) {
        header("Location: login.php" );
        exit();
      }
      
      
      
		//phpinfo();
		
		$news = "<span id='title'>Welcome to Angel's Skateboard News</span>";
         
		echo "<h1>".$news."</h1>";
	?> 
      <div id="img">
     <div> <img src="https://www.skatedeluxe.com/blog/wp-content/uploads/2017/02/skateboard-news.jpg" width="500px"/></div>
     
        <div> <img src="https://i.ytimg.com/vi/4GFIXrybfKg/maxresdefault.jpg"  width="468px"/></div>
      </div>
    </div>              
    
   </div>
    
    
    
    
  </body>
</html>