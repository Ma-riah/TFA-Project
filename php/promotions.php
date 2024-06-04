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
        <button type="button" class="btn-buy"><a href = "home.php">Skip?</a></button>
        <!--Cart Close-->
        <i class="bx bx-x" id="close-cart"></i>
    </div>
    </div>
    </header>
    <!--shop-->
    <section class="shop-container">
        <!--Content-->
        <div class="shop-content">
        <h2>SPECIALS THIS WEEK!<br> HURRY AND MAKE YOUR PURCHASE!</h2>
        <!--Box 1-->
        <div class="product-box">
        <img src="img/recipe1.jpg" alt="" class="product-img">
        <h2 class="product-title">Chocolate Cake Slice</h2>
        <span class="price">R40.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
     </div>
     <!--Box 2-->
     <div class="product-box">
        <img src="img/recipe6.jpg" alt="" class="product-img">
        <h2 class="product-title">6 Chocolate Cupcakes</h2>
        <span class="price">R20.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
     </div>
        <!--Box 3-->
        <div class="product-box">
        <img src="img/product1.png" alt="" class="product-img">
        <h2 class="product-title">Choc & Vanilla Cake Loaf</h2>
        <span class="price">R70</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
        <!--Box 4-->
        <div class="product-box">
        <img src="img/coffee.jpg" alt="" class="product-img">
        <h2 class="product-title">Freshly Brewed Coffee</h2>
        <span class="price">R9.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
         <!--Box 5-->
         <div class="product-box">
        <img src="img/vanilla chai latte.jpg" alt="" class="product-img">
        <h2 class="product-title">Vanilla Chai Latte</h2>
        <span class="price">R9.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
         <!--Box 6-->
         <div class="product-box">
        <img src="img/hot chocolate.jpg" alt="" class="product-img">
        <h2 class="product-title">Hot Chocolate With Chocolate Shavings</h2>
        <span class="price">R9.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
    </div>
</section>
<!--Link to JS-->
<script src="main.js"></script>
</body>
</html>
  