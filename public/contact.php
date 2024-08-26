<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us | E-Commerce</title>
</head>
<body>
<header>
    <h1>Contact Us</h1>
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
        <h2>Get in Touch</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>
</main>
<footer>
    <p>&copy; 2024 E-Commerce Store</p>
</footer>
</body>
</html>
