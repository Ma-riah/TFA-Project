<?php
session_start();
include('config.php');
if (isset($_POST['orders']))
{
	$Order_Number = $_POST['Order_Number'];  
    $Products = $_POST['Products'];
    $Date = $_POST['Date'];
    $query = $connection->prepare("SELECT * FROM `orders` WHERE Order_Number=:Order_Number");
    $query->bindParam("Order_Number", $Order_Number, PDO::PARAM_STR);
    $query->execute();

	if ($query->rowCount() == 0)
	{
		$query = $connection->prepare("INSERT INTO orders(Order_Number, Products, Date) VALUES (:Order_Number, :Products, :Date,)");
        $query->bindParam("Order_Number", $Order_Number, PDO::PARAM_STR); 
        $query->bindParam("Products", $Products, PDO::PARAM_STR);       
        $query->bindParam("Total_Amount", $Total_Amount, PDO::PARAM_STR);
        $query->bindParam("Date", $Date, PDO::PARAM_STR);
        $result = $query->execute();
		if ($result)
		{
			echo '<p class="success">Order successful!</p>';
        } 
		else
		{
			echo '<p class="Unsuccessful Order</p>';
        }
    }
}
?>
<!DOCTYPE html>
<html>  
<head>  
<title>My Order</title>    
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>  
<body>
<section class="form-container">
        <?php
        if(isset($message)){
            foreach($message as $message){
                echo '
                    <div class="message">
                        <span>'.$message.'</span>
                        <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
                    </div>
                ';
            }
        }
        ?>
        <form action= 'ConfirmOrder.php' method='post' >
            <h1>My Order:</h1>
            <br>
            <label for="Order_Number">Order Number:</label>

            <br>
            <label for="Products">Products:</label> 

            <br>          
            <label for="Date">Date & Time:</label> 
            <br>
            <?php
            echo date("d/m/Y");
            ?>
            <br>
            <?php
            echo  date("h:i");
            ?>
            <br>
            <h1>Delivery or pick-up? :</h1>
    <br>
                        <select>
                        <option>Delivery<option>
                        <option>Pick-up order<option>				
	                    </select>   
                        <br>             
    <br>
            <button><a href ="payment.php">Proceed to Checkout?</a></button>
            <button><a href = "recipes.php">View Recipes?</a></button>
            <button><a href = "promotions.php">View Promotions?</a></button>
            <button><a href = "home.php">Go back to home?</a></button>
                <br>
        </form>
    </section>
    <script src ="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>     
</html>


