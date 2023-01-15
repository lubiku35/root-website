<?php

function createUser($conn, $name, $username, $email, $pwd)
{
    // Function to insert into database new user with corresponding values

    $sql = "INSERT INTO users (userName, usersUid, usersEmail, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./dbfailed.php");
        exit();
    }

    $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ./welcome.php");
    exit();
}