<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>
<main>
    <section class="product-list">
        <h2>Available Products</h2>
        <div class="product-grid">
            <div class="product">
                <a href="product-detail.html">
                    <img src="images/product-image.jpg" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>$19.99</p>
                </a>
            </div>
            <div class="product">
                <a href="product-detail.html">
                    <img src="images/product-image.jpg" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>$29.99</p>
                </a>
            </div>
        </div>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>