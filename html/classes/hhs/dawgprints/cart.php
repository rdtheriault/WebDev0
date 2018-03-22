<html>
  <head>
    <link href="favicon.ico" rel="icon">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
      #cartlist {
        margin: 10px;
      }
      .cartstyle {
        display: flex;
        
      }
      .itemstyle {
        margin: 10px;
      }
      
    </style>
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
      
      <div id='cartlist'></div>
<div id="f_holder"><div id="footer">
  <img id="footer_s" src="pics/footer_statement.png">
  </div></div>
    </div>
          <script src="scripts.js"></script>
     

    
    <script>
      
      
      
      function loadCart() {
          var masterArray = localStorage.cart;//loads cart
          var fill = "";//holds html
          var count = 0; //used to itreate through each item
          var masterSplit = masterArray.split(',');
          var totalPrice = 0;
        if(masterSplit.length > 1) {

          for(var i = 0; i < masterSplit.length; i++) {
            //fill += "<div class='cartstyle'>";
            
            //reset count to start next item, 6 because 6 attr of each item, starts at 0
            if (count===6) { 
              count = 0;
              //fill += " | <button id='remove' onClick='remove("+ i +")'>Remove Item</button></div>";
            }//reset

            //if statements grab each attribute
            if (count===0) {
             fill += "<div class='itemstyle'><button id='remove' onClick='remove("+ i +")'>Remove Item</button> | Quantity: " + masterSplit[i];//quantity 
            }//adds remove function listener to grab first index of the item
            if (count===1) {
              fill += " - Size: " + masterSplit[i];//size
            }
            if (count===2) {
              fill += " - Name: " +masterSplit[i];//proudctname
            }
            if (count===3) {
              fill += " - Price: $" + masterSplit[i]+" ";//price
              //getTotal();
            }
            if (count===4) {
              fill += " - Color: " + masterSplit[i]+" ";//color
              //getTotal();
            }
            if (count===5) {
              fill += " - Customization: " + masterSplit[i]+"</div>";//custom
              //getTotal();
            }
            

            //fill += "</div>";
            count++;
          }
          fill += "<a href='checkout.php'><img src='checkoutbutton.png' width='200px'></a>";
        }
        else {
         fill = "You have nothing in your cart. Please buy our products to proceed to checkout."; 
        }
        document.getElementById('cartlist').innerHTML = fill;
      }
      //document.getElementById('cartlist').innerHTML = fill;
      //retrieves index of current item, removes the 6 attr.
      function remove(index) {
       var masterArray = localStorage.cart;
        var masterSplit = masterArray.split(',');
       masterSplit.splice(index, 6); //removal
          localStorage.setItem("cart", masterSplit); 
        loadCart();//rebuild cart
      }
      loadCart();
      
    </script>
    
        
  </body>
</html>