<html>
  <head>
    <link rel="stylesheet" type="text/css"href="style.css">
  </head>
  <body>
    <div id="main">
      <?php include "include.php"; 
      
			session_start();
			if(!isset($_SESSION['owner123'])){
              	header( "Location: login.php" ); 
              	exit();
            }      

      ?>
      <div id="right">
        <img src="hhs.png" style="width:900px"><br><br>
        <?php 
            echo "<h1>Cool Tech</h1>";
            //phpinfo();
            $words = "More words";
            echo "<h2>".$words."</h2>";
        ?>
        After
      </div>
    </div>
  </body>
</html>