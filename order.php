<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <style>
    html, body {
      height: 100%; 
      width: 100%;
      margin: 0;
      font-family: 'Roboto', sans-serif;
    }
    .topnav { 
      width: 100%;
      height: 65px;
      background-color: rgba(0,0,0,0.4);
    font-family: Arial, Helvetica, sans-serif;
    position: -webkit-sticky;
      position: sticky;
      top: 0;
    }
    .topnav ul{
    text-align:left;
    padding : 0px 200px;
    padding-bottom:20px;
    padding-top:13px;
    }
    .topnav ul li{
    list-style:none;
    display: inline-block;
    }
    .topnav ul li a{
    display:block;
    text-decoration:none;
    color:#fff;
    text-transform:uppercase;
    padding: 8px 16px;
    font-size:15px;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 15px;
      display: flex;
    }
    .left-column {
      width: 75%;
      position: relative;
      padding-left:160px;
    }
    
    .right-column {
      width: 100%;
      margin-top: 60px;
      padding-right:200px;
    }
    .left-column img {
      width: 50%;
      height:60%;
      position: absolute;
      padding-left: 50px;
      top: 100px;
    }
    
    .left-column img.active {
      opacity: 1;
    }
    .product-description {
      border-bottom: 1px solid #E1E8EE;
      margin-bottom: 20px;
    }
    .product-description span {
      font-size: 12px;
      color: #358ED7;
      letter-spacing: 1px;
      text-transform: uppercase;
      text-decoration: none;
    }
    .product-description h1 {
      font-weight: 300;
      font-size: 52px;
      color: #43484D;
      letter-spacing: -2px;
      padding-right:200px;
    }
    .product-description p {
      font-size: 16px;
      font-weight: 300;
      color: #86939E;
      line-height: 24px;
      padding-right:200px;
    }

    .color-choose div {
      display: inline-block;
    }
    
    .color-choose input[type=&amp;quot;radio&amp;quot;] {
      display: none;
    }
    
    .color-choose input[type=&amp;quot;radio&amp;quot;] + label span {
      display: inline-block;
      width: 40px;
      height: 40px;
      margin: -1px 4px 0 0;
      vertical-align: middle;
      cursor: pointer;
      border-radius: 50%;
    }
    
    .color-choose input[type=&amp;quot;radio&amp;quot;] + label span {
      border: 2px solid #FFFFFF;
      box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
    }
    
    .color-choose input[type=&amp;quot;radio&amp;quot;]#red + label span {
      background-color: #C91524;
    }
    .color-choose input[type=&amp;quot;radio&amp;quot;]#blue + label span {
      background-color: #314780;
    }
    .color-choose input[type=&amp;quot;radio&amp;quot;]#black + label span {
      background-color: #323232;
    }
    
    .color-choose input[type=&amp;quot;radio&amp;quot;]:checked + label span {
      background-image: url(images/check-icn.svg);
      background-repeat: no-repeat;
      background-position: center;
    }
    .cable-choose {
      margin-bottom: 20px;
    }
    
    .cable-choose button {
      border: 2px solid #E1E8EE;
      border-radius: 6px;
      padding: 13px 20px;
      font-size: 14px;
      color: #5E6977;
      background-color: #fff;
      cursor: pointer;
      transition: all .5s;
    }
    
    .cable-choose button:hover,
    .cable-choose button:active,
    .cable-choose button:focus {
      border: 2px solid #86939E;
      outline: none;
    }
    
    .cable-config {
      border-bottom: 1px solid #E1E8EE;
      margin-bottom: 20px;
    }
    
    .cable-config a {
      color: #358ED7;
      text-decoration: none;
      font-size: 12px;
      position: relative;
      margin: 10px 0;
      display: inline-block;
    }
    .cable-config a:before {
      content: &amp;quot;?&amp;quot;;
      height: 15px;
      width: 15px;
      border-radius: 50%;
      border: 2px solid rgba(53, 142, 215, 0.5);
      display: inline-block;
      text-align: center;
      line-height: 16px;
      opacity: 0.5;
      margin-right: 5px;
    }
    .product-price {
      display: flex;
      align-items: center;
    }
    
    .product-price span {
      font-size: 26px;
      font-weight: 300;
      color: #43474D;
      margin-right: 200px;
    }
    
    .cart-btn {
      display: inline-block;
      background-color: #7DC855;
      border-radius: 6px;
      font-size: 16px;
      color: #FFFFFF;
      text-decoration: none;
      padding: 12px 30px;
      transition: all .5s;
    }
    .cart-btn:hover {
      background-color: #64af3d;
    }
    @media (max-width: 940px) {
      .container {
        flex-direction: column;
        margin-top: 60px;
      }
    
      .left-column,
    .right-column {
        width: 100%;
      }
    
      .left-column img {
        width: 300px;
        right: 0;
        top: -65px;
        left: initial;
        padding-left:200px;
      }
    }
    
    @media (max-width: 535px) {
      .left-column img {
        width: 220px;
        top: -85px;
      }
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      height:150px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }

    .price {
      color: grey;
      font-size: 22px;
    }

    .card button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    .card button:hover {
      opacity: 0.7;
    }
    table {
      width:13%;
      margin-top:40px;
      margin-right:50px;
      float:right;
      
    }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 15px;
      text-align: center;
    }
    #tab tr:nth-child(even) {
      background-color: #eee;
    }
    #tab tr:nth-child(odd) {
    background-color: #fff;
    }
    #tab th {
      background-color: black;
      color: white;
    }
    #tab a{
    text-decoration:none;
    color:black;
    }
    </style>
  </head>
  <body>
    <div class="topnav">
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="order.php">Online ordering</a></li>
        <li><a href="index.php#contacts">Contact us </a></li> &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;

        <li class="rightnav"><a href="#"><i class="fa fa-facebook" style="font-size:20px;align:right;"></i></a></li>
        <li class="rightnav"><a href="#"><i class ="fa fa-instagram" style="font-size:20px;align:right;"></i></a></li>
        <li class="rightnav"><a href="#"><i class ="fa fa-twitter" style="font-size:20px;align:right;"></i></a></li>
      </ul>
    </div>
    <table id="tab">
      <tr>
        <td><a href="#truffles">TRUFFLES</td>
      </tr>
      <tr>
        <td><a href="#desserts">DESSERTS</td>
      </tr>
    </table>
    <main class="container" id="truffles"> 
      <div class="left-column">
        <img src="images/a.jpg">
      </div> 
      <!-- Right Column -->
      <div class="right-column">
        <div class="product-description">
          <span>Truffles</span>
          <h4>Dark Chocolate Peanut Truffles</h4>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>
    
        <!-- Product Pricing -->
        <div class="product-price">
          <span>&#8377 100</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>     
      </div>
    </main>
    <main class="container"> 
      <div class="left-column">
        <img src="images/a.jpg" >
      </div> 
      <!-- Right Column -->
      <div class="right-column">
        <div class="product-description">
          <h4>Milk Chocolate Carmel Truffles</h4>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>
    
        <!-- Product Pricing -->
        <div class="product-price">
          <span>&#8377 148</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>     
      </div>
    </main>
    <main class="container"> 
      <div class="left-column">
        <img src="images/a.jpg">
      </div> 
      <!-- Right Column -->
      <div class="right-column">
        <div class="product-description">
          <h4>Dark Chocolate Raspberry Truffles</h4>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>
    
        <!-- Product Pricing -->
        <div class="product-price">
          <span>&#8377 150</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>     
      </div>
    </main>
    <main class="container"> 
      <div class="left-column">
        <img src="images/a.jpg">
      </div> 
      <!-- Right Column -->
      <div class="right-column">
        <div class="product-description">
          <h4>White Chocolate & Nuts Truffles</h4>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>
    
        <!-- Product Pricing -->
        <div class="product-price">
          <span>&#8377 200</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>     
      </div>
    </main>
    <main class="container" id="desserts"> 
      <div class="left-column">
        <img src="images/a.jpg">
      </div> 
      <!-- Right Column -->
      <div class="right-column">
        <div class="product-description">
          <span>Desserts</span>
          <h4>Banana Caramel Lake</h4>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>
    
        <!-- Product Pricing -->
        <div class="product-price">
          <span>&#8377 100</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>     
      </div>
    </main>
    <main class="container"> 
      <div class="left-column">
        <img src="images/a.jpg" >
      </div> 
      <!-- Right Column -->
      <div class="right-column">
        <div class="product-description">
          <h4>Cookies & Cream Mousse Strip</h4>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>
    
        <!-- Product Pricing -->
        <div class="product-price">
          <span>&#8377 148</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>     
      </div>
    </main>
    <main class="container"> 
      <div class="left-column">
        <img src="images/a.jpg">
      </div> 
      <!-- Right Column -->
      <div class="right-column">
        <div class="product-description">
          <h4>Black & White Heart</h4>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>
    
        <!-- Product Pricing -->
        <div class="product-price">
          <span>&#8377 150</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>     
      </div>
    </main>
    <main class="container"> 
      <div class="left-column">
        <img src="images/a.jpg">
      </div> 
      <!-- Right Column -->
      <div class="right-column">
        <div class="product-description">
          <h4>Golden Pistachio Chocolate Bar</h4>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>
    
        <!-- Product Pricing -->
        <div class="product-price">
          <span>&#8377 200</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>     
      </div>
    </main>
  </body>
</html>
