<html>
  <head>
    <style>
      
    </style>
  </head>
  <body>
    <form action="phpq.php" method="post">
      <h1>Cars</h1>
        Hermiston:<input type="text" name="title" value""><br>
        Football:<input type="password" name="sport"><br>
          <select id="cat" name="cat">               
		<option value="1">Awesome</option><option value="2">Alright</option><option value="3">Wait</option><option value="4">Nah...</option>  
          </select>
          <input type="submit" value="Add Post">
        </form>
    <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $car = $_POST["title"];
  $why = $_POST["dog"];
  $rate = $_POST["cat"];
  
  echo "Your favorite car is $car <br>";
  echo "You like this car because:<br>$why";
  echo "<br>You gave it a Rating of $cat";
  
  
  
  
}
?>
  </body>
</html>