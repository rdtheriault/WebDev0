<html>
  <head>
    <style>
      .{
        background-color:n
        
      }
      
      
      </style>
    
    
    </head>
    
	<body>
       <h1 style="text-align:center">Favorite Car!</h1>
      
    Favorite car: <br>
      <input type="text" name="title" value""><br>
      
     Why do you like it?<br>
      <input type="text" name="title" value""><br>
      
    <select id="cars">
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
      </select>
      <button type="submit">Submit</button>
      <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
if($_POST["post"]==""){
   echo "<br><br>"; 
    
  }

}

	?>
      
        
      </body>
  
  
</html>  