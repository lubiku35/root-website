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
        <form action="">
            <label for="name" class="red-enchanted">*</label>
            <input type="text" placeholder="NAME" name="name">
            <label for="username" class="red-enchanted">*</label>
            <input type="text" placeholder="USERNAME" name="username">
            <label for="email" class="red-enchanted">*</label>
            <input type="text" placeholder="EMAIL" name="email">
            <label for="password" class="red-enchanted">*</label>
            <input type="password" placeholder="PASSWORD" name="password">
            <label for="password-repeat" class="red-enchanted">*</label>
            <input type="password" placeholder="REPEAT PASSWORD" name="password-repeat">
            <div class="conditions-row-field">
                <input type="checkbox" placeholder="REPEAT PASSWORD" name="password-repeat">
                <label for="conditions">i agree to terms and conditions</label>
            </div>
            <button type="submit">create account</button>
        </form>
        <p id="have-an-acc">already have an account ? <a href="./login.php" class="underline-effect">sign up here</a>
        </p>
    </section>
</body>

</html>