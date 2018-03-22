<html>
  <head>
    <link rel="stylesheet" type="text/css" href= "style.css">
    
    
    
    </head>
  <body>
    <div id="main">
    <?php
    include("include.php");
session_start();

   ?>
      <div id="right"> 
        <img src="http://hhs.hermiston.k12.or.us/wp-content/uploads/hhs/sites/7/2015/05/HHS-Banner.png" style="width:900px"><br><br>
    Before
 
        <form action="login.php" method="post">
          User Name:<input name ="name"><br>
          Password: <input name="pw" type="password"><br>
          	<input type="submit" value="Login">
          </form>
        <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){ include("../../blogLogin.php"); }
     ?>
  After
      </div>
      </div>
  </body>
  
 </html> 