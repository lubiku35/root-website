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
        <h2>login</h2>
        <form action="" method="post" id="login-form">
            <div class="login-form-input-wrapper">
                <div class="form-input-row">
                    <label for="username">username / email:</label>
                    <p class="required-form-input">*</p>
                </div>
                <input type="text" name="username">
                <p id="login-username-server-error-message">CLIENT MESSAGE!</p>
                <p id="login-username-client-error-message">SERVER MESSAGE!</p>
            </div>
            <div class="login-form-input-wrapper">
                <div class="form-input-row">
                    <label for="password">password</label>
                    <p class="required-form-input">*</p>
                </div>
                <input type="text" name="password">
                <p id="login-password-server-error-message">CLIENT MESSAGE!</p>
                <p id="login-password-client-error-message">SERVER MESSAGE!</p>
            </div>
            <button type="submit">submit</button>
        </form>
        <h6 id="dont-have-acc">don't have an account ? <a href="./register.php">register here</a></h6>
    </main>

</body>

</html>