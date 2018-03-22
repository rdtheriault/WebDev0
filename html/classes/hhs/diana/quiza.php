<html>
  <head>
    
    
    
    </head>
  
  
  
  <body>
    
    
    
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
    

   ?>
            
            
            </select>
          </form>
    <?php




?>
    
    
    
    </body>
  
  
  
  
  
  </html>