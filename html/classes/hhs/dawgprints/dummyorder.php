<html>
  <head>
    <style>
      body {
      color: lime;
      background-color: purple;
      }
      #spit {
      color: purple;
      background-color: lime;
      }
    </style>
    <script src='items.js'></script>
    <link rel="stylesheet" type="text/css" href="item.css">
  </head>
  <body>
    
    <div id='spit'>
    </div>
    <form>
      Quantity:
      <input type="text" id='quantity'><br>
      Type:
      <input type="text" id='type'><br>
      <select id='size'>
        <option value='small'>Small</option>
        <option value='medium'>Medium</option>
        <option value='small'>Large</option>
      </select>
      <input id='btn' type="submit" value='Add To Cart'>
    </form>
    <div id='items'>
    </div>
    
    
    
    
    <script>
      
      var itemEl = document.getElementById('items');
      var fill = "";
      var count = 0;
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
        fill += "<div class='datai'><br>" + product.productname + "<br>Total: $" + product.price + "</div><br>";
        fill += "<div class='styled-selecti blacki roundedi'>";
        
          fill += "<select class='sizei' id='size"+ count +"'>";
        for (var i = 0; i < product.size.length; i++) {
          fill += "<option value='" + product.size[i] + "'>" + product.size[i] + "</option>"; 
        }
        fill += "</select></div><br>";
        
        fill += "<div class='styled-selecti blacki roundedi'>";
        
        //fill += "Quantity:<input type='text' id='quant" + product.number + "'><br>";
        //fill += product.productname;
        //fill += "<br>";
        
        //fill += "<br>";
        
        
        fill += "<select class='quanti' id='quant"+ count +"'>";
        for (var i = 0; i < 10; i++) {
          fill += "<option value='" + i + "'>" + i + "</option>"; 
        }
        fill += "</select></div><br>";
 		fill += "<br>";
        fill += "<button id='addtocart"+ count +"' onClick='cart(" + count + ", " + product.number + ")'>Add To Cart</button>";
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
      
      createItem(hat);
      fill += "<br>";
      createItem(shirt);
      fill += "<br>";
      createItem(sweatshirt1);
      fill += "<br>";
      createItem(sweatshirt2);
      fill += "<br><br><br><br><br><br><br><br><br><br>";
      
      
      itemEl.innerHTML = fill;
      
      
      
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
      
      //for (var i=0; i < count; i++) {
       //var btnholder = "btn" + i; 
       //document.getElementById(btnholder).addEventListener('click', cart(e,));
      //}
      
      
      
      
      
      document.getElementById("btn").addEventListener('click', cart);
      function cart(purchase) {
        //purchase is item being added to cart, didn't want to over use the words item, product etc.
        //e.preventDefault();
        var product = item;
        product.quantity = document.getElementById("quantity").value;
        items.push(product);
        document.getElementById("spit").innerHTML = product.quantity;
  	} 
      
    </script>
   </body>
</html>