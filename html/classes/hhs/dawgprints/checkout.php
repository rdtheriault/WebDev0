<html>
  <head>
    <link href="favicon.ico" rel="icon">
    <title>Checkout</title>
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
      #main {
        background-color: #e3bfff;
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
      <div id="infoC">
        <div id='cartlist'></div>
        <div id='personal'>

            First Name: <input type="text" id="firstname"><br>
            Last Name: <input type="text" id="lastname"><br>
            Email: <input type="text" id="email"><br>
            Phone Number: <input type="text" id="phone"><br><br>
            <img src='pics/complete.svg' id='checkout'>

        </div>
      </div>
      <div class='spacer'></div>
<div id="footer">
  <img id="footer_s" src="pics/footer_statement.png">
      </div>
    </div>
          <script src="scripts.js"></script>
     

    
    <script>
      
      
      
      function loadCart() {
          var masterArray = localStorage.cart;
          var fill = "";
          var count = 0;
          var masterSplit = masterArray.split(',');
          var totalPrice = 0;
        if(masterSplit.length > 1) {

          for(var i = 0; i < masterSplit.length; i++) {
            //fill += "<div class='cartstyle'>";
            if (count===6) { 
              count = 0;
              //fill += " | <button id='remove' onClick='remove("+ i +")'>Remove Item</button></div>";
            }//reset

            if (count===0) {
             fill += "<div class='itemstyle'><button id='remove' onClick='remove("+ i +")'>Remove Item</button> | Quantity: " + masterSplit[i];//quantity 
            }
            if (count===1) {
              fill += " - Size: " + masterSplit[i];//size
            }
            if (count===2) {
              fill += " - Name: " +masterSplit[i];//proudctname
            }
            if (count===3) {
              fill += " - Price: $" + masterSplit[i]+"";//price
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
        }
        else {
          window.location.replace('shop.php');
        }
        document.getElementById('cartlist').innerHTML = fill;
      }
      
      //document.getElementById('cartlist').innerHTML = fill;
      function remove(index) {
       var masterArray = localStorage.cart;
        var masterSplit = masterArray.split(',');
       masterSplit.splice(index, 6); 
          localStorage.setItem("cart", masterSplit); 
        loadCart();
      }
      loadCart();
      
      document.getElementById('checkout').addEventListener ("click", checkout);
      function checkout() {
        var FN = document.getElementById('firstname').value;
        var LN = document.getElementById('lastname').value;
        var EM = document.getElementById('email').value;
        var PN = document.getElementById('phone').value;
        var cart = localStorage.cart;
        
        var params = 'fn='+FN+'&ln='+LN+'&em='+EM+'&pn='+PN+'&cart='+cart;
        var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function()  {
				  if (this.readyState == 4 && this.status == 200) {
				    document.getElementById('infoC').innerHTML = xmlhttp.responseText;
				  }
				};
				//xmlhttp.open("GET", "http://10.80.46.40/sense.json?nocache=" + (new Date()).getTime(), true);
				//xmlhttp.open("GET", json + (new Date()).getTime(), true);
				xmlhttp.open("POST", "email.php", true);
        		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send(params);
      }
    </script>
    
        
  </body>
</html>