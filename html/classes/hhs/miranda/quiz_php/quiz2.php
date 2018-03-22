<html>
  <head>
  
  </head>
  <body>
	<form action = "quiz2.php" method = "post">
    	Name: <br> <input type="text" name="name" value="<?php echo $name;?>"> <br><br>
    	Favorite City: <br> <input type="text" name="city" value="<?php echo $city;?>"> <br><br>
    	Favorite Color: <br> <input type="text" name="color" value="<?php echo $color;?>"> <br><br>
    	<input type="submit" value="Submit">
    </form> 
    <?php
		if ($name) { 
          //echo  Welcome
        }
	?>
  </body>
</html>


<!--
The page starts with a form and only shows that form (hint, the rest hidden in “if POST”)

The form will have:
-1.0 Three input fields, Name, Favorite CIty, Favorite Color > +1.0
-0.5 And a submit button > +0.5

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