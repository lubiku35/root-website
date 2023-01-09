<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Cascading Style Sheets -->
    <link rel='stylesheet' href='./main.css'>

    <title>JOIN METANOIA | BLOG BY LUIBKU</title>
</head>

<body>
    <!--===== MAIN HEADING SECTION =====-->
    <?php
    include_once "./sections/header/header.php"
        ?>

    <!--===== LANDING PAGE SECTION =====-->
    <main id='blog-join-landing' class='join-blog-container'>
        <h1>LOGIN</h1>

        <form action="./includes/login.inc.php" method="post">
            <label for="username">
                <p>USERNAME / EMAIL:</p>
                <input type="text" name="username" placeholder="username">
            </label>
            <label for="pwd">
                <p>PASSWORD:</p>
                <input type="password" name="pwd" id="pwd" placeholder="password">
            </label>
            <button type="submit" name="submit" class='btn-join'>LOG IN</button>
        </form>

        <!--===== SERVER ERROR HANDLERS SECTION =====-->
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='server-error-msg'>Please fill in all fields!</p>";
            } elseif ($_GET["error"] == "wronglogin") {
                echo "<p class='server-error-msg'>Incorrect login!</p>";
            }
        }
        ?>

        <p class='join-footer-text'>Don't have an account? then please <a href="./blog-new-account.php">register
                here</a>.</p>
    </main>

    <!--===== FOOTER SECTION =====-->
    <?php
    include_once './sections/footer/footer.php'
        ?>

    <script src="./scripts/theme-changer.js"></script>
</body>

</html>