<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputSignup($name, $username, $email, $pwd, $pwdrepeat) !== false) {
        header("location: ../blog-new-account.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../blog-new-account.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../blog-new-account.php?error=invalidemail");
        exit();
    }

    if (pwdRight($pwd) !== false) {
        header("location: ../blog-new-account.php?error=pwdnotrighttoconditions");
        exit();
    }

    if (pwdMatch($pwd, $pwdrepeat) !== false) {
        header("location: ../blog-new-account.php?error=notmachtingpwds");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../blog-new-account.php?error=takenusername");
        exit();
    }

    createUser($conn, $name, $username, $email, $pwd);

} else {
    header("location: ../blog-new-account.php");
    exit();
}