<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Cascading Style Sheets -->
    <link rel='stylesheet' href='./main.css'>

    <title>REGISTER TO METANOIA | BLOG BY LUIBKU</title>
</head>

<body>
    <!--===== MAIN HEADING SECTION =====-->
    <?php
    include_once "./sections/header/header.php"
        ?>

    <!--===== LANDING PAGE SECTION =====-->
    <main id='blog-register-landing' class='join-blog-container'>
        <h1>REGISTER</h1>

        <form action="./includes/register.inc.php" method="post">
            <label for="name">
                <p>name:</p>
                <input type="text" name="name" placeholder="name">
            </label>
            <label for="username">
                <p>username:</p>
                <input type="text" name="username" placeholder="username">
            </label>
            <label for="email">
                <p>email:</p>
                <input type="text" name="email" placeholder="email">
            </label>
            <label for="pwd">
                <p>password:</p>
                <input type="password" name="pwd" id="password" placeholder="password">
            </label>
            <label for="pwdrepeat">
                <p>repeat password:</p>
                <input type="password" name="pwdrepeat" id="password" placeholder="repeat password">
            </label>
            <button type="submit" name="submit" class='btn-join'>REGISTER</button>
        </form>

        <!--===== SERVER ERROR HANDLERS SECTION =====-->
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='server-error-msg'>Please fill in all fields!</p>";
            } elseif ($_GET["error"] == "invaliduid") {
                echo "<p class='server-error-msg'>Please check your username, it contains not valid characters!</p>";
            } elseif ($_GET["error"] == "invalidemail") {
                echo "<p class='server-error-msg'>Please check your email, this email seems to be not valid!</p>";
            } elseif ($_GET["error"] == "pwdnotrighttoconditions") {
                echo "<p class='server-error-msg'>Your password is not valid, password must contains at least one special character, one lowerace letter, one uppercase letter and must be at least 8 characters long!</p>";
            } elseif ($_GET["error"] == "notmachtingpwds") {
                echo "<p class='server-error-msg'>Passwords are not matching!</p>";
            } elseif ($_GET["error"] == "takenusername") {
                echo "<p class='server-error-msg'>This username or email has been taken!</p>";
            } elseif ($_GET["error"] == "stmtfailed") {
                echo "<p class='server-error-msg'>Ooops, something went wrong, plese try it again!</p>";
            } elseif ($_GET["error"] == "none") {
                echo "<p class='server-right-msg'>You have been signed up!</p>";
            }
        }
        ?>

        <p class='join-footer-text'>Already have an account? <a href="./blog-join.php">login here</a>.</p>
    </main>

    <!--===== FOOTER SECTION =====-->
    <?php
    include_once './sections/footer/footer.php'
        ?>

    <script src="./scripts/theme-changer.js"></script>
</body>

</html>