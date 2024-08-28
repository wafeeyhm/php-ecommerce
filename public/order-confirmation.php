<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>
<main>
    <section class="order-confirmation">
        <h2>Thank You for Your Order!</h2>
        <p>Your order has been successfully placed. We will send you an email confirmation shortly.</p>
        <p><a href="index.html" class="btn">Continue Shopping</a></p>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>