<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/dark-mode/main.css" type="text/css">


    <title>L U B I K U</title>
</head>

<body>
    <?php
    include_once("./header.php")
        ?>

    <section id="login">
        <h2>log in</h2>
        <form action="" method="post" id="log-form">
            <label for="username"></label>
            <input type="text" name="username" placeholder="USERNAME / EMAIL" value="" id="log-username">

            <label for="password"></label>
            <input type="password" name="password" placeholder="PASSWORD" id="log-password">

            <p class="reg-client-error-message" id="client-error-login"></p>
            <?php

            ?>

            <button type="submit">log in</button>
        </form>
        <p id="dont-have-an-acc">don't have an account ? <a href="./register.php" class="underline-effect">register
                here</a></p>
    </section>

    <script src="./scripts/login.js"></script>
</body>

</html>