<html>
  <head>
     <style>
    #color{
     color:blue; 
    }
       body { 
         background-color:red;
       }
    
    
    </style>
        
        </head>
  <body>
    <form action="quiz25.php" method="POST">
    favorite city:  <input type="text" name="favcity"><br>
     favorite color: <input type="text" name="color1"><br>
    city:  <input type="text" name="city1"><br>
          <input type="submit" value="Submit"><br>
    </form>
          <?php
$city = array("hermiston", "la", "lagrande");
$color = array("blue", "red", "Green");
?>

     <?php

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $favcity = $_POST["favcity"];
            $color1 = $_POST["color1"];
            $city1 = $_POST["city1"];
          echo " Your favorite city is $favcity<br>";
          echo "Your favorite color is $color<br>";
          echo "you live in  $city1<br>";
          echo "<h1>Welcome $city1!!!<br></h1>";
          
          if ( $favcity == $city[0]){
            echo "Awesome thats my favorite city too";
          }
          else {
            echo "too bad $city[0] is better";
          }
         echo "<h1 id='color'> I dont know why i asked you for your color but mine is blue </h1>"; 
        }



//}

?>
  </body>
  
</html>

<!--
The page starts with a form and only shows that form (hint, the rest hidden in “if POST”)

The form will have:
-1.0 Three input fields, Name, Favorite CIty, Favorite Color >Name was supposed to be your name
-0.5 And a submit button

Once you post to the page you will create: (hint, you will use a lot of echo)

Read the POSTed data and return: (feel free to use your own words)
-0.6 “Welcome $name” in a header
-1.0 If their city is your city (try to include other spelling of city and toUpper, hint OR)
--“Awesome, I choose $city as well”
-0.5 If not
--“Too bad, $city is not as cool as my city”
-0.6 “I don’t know why I asked you for your favorite color but it is $color”
-0.5 Use array with attractions of the city to fill an HTML list > -0.5
-0.2 A paragraph about the city >-0.2

Use CSS to:

-0.5 Change the color of their favorite color line to your favorite color
-0.6 Change the background color after the POST (hint use Javascript in an echo)> -0.6
-->