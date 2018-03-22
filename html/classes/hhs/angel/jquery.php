<html>
  <head>
    <style>
      #head {
        color : red;
      }
    </style>
  </head>
  <body>
    <div id="head"></div>
    <h1> header 1 </h1>
    	<h1 class="notMain">Header 2</h1>
    	<h1 class="notMain">Header 3</h1>
    <h2 class="notMain">hello </h2>
    
<?php 
     echo "<br>hello everyone"; 
	phpinfo();
?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
    	  $("#head").text("hello world");
    	  $("h1").text("TEST");
    	  $(".notMain").text("not main");
      	  var header1 = $("#head");
      	  $("h2").css("color","red");
      	  $("#link").attr("href","http://yahoo.com");
      	  $("#img").attr("src","image2.png");
      
      	
    </script>
    
    
    </html>