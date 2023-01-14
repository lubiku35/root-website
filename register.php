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

    <section id="register">
        <h2>create an account</h2>
        <form action="" id="reg-form">
            <label for="name" class="red-enchanted"><span class="tooltip-msg">Required field please fill in</span><span
                    class="tooltip">?</span></label>
            <input type="text" placeholder="NAME" name="name" id="reg-name">

            <label for="username" class="red-enchanted"><span class="tooltip-msg">Required field please fill
                    in</span><span class="tooltip">?</span></label>
            <input type="text" placeholder="USERNAME" name="username" id="reg-username">
            <label for="email" class="red-enchanted"><span class="tooltip-msg">Required field please fill in in valid
                    format</span><span class="tooltip">?</span></label>
            <input type="text" placeholder="EMAIL" name="email" id="reg-email">
            <label for="password" class="red-enchanted"><span class="tooltip-msg">Must contains at least 1 uppercse, 1
                    lowercase, 1 special
                    character</span><span class="tooltip">?</span></label>
            <input type="password" placeholder="PASSWORD" name="password" id="reg-password">
            <label for="password-repeat" class="red-enchanted"><span class="tooltip-msg">Passwords must match and be at
                    least 8 characters long</span><span class="tooltip">?</span></label>
            <input type="password" placeholder="REPEAT PASSWORD" name="password-repeat" id="reg-password-repeat">
            <div class="conditions-row-field">
                <input type="checkbox" name="conditions" value="agree" id="reg-conditions">
                <label for="conditions">i agree to terms and conditions</label>
            </div>
            <button type="submit">create account</button>
        </form>
        <p id="have-an-acc">already have an account ? <a href="./login.php" class="underline-effect">sign up here</a>
        </p>
    </section>

    <script src="./scripts/registration.js"></script>
</body>

</html>