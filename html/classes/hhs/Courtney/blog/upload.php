<html>
  <head>
    <link rel="stylesheet" type="text/css"href="style.css">
   
  </head>
  <body>
    <div if="main">
      <?php include "include.php"; ?>
      <div id="right">
        <img src="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjLmMCyzJrTAhVKqFQKHXrWCi8QjRwIBw&url=https%3A%2F%2Fstickyegg.com%2Ftag%2Fc%2F&psig=AFQjCNH4zrLqMemSx4lvwIhzg48-iW9cww&ust=1491938024698538" style="width:900px"><br><br>
        
        <?php
			echo "<h1> Courtney's Blog</h1>;
            //phpinfo();
            $words = "More Words";
            echo "<h2>".$words."</h2>;

  			$handle = fopen("category.txt", "r");
			if ($handle) {
      			while (($line = fgets($handle)) !== false) {
                  // process the line read.
                  echo $line."<br>";
                }
              
              fclose($handle);
      		else {
        	echo "!Opening File Error!" ;
            }
		?>
        <br><br>
        <form action="insert.php" method="post">
          Title:<br>
          <input type="text" name="title" value=""><br>
          Post:<br>
          <textarea name="post" style="width:250px;height:150px"></textarea>
           <input type="submit" value="Add Post">  
            </form>
       
        After
      </div>
    </div>
  </body>
</html>

