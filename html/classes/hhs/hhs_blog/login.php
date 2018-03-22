<html>
  <head>
    <link rel="stylesheet" type="text/css"href="style.css">
  </head>
  <body>
    <div id="main">
      <?php include "include.php"; ?>
      <div id="right">
        <img src="hhs.png" style="width:900px"><br><br>
        <?php 
            echo "<h1>Hello World Blog</h1>";
            //phpinfo();
            $words = "More words";
            echo "<h2>".$words."</h2>";

        ?>
        <form action="login.php" method="post">
        	User Name: <input name="name"><br>
          	Password: <input name="pw" type="password"><br>
          	<input type="submit" value="Login">
        </form>
        <?php
        	if($_SERVER['REQUEST_METHOD'] == 'POST'){ include("../blogLogin.php"); }
        ?>
      </div>
    </div>
  </body>
</html>