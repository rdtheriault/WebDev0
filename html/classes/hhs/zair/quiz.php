<html>
 <head>
   
  </head>
  <body>
    <?php
 $cars = "<span> Post Your Favorite Cars! </span>";
		echo "<h1>".$cars."</h1>";
   ?>
   <div id="img">
     <div> <img src="http://www.carsut.com/wp-content/uploads/2013/04/nissan-skyline-gtr.jpg" width="500"/></div>
     
        <div> <img src="https://s-media-cache-ak0.pinimg.com/736x/65/8f/3b/658f3bdeeb259d3fbab5c097de736e4e.jpg"  width="480"/></div>
      
        
      </div>
      
    


          
      <form action="quiz.php" method="post">
          Title:<br>
          <input type="Favorite Car" name="Why do you like it" value""><br>
          post:<br>
        <textarea name="post" style="width:250px:height:150"></textarea>
        <select id="cat" name="cat">
          <p>
      </select>
        
          <input type="submit" value="Add Post">
        </form>
				Favorite car?
		<select name="formCar">
		<option value="">Select...</option>
		<option value="M">Nissa Skyline</option>
		<option value="F">69 Camaro</option>
			</select>
			</p>
          <?php  
                    
		if(isset($_POST['formSubmit']) )
		{
		$varCar = $_POST['formCar'];
		$varName = $_POST['formName'];
		$varCompany = $_POST['formCompany'];
		$errorMessage = "select";
				
			}
			?>
          <?php  
      $handle = fopen("text.txt","r");
		if($handle) {
          while  (($line = fgets($handle)) !==false) {
            echo"<option value='". $line."'>".$line."<br>";
            
          }
                  fclose($handle);
        }
		else {
         "you have an error somewhere"; 
        }
      ?>
         
        </select>
        
          <input type="submit" value="Add Post">
        </form>
    
  
  </body>
  <style>
    #img {
      display:flex;
    }
    
    body {
      background-color:navy;
     color:gold; 
    }
    
    
  </style>
</html>