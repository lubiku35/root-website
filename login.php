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

    <?php

    ?>

    <main id="login-container">
        <h2 class="section-title">login</h2>

        <form action="" method="post" id="login-form">

            <div class="login-form-input-wrapper">

                <div class="form-input-row">
                    <label for="username">username / email:</label>
                    <p class="required-form-input">*</p>
                </div>

                <input type="text" name="username">

                <?php
                // echo "<p id='login-server-error-message'>SERVER MESSAGE!</p>"
                ?>

                <p id="login-client-error-message"></p>

            </div>

            <div class="login-form-input-wrapper">

                <div class="form-input-row">
                    <label for="password">password</label>
                    <p class="required-form-input">*</p>
                </div>

                <input type="text" name="password">

                <?php
                // echo "<p id='login-server-error-message'>SERVER MESSAGE!</p>"
                ?>

                <p id="login-client-error-message"></p>

            </div>
            <div class="login-form-button-wrapper">
                <button type="submit">log in</button>
            </div>
        </form>
        <p id="dont-have-acc">don't have an account ? <a href="./register.php" class="underline-effect">register
                here</a></p>
    </main>

</body>

</html>