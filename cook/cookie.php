<?php

session_start();

if (!isset($_COOKIE["mode"])) {
    $default_mode = "light";
    setcookie("mode", $default_mode, time() + (86400 * 30), "/", "", false, true);
    $default_mode_switch = "dark";
    $mode_class = "light";
    $_SESSION["mode"] = $mode_class;
} else {
    if ($_COOKIE["mode"] === "light") {
        $default_mode_switch = "dark";
        $mode_class = "light";
        $_SESSION["mode"] = $mode_class;
    } else {
        $default_mode_switch = "light";
        $mode_class = "dark";
        $_SESSION["mode"] = $mode_class;
    }
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mode = $_POST['submit'];

    if ($mode === "light mode") {
        $mode = "light";
        setcookie("mode", $mode, time() + (86400 * 30), "/", "", false, true);

        $default_mode_switch = "dark";
        $mode_class = "light";
        $_SESSION["mode"] = $mode_class;
    } else {
        $mode = "dark";
        setcookie("mode", $mode, time() + (86400 * 30), "/", "", false, true);

        $default_mode_switch = "light";
        $mode_class = "dark";
        $_SESSION["mode"] = $mode_class;
    }
}
?>