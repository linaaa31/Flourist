<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>
<body>
<?php
include('header.php');
?>
<main>
        <div class="single-div">
            <div class="single-div-half"><img src="images/location.jpg"></div>
            <div class="single-div-half">
            <div class="single-content">
            <form id="orderForm" action="order_confirmation.php" method="POST">
                <h2 class="h2-text">Name:</h2>
                <div class="order-item">
                <input type="text" id="firstName" name="firstName" required>
                </div>
                <h2 class="h2-text">Last Name:</h2>
                <div class="order-item">
                <input type="text" id="lastName" name="lastName" required>
                </div>
                <h2 class="h2-text">Phone:</h2>
                <div class="order-item">
                <input type="tel" id="phone" name="phone" required>
                </div>
                <h2 class="h2-text">Address:</h2>
                <div class="order-item">
                <input type="text" id="address" name="address" required></div>
                <h2 class="h2-text">Payment Method:</h2>
                <label class="address-text">
                    <input class="single-item" type="radio" id="cash"  name="paymentMethod" value="cash" required> Cash</label>
                <br>
                    <label class="address-text">
                    <input class="single-item" type="radio"  id="card" name="paymentMethod" value="card" required> Card
                </label>
                <div id = "cardDetails"  class="order-item" style="display:none; margin-top:10px;">
                <h2 class="h2-text" for="cardNumber">Card Number:</h2>
                <input type="text" id="cardNumber" name="cardNumber" required>
                </div>
                <br>
                <button  class="single-button" id="order">Order</button>
</form>
                </main>
                <script>
    document.querySelectorAll('input[name="paymentMethod"]').forEach((elem)=> {
        elem.addEventListener("change",function(event){
            const cardDetails = document.getElementById("cardDetails")
            if(event.target.value==="card"){
                cardDetails.style.display = "block";
                document.getElementById("cardNumber").required = true
            }else{
                cardDetails.style.display = "none";
                document.getElementById("cardNumber").required = false;
            }
        })
    })
  document.getElementById("orderForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Order registered");
        });
</script>
   <?php
include('footer.php');
?>

</body>
</html>