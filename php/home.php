<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">  
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bakery Website</title>    
    <!--link to CSS-->
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    <!--link to box icons-->
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>  
<body> 
<!--navbar-->
    <header>
        <a href="#" class="logo">
           <img src="img/logo.png" alt="">
        </a>
    <!--menu icon-->
    <i class='bx bx-menu' id="menu-icon"></i>
    <!--links-->
    <ul class="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <!--<li><a href="Customize.php">Customize Order</a></li>-->
        <li><a href="recipes.php">Recipes</a></li>
        <li><a href="promotions.php">Promotions</a></li>
    </ul>
    <!--search box-->
    <div class="search-box">
        <input type="search" name="" id="" placeholder="Search here...">
    </div>
    </header>
    <!--Home-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Enjoy celebrations with <br>our freshly baked goods</h1>
            <p>Welcome To Makwande Bakery, Where We Make Your Every Bite A Delight! Makwande Bakery Is The BEST Bakery In Town As We Use The Freshest Ingredients To Bake Our Goods That Excite Your Tastebuds!</p>
            <a href="products.php" class="btn">Order Now</a>
        </div>
        <div class="home-img">
            <img scr="img/home3.jpg" alt="">
        </div>
    </section>