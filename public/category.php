<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>
<main>
    <section>
        <h2>Product Categories</h2>
        <ul>
            <li><a href="products.php?category=electronics">Electronics</a></li>
            <li><a href="products.php?category=clothing">Clothing</a></li>
            <li><a href="products.php?category=home-garden">Home & Garden</a></li>
            <!-- Add more categories as needed -->
        </ul>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>
