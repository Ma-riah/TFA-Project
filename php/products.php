<!DOCTYPE html>
<html lang="en">  
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Website</title>    
    <!--link to CSS-->
    <link rel = "stylesheet" type = "text/css" href = "cartStyle.css">
    <!--link to box icons-->
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>  
<body> 
<!--header-->
    <header>
        <div class="nav container">      
        <a href="#" class="logo">Makwande Bakery</a>
         <!--Cart Icon-->
         <i class='bx bx-shopping-bag' id="cart-icon"></i> 
         <a href="Customize.php">Customize Order?</a>  
         <a href="home.php">Back To Home?</a>  
         <!--Cart--> 
        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
            <!--Content-->
            <div class="cart-content">
            </div>
            <!--Total-->
            <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">R0</div>
        </div>
        <!--Buy Button-->
        <button type="button" class="btn-buy"><a href = "ConfirmOrder.php">Buy Now</a></button>
        <br>
        <!--Cart Close-->
        <i class="bx bx-x" id="close-cart"></i>
    </div>
    </div>
    </header>
    <!--shop-->
    <section class="shop-container">
        <!--Content-->
        <div class="shop-content">
        <!--Box 1-->
        <div class="product-box">
        <img src="img/recipe1.jpg" alt="" class="product-img">
        <h2 class="product-title">Chocolate Cake Slice</h2>
        <span class="price">R74.99</span>
        <i class='bx bx-shopping-bag add-cart'></i>
     </div>
     <!--Box 2-->
     <div class="product-box">
        <img src="img/recipe2.jpg" alt="" class="product-img">
        <h2 class="product-title">Red Velvet Cake Slice</h2>
        <span class="price">R79.99</span>
        <i class='bx bx-shopping-bag add-cart'></i>
     </div>
     <!--Box 3-->
     <div class="product-box">
        <img src="img/recipe3.jpg" alt="" class="product-img">
        <h2 class="product-title">Carrot Cake Slice</h2>
        <span class="price">R78.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
     </div>
     <!--Box 4-->
     <div class="product-box">
        <img src="img/recipe6.jpg" alt="" class="product-img">
        <h2 class="product-title">6 Chocolate Cupcakes</h2>
        <span class="price">R49.99</span>
        <i class='bx bx-shopping-bag add-cart'></i>
     </div>
    <!--Box 5-->
        <div class="product-box">
        <img src="img/product7.png" alt="" class="product-img">
        <h2 class="product-title">Vanilla Cupcakes</h2>
        <span class="price">R49.99</span>
        <i class='bx bx-shopping-bag add-cart'></i>
     </div>
     <!--Box 6-->
     <div class="product-box">
     <img src="img/product3.png" alt="" class="product-img">
     <h2 class="product-title">18 Chocolate & Vanilla Muffins</h2>
     <span class="price">R103.50</span>
     <i class='bx bx-shopping-bag add-cart'></i>
    </div>
        <!--Box 7-->
        <div class="product-box">
        <img src="img/product4.png" alt="" class="product-img">
        <h2 class="product-title">Red Velvet & Choc Cake Slice</h2>
        <span class="price">R52.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
        <!--Box 8-->
        <div class="product-box">
        <img src="img/product1.png" alt="" class="product-img">
        <h2 class="product-title">Choc & Vanilla Cake Loaf</h2>
        <span class="price">R101.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
        <!--Box 9-->
        <div class="product-box">
        <img src="img/product10 (1).png" alt="" class="product-img">
        <h2 class="product-title">10 Scones</h2>
        <span class="price">R64.99</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
        <!--Box 10-->
        <div class="product-box">
        <img src="img/product5.png" alt="" class="product-img">
        <h2 class="product-title">Red Velvet Cake with Cream Cheese Frosting</h2>
        <span class="price">R280.99</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
        <!--Box 11-->
        <div class="product-box">
        <img src="img/product2.png" alt="" class="product-img">
        <h2 class="product-title">12 Vanilla Cupcakes</h2>
        <span class="price">R84.99</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
    </div>
</section>
<!--Link to JS-->
<script src="main.js"></script>
</body>
</html>
  