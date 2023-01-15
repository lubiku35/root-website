<?php
session_start();

$username = $_SESSION["s_username"];
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

    <section id="new-user">
        <h2>Account succesfully created for user <?php $username ?></h2>
    </section>

    <script src="./scripts/on_scroll_nav.js"></script>
</body>

</html>