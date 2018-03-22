<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="main"> 
    <?php 
		include "include.php"; 
      ?>
        <div id="right">
        <img src="../../hhs_blog/hhs.png" style="width:900px">
          <br><br>
          <form action = "insert.php" method = "post">
            Title: <br>
            <input type="text" name="title" value=""><br>
            Post: <br>
            <textarea name="post" style="width:250xp;height:150xp"></textarea><br><br>
            <select id="cat" name="txt">
             <?php 
		$handle = fopen("cat.txt" , "r");
		if ($handle) {
          while (($line = fgets($handle)) !== false) {
            //process the line read.
            echo "<option value='".$line. "'>".$line. "</option>";
          }
          fclose($handle);
        }
          else {
          echo "Holy smokes Batman, you have an error...!";
          
      
        } ?>
		 </select>
            <input type="submit" value="Add Post">
          </form>
          Before
        <?php 
            echo "<h1>Hello World Blog</h1>";

if($_SERVER["REQUEST_METHOD"] == 'POST') {
              $error = 0;
  			  include"../../connect.php";
              echo $_POST["title"]."<br>";
			  echo $_POST["post"]."<br>";
			  echo $_POST["txt"]."<br>";
            
 				if($_POST["post"]==""){
  						 echo "<br>Your post is empty<br>"; 
   						 $error=1;  
 				 }
 				 else{
  					 $info= $dbc->real_escape_string($_POST["post"]);   
 				 }
   				if($_POST["title"]==""){
  						 echo "<br>Your title is empty<br>";
   						 $error=1;  
 				 }
  				else{
   					$title= $dbc->real_escape_string($_POST["title"]);  
  				}
    			if($_POST["txt"]==""){
 					  echo "<br>Your txt is empty<br>"; 
    				   $error=1; 
  				}
  			else{
   				$category= $dbc->real_escape_string($_POST["txt"]); 
    
  				}
          if($error == 0) {
            //for testing
            $name = "mirandaa";
            
            $s3 = "Insert into hhs_blog (user, category, info, title) Values ('".$name."','".$category."','".$info."','".$title."')";
            $q3= mysqli_query($dbc,$s3);
            if($q3){
            echo '<br>Your post has been posted.<br>';    
              
            }
            else{
             echo '<p>'.mysqli_error($dbc).'</p>';
               echo 'Query issue';
                            
            }
    
    
  	}
  mysqli_close($dbc);
}
  else{
    
    
  }

        ?>
        
        After
      </div>
    </div>
  </body>
</html>