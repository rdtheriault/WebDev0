<html>
  <head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
   
  </head>
  
  <body>
    <div id="main">
    	<?php include("include.php");
      		    session_start();
				if(!isset($_SESSION["owner123"])) {
                  header("Location: login.php");
                  exit();
                }
      ?>
    		<div id="right">
    
    	<?php
			echo "<h1>Welcome to the news</h1>";
			$words = "Here are the categories:";
			echo "<h2>".$words."</h2> <br>";
			echo "<h3>Football <br>";
        	echo "Hermiston high school</h3> <br>";
			echo "<img class='uno' src='http://www4.pictures.zimbio.com/gi/Jacquizz+Rodgers+Oregon+v+Oregon+State+0PaUXemKDtYl.jpg'>";
			echo "<img class='uno' src='http://www.aawielandarchitecture.com/communities/5/004/012/577/575//images/4609934040.jpg'> <br>";
			echo "<button id='btn1'>CLICK</button>";
		?>

        <br>
       	<form action="update.php" method="post">
        Title:
          <input type="text" name="title" value""><br>
          Post:<br>
          <textarea name="post" style="width:250px;height:300px;"></textarea><br><br>
          
          
          <select id="cat" name="cat">
                          
		<?php 
			$handle = fopen("category.txt", "r");    
			if ($handle) {
              while (($line = fgets($handle)) !== false) {
                echo "<option value='".$line."'>".$line."</option>";
              } 
              fclose($handle);
        	} else {
              echo "Oops! You messed up, ya doofus!";
            }
        ?>
            
            
          </select>
          
          
          <input type="submit" value="Add Post">
        </form>
              <?php 

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              include "../../connect.php";
              $error = 0;
              
              
              //echo $_POST["title"]."<br>";
              //echo $_POST["post"]."<br>";
              //echo $_POST["cat"]."<br>";
              
              if (!isset($_POST["post"]) OR !isset($_POST["title"])) {
                echo "<h1> POST NOT SENT</h1>";
                $error = 1;
              }
              
              if ($_POST["post"] == "") {
                echo "post is empty";
                $error = 1;
              } else {
				$info = $dbc->real_escape_string($_POST["post"]);
              }
              if ($_POST["title"] == "") {
                echo "title is empty";
                $error = 1;
              } else {
				$title = $dbc->real_escape_string($_POST["title"]);
              }
              if ($_POST["cat"] == "") {
                echo "category is empty";
                $error = 1;
              } else {
				$category = $dbc->real_escape_string($_POST["cat"]);
              }
              
              if ($error == 0) {
                $name = $_SESSION['owner123'];
                $s3 = "insert into hhs_blog (user, category, info, title) Values ('".$name."', '".$category."', '".$info."', '".$title."')";
            	$q3 = mysqli_query($dbc,$s3);
                if (q3) {
                  echo '<h1>POSTED</h1>';
                } else {
                  echo '<p>'.mysqli_error($dbc).'</p>';
                  echo 'Query Issue';
                  
                }
                mysqli_close($dbc);
              }
            
            }
      ?>
          
          
       </div>
    </div>

  </body>
</html>