<html>
  <head>
    <style>
      body {
        background-color: gray;
      }
      #outer {
        display: flex;
        border: 2px solid black;
        border-radius: 5px;
        width: 700px;
      }
      #cont {
        display: flex;
        
      }
      .colour {
        height: 50px;
        border-radius: 5px;
        width: 50px;
        margin: 5px;
      }
      #color1 {
        background-color: purple;
      }
      #color2 {
        background-color: #bf9b30;
      }
      #color3 {
        background-color: white;
      }
      #color4 {
        background-color: black;
      }
      #dropdown {
        text-align: center;
        font-size: 45px;
        font-family: 'san-serif';
        color: #bf9b30;
        
      }
      #info {
        width: 300px;
        
        
      }
      .rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
      }
      
      .styled-select {
   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
   height: 29px;
   overflow: hidden;
   width: 240px;
}
      
      .styled-select select {
   background: transparent;
   font-family: impact;
   border: none;
   font-size: 18px;
   height: 29px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 268px;
	}
      
      .black   { background-color: #663399; }
      .black select   { color: #f35858; }
      
    </style>
  </head>
  <body>
    <div id='outer'>
      <div id='pic'>
        <img width='350px'src='https://rukminim1.flixcart.com/image/704/704/shirt/s/h/y/46-bfrybluesht02-being-fab-original-imaekjr8ymhnxznp.jpeg'>
      </div>
      <div id='info'>
        <div id='cont'>
          <div id='color'>
            <div class='colour' id='color1'></div><div class='colour' id='color2'></div><div class='colour'id='color3'></div><div class='colour'id='color4'></div>
            </div>
          <div  id='dropdown'>
            <div id='data'>Total: $</div><br>
            <div class='styled-select black rounded'>
            <select id='select1'>
              <option value='medium'>Medium</option>
              <option value='large'>Large</option>
              </select></div><br>
           <div class='styled-select black rounded'>   
            <select id='quant'>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
             </select></div><br>
            
          </div>
        </div> 
        <div id='pix'>
        </div>
      </div>
     </div>
    <script>
    </script>
  </body>
</html>