<?php
session_start();
global $mode_switcher;

if (!isset($_COOKIE["screen_mode"])) {
    $default_mode = "LIGHT";
    $mode_switcher = "DARK";
    setcookie("screen_mode", $default_mode, time() + (86400 * 30), "/", "", false, true);
    $_SESSION["screen_mode"] = $default_mode;
} else {
    if ($_COOKIE["screen_mode"] === "LIGHT") {
        $mode_switcher = "DARK";
        $default_mode = "LIGHT";
        $_SESSION["screen_mode"] = $default_mode;
    } else {
        $mode_switcher = "LIGHT";
        $default_mode = "DARK";
        $_SESSION["screen_mode"] = $default_mode;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/<?php echo $_COOKIE["screen_mode"] ?>_root.css">
    <title>LUBIKU</title>
</head>

<body>

    <header id="project-header">
        <nav id="project-navigation">
            <ul>
                <li><a href="">whoami</a></li>
                <li><a href="">services</a></li>
                <li><a href="">content</a></li>
                <li><a href="">projects</a></li>
                <li><a href="">join</a></li>
            </ul>
        </nav>
        <form action="./cookie.php" method="post">
            <input type="submit" name="submit" value="GO <?php echo $mode_switcher ?>">
        </form>
    </header>