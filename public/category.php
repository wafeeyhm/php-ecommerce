<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>
<main>
    <section class="category">
        <h2>[Category Name]</h2>
        <div class="product-grid">
            <!-- Example Product Item -->
            <div class="product">
                <img src="img/product1.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$10.00</p>
                <a href="product-detail.html" class="btn">View Details</a>
            </div>
            <div class="product">
                <img src="img/product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$15.00</p>
                <a href="product-detail.html" class="btn">View Details</a>
            </div>
            <!-- Add more products as needed -->
        </div>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>
