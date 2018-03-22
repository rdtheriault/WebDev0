<html>
  <head>
    <title>Promotions</title>
    <link rel="stylesheet" href="style.css">
    <style>
      #none {
        color: red;
        margin-top:75px;
      }
      #bam {
        width: 975px;
        height: 200px;
        border: solid 2px maroon;
    	background-color: blue;
       	margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 10px;
        margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <div id='main'>
      <img id="banner" src='pics/dawg-banner.png'>
        <div id='nav'>
          <div id='home' class='btn'>
            Main
            </div>
          <div id='shop' class='btn'>
            Shop
            </div>
          <div id='cart' class='btn'>
            Cart
            </div>
          <div id='contact' class='btn'>
            Contact Us
            </div>
          <div id='deals' class='btn'>
            Promotions
            </div>
        </div>
      <div id='bam'>
      <h1 id='none'>NONE AT THIS TIME</h1>
      </div>
          <script src="scripts.js"></script>
      <div class='spacer'></div>
      <div id="footer">
        <img id="footer_s" src="pics/footer_statement.png">
      </div>
      <script>
        document.getElementById("none").addEventListener("click", function click(){
          document.getElementById("none").innerHTML = "We said none at this time....<br><img src='https://i.imgur.com/kEpJ5aS.gif'>";
          document.getElementById("bam").style.height = '500px';
          
        });
        click();
      </script>
    </div>
  </body>
</html>