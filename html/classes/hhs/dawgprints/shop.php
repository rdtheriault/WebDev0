<html>
  <head>
    <link href="favicon.ico" rel="icon">
    <title>Shop</title>
    <style> 
      #items_wrapper {
       background-color: #202121; 
      }
      
    </style>
      
    <link rel="stylesheet" href="style.css">
    <script src='items.js'></script>
    <link rel="stylesheet" type="text/css" href="item2.css">
  </head>
  <body>
    <div id='main'>
      <img  id="banner" src='pics/dawg-banner.png'>
      <div id='nav'>
        <div id='home' class='btn'>
          Main
          </div>
        <div id='shop' class='btn'>
          Shop
          </div>
        <div id='custom' class='btn'>
          Custom
          </div>
        <div id='contact' class='btn'>
          Contact Us
          </div>
        <div id='cart' class='btn'>
          Cart
          </div>
      </div>
       <div id="items_wrapper">

        <div id="buttons_shop">
               <div class="side_button_outer" id="sort-hats"><h1 class="side_button">Hats</h1></div>
               <div class="side_button_outer" id="sort-shirts"><h1 class="side_button">Shirts</h1></div>
               <div class="side_button_outer" id="sort-sweaters"><h1 class="side_button">Sweaters</h1></div>
               <div class="side_button_outer" id="sort-mugs"><h1 class="side_button">Mugs</h1></div>
               
        </div>



        <div id='items'></div>

       



       
    </div>
    <div id="footer"><img id="footer_s" src="pics/footer_statement.png"></div>
    
    
    
    <script>
      //This gets the URL of the webpage to filter items by category.
      var url = window.location.href;
      var res = url.split("="); //array  res[1];
      
      
      
      var masterArray = []; //Holds the cart items in browser.
      var itemEl = document.getElementById('items');
      var fill = ""; //Holds the HTML that is created for the items.
      var count = 0; //Counts the amount of items added into the cart and different categories. Allows for elements to be given this ID for different things that need counters/cycling.
      
      
      //This set of code is for retrieving items for the current browser session. If empty, it will create a new one. 
      if (localStorage.getItem("cart") == null ){
        
        
      }
      else if(localStorage.getItem("cart") == "") {
        
      }
      else {
        masterArray.push(localStorage.getItem("cart"));
      }
      
      
      
      //This literally creates the full elements for the items. DONT TOUCH IT!
      function createItem(product) {
          fill += "<div class='outeri'>";
          fill += "<div class='pici'>";
          fill += "<img src='" + product.imgsrc + "' width='300px'>";
          fill += "</div>";
          fill += "<div class='infoi'>";
          fill += "<div class='conti'>";
          fill += "<div class='colori'>";
          //fill += "<div class='colouri' class='color1i'></div><div class='colour' class='color2i'></div><div class='colour'class='color3i'></div><div class='colour'class='color4i'></div>";
          fill += "</div>";
          fill += "<div class='dropdowni'>";
          fill += "<div class='datai'>" + product.productname + "<br>Total: $" + product.price + "</div><br>";
          fill += "<div class='selecti'>";

           fill += "<select class='sizei' id='size"+ count +"'>";
          for (var i = 0; i < product.size.length; i++) {
            fill += "<option value='" + product.size[i] + "'>" + product.size[i] + "</option>"; 
          }
          fill += "</select></div><br>";

          fill += "<div class='selecti'>";

           fill += "<select class='sizei' id='colorz"+ count +"'>";
          for (var i = 0; i < product.color.length; i++) {
            fill += "<option value='" + product.color[i] + "'>" + product.color[i] + "</option>"; 
          }
          fill += "</select></div><br>";

          fill += "<div class='selecti'>";

          //fill += "Quantity:<input type='text' id='quant" + product.number + "'><br>";
          //fill += product.productname;
          //fill += "<br>";

          //fill += "<br>";

			//This loop goes through any object that has more than one and fills the select statement with it. 
          fill += "<select class='quanti' id='quant"+ count +"'>";
          for (var i = 0; i < 10; i++) {
            fill += "<option value='" + i + "'>" + i + "</option>"; 
          }
          fill += "</select></div><br>";
			
        if (product.customizable==="yes") {
       	  fill += product.notes + '<br><input id="cb'+ count +'" type="checkbox"><input maxlength="20" id="cust'+ count +'" type="text"><br>';
          
        } 
        
        //Calls the correct functions when the button is clicked for the specific item.
          fill += "<img class='button-round' style='padding-top: 15px' id='addtocart"+ count +"' onmouseover='changepic("+count+")' onmouseout='changepicback("+count+")' onClick='cart(" + count + ",\""+ product.productname +"\","+ product.price +" ," + product.number + ", \"" + product.color +"\")' src='pics/addcart.png' width='150px'>";
          //var pn = product.number;
          //fill += "<input id='btn" + count + "' type='submit' value='Add To Cart' onClick='cart(" + pn + ")'>";

          fill += "</div>";
          fill += "</div>";
          fill += "<div id='pix'>";
          fill += "</div>";
          fill += "</div>";
          fill += "</div>";

          count++;
          //var btnholder = "btn" + count; 
          //document.getElementById(btnholder).addEventListener('click', cart(e,product.number));
      }
      
      //First this checks if there is no a filter; else apply nothing. 
      //Also, any new item that is added is applying to both sides of the "IF" statement. 
      if (res[1] == null) {
        createItem(hat);fill += "<br>";
        createItem(shirt);fill += "<br>";
        createItem(sweatshirt1);fill += "<br>";
        createItem(sweatshirt2);fill += "<br>";
        createItem(hat2);fill += "<br>";
        createItem(beanie1);fill += "<br>";
        createItem(beanie2);fill += "<br>";
        
        
        
        fill += "<br><br><br><br><br><br><br><br><br><br>";
      }
      else {
        if (hat.type == res[1]){createItem(hat);fill += "<br>";}
        if (shirt.type == res[1]){createItem(shirt);fill += "<br>";}
        if (sweatshirt1.type == res[1]){createItem(sweatshirt1);fill += "<br>";}
        if (sweatshirt2.type == res[1]){createItem(sweatshirt2);fill += "<br>";}
        if (hat2.type == res[1]){createItem(hat2);fill += "<br>";}
        if (beanie1.type == res[1]){createItem(beanie1);fill += "<br>";}
        if (beanie2.type == res[1]){createItem(beanie2);fill += "<br>";}
        
        
        fill += "<br><br><br><br><br><br><br><br><br><br>";
      }
      itemEl.innerHTML = fill;//The fill gets implemented and rendered into the webpage.
      
      
      
      var items = [];
      
      var item = {
        productname:"",
        size:"",
        quantity:"",
        number:"",
        color:"",
        type:"",
        imgsrc:"",
        price:""
      };
     
      
      
      //Stores the clicked items and their information into local storage. aka cart.
      function cart(count, productname, price, itemNum, color) {
        var itemArray = [];
        var quant = document.getElementById('quant' + count).value;
        var size = document.getElementById('size' + count).value;
        var colorz = document.getElementById('colorz' + count).value;
        var total  = price*quant;
        if (document.getElementById("cb" + count) ){
          if (document.getElementById("cb" + count).checked == true) {
            var cust = document.getElementById('cust' + count).value;
            total = (quant*5) + total;
          } else {
             var cust = 'none'; 
            }
        } else {
          var cust = 'none'; 
        }
        itemArray.push(quant);
        itemArray.push(size);
        itemArray.push(productname);
        itemArray.push(total);
        itemArray.push(colorz);
        itemArray.push(cust);
        masterArray.push(itemArray);
        localStorage.setItem("cart", masterArray);
        alert("You added "+ quant +" of " + productname + " in size " + size + " color of "+ colorz +". Your total is $" +(total)+". Customization = " + cust);
      }
      
      //On hover make addToCart gif spin
      function changepic(count) { 
       	 document.getElementById('addtocart' + count).src="pics/addcart.gif";
      }
      function changepicback(count) { 
       	 document.getElementById('addtocart' + count).src="pics/addcart.png";
      }
      </script>
		<script src="scripts.js"></script>
		<script src="scripts2.js"></script>
    </div>
  </body>
</html>