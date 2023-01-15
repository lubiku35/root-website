<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/dark-mode/main.css" type="text/css">


    <title>L U B I K U</title>
</head>

<body>
    <?php
    include_once("./header.php")
        ?>

    <?php

    // session variables
    $_SESSION["s_name"] = "";
    $_SESSION["s_username"] = "";
    $_SESSION["s_email"] = "";


    // _error = boolean => is error ?
    // _error_msg = error message for user 
    // _field = class for input 
    
    $name = "";
    $name_error = true;
    $name_error_msg = "";
    $name_field = "";

    $username = "";
    $username_error = true;
    $username_error_msg = "";
    $username_field = "";


    $email = "";
    $email_error = true;
    $email_error_msg = "";
    $email_field = "";

    $password = "";
    $password_error = true;
    $password_error_msg = "";

    $password_rpt = "";
    $password_rpt_error = true;
    $password_rpt_error_msg = "";

    $conditions = "";
    $conditions_error = true;
    $conditions_error_msg = "";

    $creating_user_error = "";

    require_once("./server/dbh.inc.php");
    require_once("./server/data_validation.inc.php");



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $name_error_msg = "please fill in this field";
            $name_field = "client-error-input";
            $name = false;
        } else {
            $name_field = "client-success-input";
            $name = trim($_POST["name"]);
            $_SESSION["s_name"] = $name;
        }

        if (empty($_POST["username"])) {
            $username_error_msg = "please fill in this field";
            $username_field = "client-error-input";
            $username = false;
        } else if (strpos(trim($_POST["username"]), ' ') == true) {
            $username_error_msg = "username contains whitespaces";
            $username_field = "client-error-input";
            $username = false;
        } else if (strlen(trim($_POST["username"])) < 3) {
            $username_error_msg = "username must be at least 3 characters long";
            $username_field = "client-error-input";
            $username = false;
        } else {
            $username_field = "client-success-input";
            $username = $_POST["username"];
            $_SESSION["s_username"] = $username;
        }

        if (empty($_POST["email"])) {
            $email_error_msg = "please fill in this field";
            $email_field = "client-error-input";
            $email = false;
        } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email_error_msg = "email is not in valid form";
            $email_field = "client-error-input";
            $email = false;
        } else {
            $email_field = "client-success-input";
            $email = $_POST["email"];
            $_SESSION["s_email"] = $email;
        }

        if (empty($_POST["password"])) {
            $password_error_msg = "please fill in this field";
            $password_field = "client-error-input";
            $password_error = false;
            $password = false;
        } else if (strlen($_POST["password"]) < 8) {
            $password_error_msg = "password must be at least 8 characters long";
            $password_field = "client-error-input";
            $password_error = false;
            $password = false;
        } else if (!preg_match("@[a-z]@", $_POST["password"])) {
            $password_error_msg = "password must contains at least one lowercase character";
            $password_field = "client-error-input";
            $password_error = false;
            $password = false;
        } else if (!preg_match("@[A-Z]@", $_POST["password"])) {
            $password_error_msg = "password must contains one uppercase character";
            $password_field = "client-error-input";
            $password_error = false;
            $password = false;
        } else if (!preg_match("@[0-9]@", $_POST["password"])) {
            $password_error_msg = "password must contains one digit";
            $password_field = "client-error-input";
            $password_error = false;
            $password = false;
        } else if (!preg_match("@[^\w]@", $_POST["password"])) {
            $password_error_msg = "password must contains one special character";
            $password_field = "client-error-input";
            $password_error = false;
            $password = false;
        } else {
            $password_field = "client-success-input";
            $password = $_POST["password"];
            $password_error = true;
        }

        if (empty($_POST["password-repeat"])) {
            $password_rpt_error_msg = "please fill in this field";
            $password_rpt_field = "client-error-input";
        } else if ($password_error == false) {
            $password_rpt_error_msg = "wrong password input";
            $password_rpt_field = "client-error-input";
        } else if ($_POST["password-repeat"] !== $_POST["password"]) {
            $password_rpt_error_msg = "passwords does not match";
            $password_rpt_field = "client-error-input";
            $password_rpt = false;
        } else {
            $password_rpt_field = "client-success-input";
            $password_rpt = $_POST["password-repeat"];
        }

        if (empty($_POST["conditions"])) {
            $conditions_error_msg = "please check this field";
            $conditions_field = "client-error-input";
            $conditions = false;
        } else if ($_POST["conditions"] == "agree") {
            $conditions_field = "client-success-input";
            $conditions = trim($_POST["conditions"]);
        }

        if ($name !== false && $username !== false && $email !== false && $password !== false && $password_rpt !== false && $conditions !== false) {

            if (uidExists($conn, $username, $email) !== false) {
                $creating_user_error = "Sorry, we can't crete yout accout because username or email is alredy taken try another";
                $username_field = "client-error-input";
                $email_field = "client-error-input";
            } else {
                createUser($conn, $name, $username, $email, $password);
            }

        }
    }

    ?>


    <section id="register">
        <h2>create an account</h2>
        <form action="" id="reg-form" method="post">
            <label for="name" class="red-enchanted"><span class="tooltip-msg">Required field please fill in</span><span
                    class="tooltip">?</span></label>
            <input type="text" placeholder="NAME" name="name" id="reg-name" value="<?php echo $name ?>"
                class="<?php echo $name_field ?>">

            <p class="reg-client-error-message" id="client-error-name">
                <?php echo $name_error_msg ?>
            </p>

            <label for="username" class="red-enchanted"><span class="tooltip-msg">Required field please fill
                    in</span><span class="tooltip">?</span></label>
            <input type="text" placeholder="USERNAME" name="username" id="reg-username" value="<?php echo $username ?>"
                class="<?php echo $username_field ?>">
            <p class="reg-client-error-message" id="client-error-username">
                <?php echo $username_error_msg ?>
            </p>

            <label for="email" class="red-enchanted"><span class="tooltip-msg">Required field please fill in in valid
                    format</span><span class="tooltip">?</span></label>
            <input type="text" placeholder="EMAIL" name="email" id="reg-email" value="<?php echo $email ?>"
                class="<?php echo $email_field ?>">
            <p class="reg-client-error-message" id="client-error-email">
                <?php echo $email_error_msg ?>
            </p>

            <label for="password" class="red-enchanted"><span class="tooltip-msg">Must contains at least 1 uppercse, 1
                    lowercase, 1 special
                    character</span><span class="tooltip">?</span></label>
            <input type="password" placeholder="PASSWORD" name="password" id="reg-password"
                class="<?php echo $password_field ?>">
            <p class="reg-client-error-message" id="client-error-password">
                <?php echo $password_error_msg ?>
            </p>

            <label for="password-repeat" class="red-enchanted"><span class="tooltip-msg">Passwords must match and be at
                    least 8 characters long</span><span class="tooltip">?</span></label>
            <input type="password" placeholder="REPEAT PASSWORD" name="password-repeat" id="reg-password-repeat"
                class="<?php echo $password_rpt_field ?>">
            <p class="reg-client-error-message" id="client-error-password-repeat">
                <?php echo $password_rpt_error_msg ?>
            </p>

            <div class="conditions-row-field">
                <input type="checkbox" name="conditions" value="agree" id="reg-conditions">
                <label for="conditions">i agree with terms and conditions</label>
            </div>
            <p class="reg-client-error-message" id="client-error-conditions">
                <?php echo $conditions_error_msg ?>
            </p>

            <button type="submit">create account</button>

            <p class="reg-client-error-message" id="client-error-conditions">
                <?php echo $creating_user_error ?>
            </p>
        </form>
        <p id="have-an-acc">already have an account ? <a href="./login.php" class="underline-effect">log in here</a>
        </p>
    </section>

    <!-- <script src="./scripts/registration.js"></script> -->
</body>

</html>