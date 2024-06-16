<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Website</title> 
    <!--custom css link-->
    <link href = "style.css" rel = "stylesheet" >
<!--<script src ="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>-->
</head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KC5GMG7XRV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KC5GMG7XRV');
</script>
<body >
<!--payment section starts-->
<section class=" payment" id="payment">
        <div class = "container">
            <form action="">
            <div class="row">
                <div class="col">           
                    <h1 class="title">HOME ADDRESS</h1>
                    <div class="inputBox">
                        <label>NAME :</label>
                        <input type="text" name= "name" id = "name" placeholder="Keira-Anne Smith" required/>
                        <small class="text-danger name" ></small>
                    </div>
                    <div class="inputBox">
                        <label>EMAIL :</label>
                        <input type="email" name="email" id = "email" placeholder="example@gmail.com" required/>
                        <small class="text-danger email" ></small>
                    </div>
                    <div class="inputBox">
                        <label>PHONE NUMBER :</label>
                        <input type="number" name="number" id = "number" maxlength="10" placeholder="+27" required/>
                        <small class="text-danger number" ></small>
                    </div>
                    <div class="inputBox">
                        <label>ALTERNATIVE PHONE NUMBER :</label>
                        <input type="altnumber" maxlength="10" placeholder="+27"/>
                    </div>
                    <div class="inputBox">
                        <label>ADDRESS LINE 1 :</label>
                        <input type="address" name="address" id = "address" placeholder="room--street" required/>
                        <small class="text-danger address" ></small>
                    </div>
                    <div class="inputBox">
                        <label>ADDRESS LINE 2 :</label>
                        <input type="text" placeholder="room--street" required/>
                    </div>
                    <div class="inputBox">
                        <label>CITY/TOWN :</label>
                        <input type="city" name="city" id = "city" placeholder="johannesburg" required/>
                        <small class="text-danger city" ></small>
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
                    <div id="paypal-button-container"></div>
                    <button type = "submit" name = "thankyou" class= "submit-btn"><a href = "thankyou.php">Proceed</a></button>  
    
                    <script
      src="https://www.paypal.com/sdk/js?client-id=AVEyrAHqT3WoYNSuJ3SBvGcu5KK_REwkgnhdXZkU9UyEjRzRfARi7IPUFLWoS6H2eQVr-Qe4iZM1UuMg&buyer-country=US&currency=USD&components=buttons&enable-funding=venmo"
    ></script>

    <script>

    window.paypal
    .Buttons({
        onClick(){

            var name = $('#name').val();
            var email = $('#email').val();
            var number = $('#number').val();
            var address = $('#address').val();
            var city = $('#city').val();

            if(name.length == 0)
            {
                $('.name').text("*This field is required");
            }else{
                $('.name').text("");
            }
            if(email.length == 0)
            {
                $('.email').text("*This field is required");  
            }else{
                $('.email').text("");
            }
            if(number.length == 0)
            {
                $('.number').text("*This field is required");              
            }else{
                $('.number').text("");
            }
            if(address.length == 0)
            {
                $('.address').text("*This field is required");              
            }else{
                $('.address').text("");
            }
            if(city.length == 0)
            {
                $('.city').text("*This field is required");              
            }else{
                $('.city').text("");
            }

            if(name.length == 0 || email.length == 0 || number.length == 0 || address.length == 0 || city.length == 0 )
            {
                return false;
            }
        },

    style: {
      shape: "rect",
      layout: "vertical",
      color: "gold",
      label: "paypal",
    } ,
    async createOrder() {
      try {
        const response = await fetch("/api/orders", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          // use the "body" param to optionally pass additional order information
          // like product ids and quantities
          body: JSON.stringify({
            cart: [
              {
                id: "YOUR_PRODUCT_ID",
                quantity: "<? $price ?>",
              },
            ],
          }),
        });

        const orderData = await response.json();

        if (orderData.id) {
          return orderData.id;
        }
        const errorDetail = orderData?.details?.[0];
        const errorMessage = errorDetail
          ? `${errorDetail.issue} ${errorDetail.description} (${orderData.debug_id})`
          : JSON.stringify(orderData);

        throw new Error(errorMessage);
      } catch (error) {
        console.error(error);
        // resultMessage(`Could not initiate PayPal Checkout...<br><br>${error}`);
      }
    } ,
    async onApprove(data, actions) {
      try {
        const response = await fetch(`/api/orders/${data.orderID}/capture`, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
        });
        const orderData = await response.json();
        // Three cases to handle:
        //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
        //   (2) Other non-recoverable errors -> Show a failure message
        //   (3) Successful transaction -> Show confirmation or thank you message

        const errorDetail = orderData?.details?.[0];

        if (errorDetail?.issue === "INSTRUMENT_DECLINED") {
          // (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
          // recoverable state, per
          // https://developer.paypal.com/docs/checkout/standard/customize/handle-funding-failures/
          return actions.restart();
        } else if (errorDetail) {
          // (2) Other non-recoverable errors -> Show a failure message
          throw new Error(`${errorDetail.description} (${orderData.debug_id})`);
        } else if (!orderData.purchase_units) {
          throw new Error(JSON.stringify(orderData));
        } else {
          // (3) Successful transaction -> Show confirmation or thank you message
          // Or go to another URL:  actions.redirect('thank_you.html');
          const transaction = orderData.purchase_units[0].payments.captures[0]; 
            /*orderData?.purchase_units?.[0]?.payments?.authorizations?.[0];*/
          /*resultMessage(
            alert`Transaction ${transaction.status}: ${transaction.id}<br>
          <br>See console for all available details`
          );*/
          /*console.log(
            "Capture result",
            orderData,
            JSON.stringify(orderData, null, 2)
          );*/
        }
      } catch (error) {
        console.error(error);
        resultMessage(
          `Sorry, your transaction could not be processed...<br><br>${error}`
        );
      }
    } ,
  })
  .render("#paypal-button-container"); 
  </script>
            </form>
    </section>
<!--payment section ends-->
</html>
