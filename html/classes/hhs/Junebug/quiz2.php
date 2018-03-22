<html>
  <head>
    <style>
    body  {
     background-color:Cyan;  
      color:Purple;
      }
    </style>
  </head>
  <body>
    <form action="quiz2.php" method="post">
       Name:<input type="text" name="title" value""><br>
        City:<input type="text" name="city" value""><br>
      Color:<input type="text" name="color" value""><br>
      <input type="Submit" value="Submit"><br>
      <select>
      <option value="1">Awesome</option><option value="2">Alright</option><option value="3">Wait</option><option value="4">Nah...</option>
      </select>
      
      
    <?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name =  $_POST['title'];
    $city =  $_POST['city'];
    $color =  $_POST['color'];
    
   echo "<h1>Welcome <p id='title'> $name</p> </h1><br>";
   echo "Awesome,I choose $city as well!";
   echo "Too bad, $city is not as cool as my city";
   echo "I don’t know why I asked you for your favorite color but it is $color";
    }
?>

 
		
    <p><strong>Charlotte is the largest city in the state of North Carolina. It is the county seat of Mecklenburg County and the second-largest city in the southeastern United States, just behind Jacksonville, Florida. Charlotte is the third-fastest growing major city in the United States.<i>It is the place where the Carolina Panthers have their Bank of America Football Stadium.</i></strong></p>
  </body>
</html>
  
  
  <!--
The page starts with a form and only shows that form (hint, the rest hidden in “if POST”)

The form will have:
-1.0 Three input fields, Name, Favorite CIty, Favorite Color >
-0.5 And a submit button

Once you post to the page you will create: (hint, you will use a lot of echo)

Read the POSTed data and return: (feel free to use your own words)
-0.6 “Welcome $name” in a header
-1.0 If their city is your city (try to include other spelling of city and toUpper, hint OR) > -0.5 now an if statement
--“Awesome, I choose $city as well”
-0.5 If not > -0.5
--“Too bad, $city is not as cool as my city”
-0.6 “I don’t know why I asked you for your favorite color but it is $color”
-0.5 Use array with attractions of the city to fill an HTML list  . -0.5
-0.2 A paragraph about the city > -0.1 not echoed in if POST

Use CSS to:

-0.5 Change the color of their favorite color line to your favorite color > -0.5
-0.6 Change the background color after the POST (hint use Javascript in an echo) > -0.6
-->