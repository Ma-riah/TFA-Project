<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8">
    <title>Website</title> 
    <!--custom css link-->
    <link href = "style.css" rel = "stylesheet" >
<!--<script src ="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>-->
</head>
<body >
<!--payment section starts-->
<section class=" payment" id="payment">
        <div class = "container">
            <form action="">
            <div class="row">
                <div class="col">           
                    <h1 class="title">HOME ADDRESS</h1>
                    <div class="inputBox">
                        <label>FULL NAME :</label>
                        <input type="text" placeholder="Keira-Anne Smith" required/>
                    </div>
                    <div class="inputBox">
                        <label>EMAIL :</label>
                        <input type="email" placeholder="example@gmail.com" required/>
                    </div>
                    <div class="inputBox">
                        <label>PHONE NUMBER :</label>
                        <input type="number" maxlength="10" placeholder="+27" required/>
                    </div>
                    <div class="inputBox">
                        <label>ALTERNATIVE PHONE NUMBER :</label>
                        <input type="number" maxlength="10" placeholder="+27"/>
                    </div>
                    <div class="inputBox">
                        <label>ADDRESS LINE 1 :</label>
                        <input type="text" placeholder="room--street" required/>
                    </div>
                    <div class="inputBox">
                        <label>ADDRESS LINE 2 :</label>
                        <input type="text" placeholder="room--street" required/>
                    </div>
                    <div class="inputBox">
                        <label>CITY/TOWN :</label>
                        <input type="text" placeholder="johannesburg" required/>
                    </div>
                    <div class="inputBox">
                        <LABEL>PROVINCE :</label>
                        <select>
                        <option>KwaZulu-Natal<option>
                        <option>Mpumalanga<option>
                        <option>Eastern Cape<option>
                        <option>Gauteng<option>
                        <option>North West<option>				
	                    </select>
                    </div>
                        <div class="inputBox">
                            <label>POSTAL CODE :</label>
                            <input type="text" maxlength="4" placeholder="2079" required/>
                        </div>     
                    <h1 class="title">PAYMENT METHOD</h1>    
                    <div class="inputBox">
                        <label>NAME ON CARD :</label>
                        <input type="text" placeholder="Miss.K Smith" required/>
                    </div>
                    <div class="inputBox">
                        <label>CARD NUMBER:</label>
                        <input type="number" maxlength="16" placeholder="1234-5678-9123-4567" required/>
                    </div>
                    <div class="inputBox">
                        <label>EXP MONTH :</label>
                        <input type="text" placeholder="February" required/>
                    </div>
                    <div class="inputBox">
                        <label>EXP YEAR :</label>
                        <input type="text" maxlength="2" placeholder="26" required/>
                    </div>
                    <div class= "flex">
                            <div class="inputBox">
                            <label>CVV :</label>
                            <input type="number" maxlength="3" placeholder="123" required/>
                        </div>
</div>
                    </div>   
                    <br>
                    <button type = "submit" name = "thankyou" class= "submit-btn"><a href = "thankyou.php">Proceed</a></button>               
            </form>
    </section>
<!--payment section ends-->
