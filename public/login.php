<?php 

require_once("../resources/config.php"); 

include(TEMPLATE_FRONT .  DS . "header.php");

?>
<main>
    <section class="login">
        <h2>Login to Your Account</h2>
        <form action="index.html" method="POST">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </section>
</main>
<?php

include(TEMPLATE_FRONT .  DS . "footer.php");

?>