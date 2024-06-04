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
            <h1>CUSTOM CAKE ORDER:</h1>
            <br>
            <label>CELEBRATION TYPE:</label>
            <br>
                        <select>
                        <option>Birthday<option>
                        <option>Wedding<option>	
                        <option>Other<option>		
	                    </select> 
            <br> 
            <label>IF OTHER SELECTED, SPECIFY HERE: </label>
            <br>
            <input type = "text" placeholder = "..." name = "" required/> 
            <br>
            <label>SELECT CAKE SHAPE:</label>
            <br>
                        <select>
                        <option>Heart<option>
                        <option>Circle<option>	
                        <option>Square<option>	
                        <option>Rectangle<option>	
	                    </select>
            <br>
            <label>CAKE FLAVOUR:</label>
            <br>
                        <select>
                        <option>Vanilla<option>
                        <option>Chocolate<option>	
                        <option>Red Velvet<option>
                        <option>Carrot<option>
                        <option>Lemon Poppyseed<option> 
                        </select>  	
            <br>
            <label>ICING:</label>
            <br>
                        <select>
                        <option>Icing Sugar<option>
                        <option>Cream Cheese<option>	
                        <option>Fresh Cream<option>		
	                    </select> 
            <br>
            <label>COLOUR:</label>
            <br>
                        <input type="color" name="colorPicker" value=""/>
            <br>	
	        <label>SERVINGS:</label>
            <br>
            <input type = "text" placeholder = "..." name = "" required/>       
            <br>
            <label>DELIVERY OR PICK-UP? :</label>
    <br>
                        <select>
                        <option>Delivery<option>
                        <option>Pick-up order<option>				
	                    </select>   
                        <br>               
    <br>
            <button><a href ="payment.php">PROCEED</a></button>
                <br>
        </form>  
    </section>
    <script src ="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>     
</html>
