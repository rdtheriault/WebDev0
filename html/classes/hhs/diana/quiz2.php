<html>
  <head>
    
    
    
    </head>
  
  <body>
          <form action="quiz2.php" method="post">
              Name:<br>
          <input type="text" name="name" value""><br>
          Favorite Color:<br>
         <textarea name="color" style="width:250xp;height:150xp"></textarea><br><br>
            
             Favorite City:<br>
          <input type="text" name="city" value""><br>
        
          <input type= "submit" value="Add Post">
            
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
    echo '<h1>Welcome  $_POST["name"]; !<br></h1>';
    
     echo 'Your favorite color is...   $_POST["color"]; <br>';
    
    echo 'Your favorite city is...  $_POST["city"]; <br>'
  
    if($_POST["city"]=="San Francisco"){
      echo "Awesome, I choose San Francisco as well";
    }


    echo 'Too bad   $_POST["city"] is not as cool as my city<br>';
    echo 'I dont know why I asked you for your favorite color but it is  $_POST["color"]<br>';
      }
  ?>
    </body> 
  
  </html>


<!--
The page starts with a form and only shows that form (hint, the rest hidden in “if POST”)

The form will have:
-1.0 Three input fields, Name, Favorite CIty, Favorite Color 
-0.5 And a submit button

Once you post to the page you will create: (hint, you will use a lot of echo)

Read the POSTed data and return: (feel free to use your own words)> -.25 not showing after post
-0.6 “Welcome $name” in a header
-1.0 If their city is your city (try to include other spelling of city and toUpper, hint OR)
--“Awesome, I choose $city as well”
-0.5 If not > -0.5
--“Too bad, $city is not as cool as my city”
-0.6 “I don’t know why I asked you for your favorite color but it is $color”
-0.5 Use array with attractions of the city to fill an HTML list > -0.5
-0.2 A paragraph about the city > -0.2

Use CSS to:

-0.5 Change the color of their favorite color line to your favorite color > -0.5
-0.6 Change the background color after the POST (hint use Javascript in an echo) >-0.6
-->