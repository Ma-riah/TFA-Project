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
    <!-- Google tag (gtag.js) -->
     <!--Integrating google analytics with web app using global site tag-->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KC5GMG7XRV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KC5GMG7XRV');
</script>
<body> 
<!--header-->
    <header>
        <div class="nav container">        
        <a href="#" class="logo">Makwande Bakery</a>
        <a href="ConfirmOrder.php">Skip?</a>
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
        <button type="button" class="btn-buy"><a href = "ConfirmOrder.php">Skip?</a></button>
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
        <img src="img/image (5).jpg" alt="" class="product-img">
        <h2 class="product-title">Assorted Box</h2>
        <span class="price">R120.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
        <!--Box 4-->
        <div class="product-box">
        <img src="img/image (14).jpg" alt="" class="product-img">
        <h2 class="product-title">20L of Cookies</h2>
        <span class="price">R279.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
     </div>
        <!--Box 5-->
        <div class="product-box">
        <img src="img/coffee.jpg" alt="" class="product-img">
        <h2 class="product-title">Freshly Brewed Coffee</h2>
        <span class="price">R9.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
         <!--Box 6-->
         <div class="product-box">
        <img src="img/vanilla chai latte.jpg" alt="" class="product-img">
        <h2 class="product-title">Vanilla Chai Latte</h2>
        <span class="price">R9.00</span>
        <i class='bx bx-shopping-bag add-cart'></i>
        </div>
         <!--Box 7-->
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
  