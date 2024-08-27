<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>

<main>
    <section>
        <h2>Featured Products</h2>
        <div class="products">
            <div class="product-card">
                <img src="img/sample-product.jpg" alt="Product">
                <h3>Sample Product</h3>
                <p>$19.99</p>
                <a href="products.php" class="btn">View Product</a>
            </div>
            <!-- Add more products as needed -->
        </div>
    </section>
</main>

<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>