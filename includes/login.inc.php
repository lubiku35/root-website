<?php

// Login handler which contains all the neccessary functions to provide login for user 
if (isset($_POST["submit"])) {

    // data get from form 
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../blog-join.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
} else {
    header("location: ../blog-join.php");
    exit();
}