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


    <?php
    if (isset($_POST["submit"])) {
        // data get from form 
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
    }
    ?>

    <!--===== LANDING PAGE SECTION =====-->
    <main id='blog-register-landing' class='join-blog-container'>
        <h1>REGISTER</h1>

        <form action="./includes/register.inc.php" method="post" id="form">
            <label for="name">
                <p>name:</p>
                <input id="register-name" type="text" name="name" value="<?php echo htmlspecialchars($name) ?>"
                    placeholder="name">
                <small class="form-client-error-message"></small>
            </label>
            <label for="username">
                <p>username:</p>
                <input id="register-username" type="text" name="username"
                    value="<?php echo htmlspecialchars($username) ?>" placeholder="username">
                <small class="form-client-error-message"></small>
            </label>
            <label for="email">
                <p>email:</p>
                <input id="register-email" type="email" name="email" value="<?php echo htmlspecialchars($email) ?>"
                    placeholder="email" required>
                <small class="form-client-error-message"></small>
            </label>
            <label for="pwd">
                <p>password:</p>
                <input id="register-password" type="password" name="pwd" placeholder="password" required>
                <small class="form-client-error-message"></small>
            </label>
            <label for="pwdrepeat">
                <p>repeat password:</p>
                <input id="register-password-repeat" type="password" name="pwdrepeat" placeholder="repeat password"
                    required>
                <small class="form-client-error-message"></small>
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
    <!-- <script src="./scripts/formvalidation_register.js"></script> -->
</body>

</html>