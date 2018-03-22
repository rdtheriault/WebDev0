<html>
  <head>
    <link rel="stylesheet" type="text/css" href= "style.css">
    
    
    
    </head>
  <body>
    <div id="main">
	<?php
   	 include "include.php";
       session_start();
	if(!isset($_SESSION['owner123'])){
    header("Location: login.php");
      exit();
      
    }
	?>

      <div id="right"> 
        <img src="http://hhs.hermiston.k12.or.us/wp-content/uploads/hhs/sites/7/2015/05/HHS-Banner.png" style="width:900px"><br><br>
        <form action="upload.php" method="post">
              Title:<br>
          <input type="text" name="title" value""><br>
          Post:<br>
          <textarea name="post" style="width:250xp;height:150xp"></textarea><br><br>
        
          <input type= "submit" value="Add Post">
          <select id="cat" name="txt">
             <?php
$handle= fopen("cat.txt","r");
if($handle){
  while(($line =fgets($handle))!==false){
  echo $line. "<br>";
   echo"<option value='".$line."'>".$line."</option>";
  }
  fclose($handle);
}
else{
 echo "Holy Smokes Batman,you have an error...";
}
    

   ?>
            
            
            </select>
          </form>
    Before
  <?php


 echo "<h1>Welcome to my blog!</h1>";
 echo "<h1>Hello World</h1>";
   //phpinfo();
	$words="More Words";
	echo "<h2>" .$words."</h2>";


   ?>
  After
      </div>
      </div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 $error=0;
  include "../../connect.php";
  //echo $_POST["title"]."<br>";
  //echo $_POST["post"]."<br>";
  //echo $_POST["txt"]."<br>";
    if(!isset($_POST["post"])OR !isset($_POST["title"])){
   $error=1;  
  }
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
            $name = $_SESSION['owner123'];
            
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
  </body>
  
 </html> 