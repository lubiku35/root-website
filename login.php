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
        <h2>LOGIN</h2>
        <form action="" method="post">
            <label for="">username</label>
            <input type="text">

            <label for=""></label>
            <input type="password">

            <button type="submit">login</button>
        </form>
    </section>
</body>

</html>