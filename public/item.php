<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

$query = query("SELECT * FROM products WHERE id =" . escape_string($_GET['id']) ." ");

while ($row = fetch_array($query)):

?>
<main>
    <section class="product-detail">
        <img src='<?php echo $row['image_url'] ?>' alt='<?php echo $row['name']; ?>'>
        <div class="details">
            <h2><?php echo $row['name']; ?></h2>
            <p><?php echo "&#36;" . $row['price']; ?></p>
            <p><?php echo $row['description']; ?></p>
            <a href="cart.html" class="btn">Add to Cart</a>
        </div>
    </section>
</main>
<?php

endwhile;

include(TEMPLATE_FRONT .  DS . "footer.php");

?>