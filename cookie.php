<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mode = $_POST['submit'];

    if ($mode === "GO DARK") {
        $mode = "DARK";
        setcookie("screen_mode", $mode, time() + (86400 * 30), "/", "", false, true);

        $mode_switcher = "LIGHT";
        $_SESSION["screen_mode"] = $mode_switcher;
    } else {
        $mode = "LIGHT";
        setcookie("screen_mode", $mode, time() + (86400 * 30), "/", "", false, true);

        $mode_switcher = "DARK";
        $_SESSION["screen_mode"] = $mode_switcher;
    }
}
header("location: ./index.php");
exit();
?>