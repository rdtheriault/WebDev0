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
        
        <br><br>
        <form action="insert.php" method="post">
          Title:<br>
          <input type="text" name="title" value=""><br>
          Post:<br>
          <textarea name="post" style="width:250px;height:150px;"></textarea><br><br>
          <select id="cat" name="cat">
            
          <?php
            $handle = fopen("cat.txt", "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    // process the line read.
                  echo "<option value='".$line."'>".$line."</option>";
                }

                fclose($handle);
            } else {
                // error opening the file.
              echo "Holey smokes Batman, you have an error..!";
            } 
        ?> 
          
          </select>
          <input type="submit" value="Add Post">
        </form>
      </div>
    </div>
 
    
    
    
    
    
    <?php


		if($_SERVER['REQUEST_METHOD'] == 'POST'){
          include "../connect.php";
          $error = 0;
         
          //echo $_POST["title"]."<br>";
          //echo $_POST["post"]."<br>";
          //echo $_POST["cat"]."<br>";
          
		if(!isset($_POST["post"]) OR !isset($_POST["title"])){
          echo "<br>Your posts are not set<br>"; 
          $error = 1;
        }
          
        if($_POST["post"] == ""){
          echo "<br>Your post is empty<br>"; 
          $error = 1;
        }
        else{
         	$info =  $dbc->real_escape_string($_POST["post"]);
        }
          
        if($_POST["title"] == ""){
          echo "<br>Your title is emptyt<br>"; 
          $error = 1;
        }
        else {
          	$title = $dbc->real_escape_string($_POST["title"]);
        }
        if($_POST["cat"] == ""){
          echo "<br>Your category is emptyt<br>"; 
          $error = 1;
        }
        else {
          $category = $dbc->real_escape_string($_POST["cat"]);
        }
          if($error == 0) {
            
            //for testing
            $name = $_SESSION['owner123'];
            
            $s3 = "Insert into hhs_blog (user, category, info, title) Values ('".$name."','".$category."','".$info."','".$title."')";

            $q3 = mysqli_query($dbc,$s3);
            if($q3)
            {
                echo '<br>Your post has been posted!';
            }
            else
            {
                echo '<p>'.mysqli_error($dbc).'</p>';
                echo 'Query issue';
            }
            
          }
          mysqli_close($dbc);
          
        }
		else {
          
          
        }

	?>
    
    
  </body>
</html>