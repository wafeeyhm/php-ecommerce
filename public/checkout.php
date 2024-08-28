<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>
<main>
    <section class="checkout">
        <h2>Billing & Shipping Information</h2>
        <form action="order-confirmation.html" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div>
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div>
                <label for="zipcode">Zip Code:</label>
                <input type="text" id="zipcode" name="zipcode" required>
            </div>
            <div>
                <label for="card">Credit Card:</label>
                <input type="text" id="card" name="card" required>
            </div>
            <button type="submit" class="btn">Place Order</button>
        </form>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>