<html>
  <head>
   	<style>
		body {
          background-color: black;
          color: white;
        }
      #colors {
        color: yellow;
      }
    </style>
  </head>
  <body>
        <p>Attractions in my favorite city, Corvallis, are:
    <?php 
		$ratings = array("Oregon State University!", "Grandpas House!", "Cresent Valley High School!", "Izzy's and Cold Stone!");
		$arrleng = count($ratings);
		for($x = 0; $x < count($ratings); $x++) {
        echo '<option value="'.($ratings[$x]).'">'.$ratings[$x].'</option>';
       }
    ?>
    <p>Corvallis is rainy. Corvallis is wet. Corvallis is "The Valley of Sadness." It is in central Oregon. There are a lot of people in corvallis.
      I love corvallis. There is a college, waterparks, and many bread places. Corvallis is awesome!</p>
    <hr>
	<form action='phpq2.php' method='post'>
      Name: <input type='text' name='name'>
      <br>
      Favorite City: <input type='text' name='city'>
      <br>
      Favorite Color: <input type='text' name='color'>
      <br>
      <input type='submit' value='Submit' id='btn'>
      
    </form>

      
      <?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $name = $_POST['name'];
          $city = $_POST['city'];
          $color = $_POST['color'];
          echo "<p>Welcome $name.</p>";
          ?>
       <div id="phone">
    	</div>
    <?php
          echo "<script>
          var city = '$city';
              	if (city == 'Corvallis') {
              		document.getElementById('phone').innerHTML = 'Awesome, I chose $city as well!';
              	} else {
               		document.getElementById('phone').innerHTML = 'Too bad, $city is not as cool as my city.';
               	}
      		</script>";
          echo "<p>I don't know why I asked you, but your favorite color is <span id='colors'>$color</span>.</p><br>";
          echo "<script>
          document.body.style.backgroundColor = 'white';
          document.body.style.color = 'black';
          </script>";
        }
		
    ?>
    
  </body>
</html>

<!--
The page starts with a form and only shows that form (hint, the rest hidden in “if POST”)

The form will have:
-1.0 Three input fields, Name, Favorite City, Favorite Color >
-0.5 And a submit button

Once you post to the page you will create: (hint, you will use a lot of echo)

Read the POSTed data and return: (feel free to use your own words)
-0.6 “Welcome $name” in a header
-1.0 If their city is your city (try to include other spelling of city and toUpper, hint OR)
--“Awesome, I choose $city as well”
-0.5 If not
--“Too bad, $city is not as cool as my city”
-0.6 “I don’t know why I asked you for your favorite color but it is $color”
-0.5 Use array with attractions of the city to fill an HTML list
-0.2 A paragraph about the city

Use CSS to:

-0.5 Change the color of their favorite color line to your favorite color
-0.6 Change the background color after the POST (hint use Javascript in an echo)
-->