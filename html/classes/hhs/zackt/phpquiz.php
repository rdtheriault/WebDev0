<html>
  <head>
   	<style>
      .com {
        color: blue;
        font-family: cursive;
      }
      #r {
        border: 5px groove purple;
        padding: 5px;
      }
      #s {
        border: 5px ridge indigo;
        padding: 5px;
      }
      #t {
        border: 5px double violet;
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <form action="phpquiz.php" method="post">
        Fav Car:<input type="text" name="title" value""><br>
        Why?:<input type="password" name="why"><br>
          <select id="cat" name="cat">               
		<?php 
			$ratings = array("lit", "cool", "aight", "bad");
			$arrleng = count($ratings);
			for($x = 0; $x < count($ratings); $x++) {
              echo '<option value="'.($ratings[$x]).'">'.$ratings[$x].'</option>';
            }
        ?>  
          </select>
          <input type="submit" value="Select">
        </form>
    if (
    <?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $car = $_POST['title'];
          $why = $_POST['why'];
          $rate = $_POST['cat'];
          echo "<h1 class='com'>your favorite car is: <p id='r'>$car</p> </h1><br>";
          echo "<h1 class='com'>you like this car because: <br> <p id='s'>$why</p> </h1><br>";
          echo "<h1 class='com'>you gave this car a rate of: <p id='t'>$rate</p></h1> <br>";
        }
	?>
  </body>
</html>