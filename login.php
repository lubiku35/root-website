<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/main.css">

    <title>L U B I K U</title>
</head>

<body>
    <?php
    include_once("./header.php")
        ?>

    <section id="login">
        <h2>sign in</h2>
        <form action="" method="post">
            <label for="username"></label>
            <input type="text" name="username" value="" placeholder="USERNAME / EMAIL">

            <label for="password"></label>
            <input type="password" name="password" placeholder="PASSWORD">

            <?php

            ?>

            <button type="submit">sign in</button>
        </form>
        <p id="dont-have-an-acc">don't have an account ? <a href="./register.php" class="underline-effect">register
                here</a></p>
    </section>
</body>

</html>