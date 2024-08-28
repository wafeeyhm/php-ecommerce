<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>
<main>
    <section class="contact">
        <h2>We'd love to hear from you!</h2>
        <form action="#" method="post">
            <div>
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="6" required></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message</button>
            </div>
        </form>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>