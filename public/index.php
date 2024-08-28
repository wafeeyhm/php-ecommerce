<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>

<main>
    <section class="hero">
        <h2>Discover Our Latest Products</h2>
        <a href="products.html" class="btn">Shop Now</a>
    </section>

    <section class="featured-products">
        <h2>Featured Products</h2>
        <!-- product grid -->
        <div class="product-grid">
            <?php get_products(); ?>
            <div class="product">
                <img src="images/product-image.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <a href="product-detail.html" class="btn">View Details</a>
            </div>
        </div>
        <!-- product grid -->
    </section>
</main>

<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>