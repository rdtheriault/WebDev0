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
			session_start();
			if(!isset($_SESSION['owner123'])){
              	header( "Location: login.php" ); 
              	exit();
            }
			$owner = $_SESSION['owner123'];
			//id user category info title approved
            echo "<h1>Blog Posts</h1><br>";
            
			include "../connect.php";
			$s = "Select * From hhs_blog";// WHERE user like 'zackt' and category like '%Football%'"; // Where owner = '".$owner."'";
		$q = mysqli_query($dbc,$s);
		if($q)
		{   
			while($row = mysqli_fetch_array($q, MYSQLI_ASSOC))
			{
				echo '<h2 class="titles">'.$row['title'].' - by '.$row['user'].'</h2><div class="infos">'.$row['info'].'</div><br>';
			}
	
		}
		else
		{
			echo '<p>'.mysqli_error($dbc).'</p>';
			echo 'Query issue';
		}
		mysqli_close($dbc);
        ?>
        
      </div>
    </div>
  </body>
</html>