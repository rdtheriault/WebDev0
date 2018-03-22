<html>

  <head>
    
  </head>
  
  
  <body>
    <form action="quiz2.php" method="post">
      fav car;<input type="text" name="title" value=""><br>
      why do you like it?<input type="password" name="why"><br><br>
      <select id="cat" name="cat">
      
      
      
      <?php
      $rating = array("awesome Possume", "Great","Meh","garbage");
  $arrleng = count($rating);
for($x = 0; $x < $arrleng; $x++){
  echo  '<option value="' .($x+1).'">' .$rating[$x].'</option>';
}
?>
      </select>
      <input type="submit" value="select">
    </form>
    <?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $car = $_POST["title"];
     $why = $_POST["why"];
     $rate = $_POST["cat"];
     echo "your favorite car is $car";
     echo "you like this car because<br>$why";
     echo "<br>you gave it a rating of $rate";
     
     
   }
?>
  </body>
  
  
  
</html>