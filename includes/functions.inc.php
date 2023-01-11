<?php

// Function to check if any input is empty
function emptyInputSignup($name, $username, $email, $pwd, $pwdrepeat)
{
    $output = '';
    if (empty($name) || empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat)) {
        $output = true;
    } else {
        $output = false;
    }
    return $output;
}

// Function to check if username is in valid format
function invalidUid($username)
{
    $output = '';
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $output = true;
    } else {
        $output = false;
    }
    return $output;
}

// Function to check if email is in valid format
function invalidEmail($email)
{
    $output = '';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $output = true;
    } else {
        $output = false;
    }
    return $output;
}

// Function to check if password contains "must-have" conditions and if it is valid
function pwdRight($pwd)
{
    $output = '';
    $uppercase = preg_match("@[A-Z]@", $pwd);
    $lowercase = preg_match("@[a-z]@", $pwd);
    $numbers = preg_match("@[0-9]@", $pwd);
    $specialchars = preg_match("@[^\w]@", $pwd);

    if (!$uppercase || !$lowercase || !$numbers || !$specialchars || strlen($pwd) < 7) {
        $output = true;
    } else {
        $output = false;
    }
    return $output;
}

// Function to check if password and repeated passwords are matching
function pwdMatch($pwd, $pwdrepeat)
{
    $output = '';
    if ($pwd !== $pwdrepeat) {
        $output = true;
    } else {
        $output = false;
    }
    return $output;
}

function uidExists($conn, $username, $email)
{
    // Function to check if uid (username / email)of user already exists in database

    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../blog-new-account.php?error=stmtfailed01");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $username, $email, $pwd)
{
    // Function to insert into database new user with corresponding values

    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../blog-new-account.php?error=stmtfailed02");
        exit();
    }

    $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../blog-new-account.php?error=none");
    exit();
}

// Function to check in any login input is empty or not 
function emptyInputLogin($username, $pwd)
{

    $output = '';
    if (empty($username) || empty($pwd)) {
        $output = true;
    } else {
        $output = false;
    }
    return $output;
}

// Function which first of all check if user is valid to login and then execute login
function loginUser($conn, $username, $pwd)
{
    $uid_exists = uidExists($conn, $username, $username);

    if ($uid_exists === false) {
        header("location: ../blog-join.php?error=wronglogin");
        exit();
    }

    $pwdhashed = $uid_exists["usersPwd"];

    $checkpwd = password_verify($pwd, $pwdhashed);

    if ($checkpwd === false) {
        header("location: ../blog-join.php?error=wronglogin");
        exit();
    } else if ($checkpwd === true) {
        session_start();
        $_SESSION["userid"] = $uid_exists["usersId"];
        $_SESSION["useruid"] = $uid_exists["usersUid"];
        header("location: ../blog.php");
    }
}