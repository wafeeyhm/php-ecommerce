<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>
<main>
    <section class="register">
        <h2>Create an Account</h2>
        <form action="login.html" method="POST">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>