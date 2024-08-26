<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home | E-Commerce</title>
</head>
<body>
<header>
    <h1>Welcome to Our E-Commerce Store</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="category.php">Categories</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="checkout.php">Checkout</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
</header>
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
<footer>
    <p>&copy; 2024 E-Commerce Store</p>
</footer>
</body>
</html>
