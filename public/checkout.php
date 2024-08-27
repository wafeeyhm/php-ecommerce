<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>
<main>
    <section>
        <h2>Order Summary</h2>
        <p>Your items will be listed here.</p>
        <button class="btn">Proceed to Payment</button>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>