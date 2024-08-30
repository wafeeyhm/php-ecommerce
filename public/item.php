<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

$query = query("SELECT * FROM products WHERE id =" . escape_string($_GET['id']) ." ");

while ($row = fetch_array($query)){

    echo $row['name'];

}

?>
<main>
    <section class="product-detail">
        <img src="images/product-image.jpg" alt="Product 1">
        <div class="details">
            <h2>Product 1</h2>
            <p>$19.99</p>
            <p>Description of the product goes here. It should include details about the product, its features, and any other relevant information.</p>
            <a href="cart.html" class="btn">Add to Cart</a>
        </div>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>