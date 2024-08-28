<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>
<main>
    <section class="cart">
        <h2>Items in Your Cart</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product 1</td>
                    <td>1</td>
                    <td>$19.99</td>
                    <td>$19.99</td>
                </tr>
                <tr>
                    <td>Product 2</td>
                    <td>2</td>
                    <td>$29.99</td>
                    <td>$59.98</td>
                </tr>
            </tbody>
        </table>
        <div class="checkout">
            <p>Subtotal: $79.97</p>
            <a href="checkout.html" class="btn">Proceed to Checkout</a>
        </div>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>