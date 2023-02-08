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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_SESSION["mode"] ?>-styles.css">
    <title>Document</title>
</head>

<body class=">-mode">

    <h1>hello</h1>

    <form action="" method="post">
        <input type="submit" name='submit' value="<?php echo $default_mode_switch ?> mode">
    </form>



    <!-- <form action="cookie.php" method="post">
        <label for="username">
            <input type="text" name="username" id="username">
        </label>
        <input type="submit" name="login" value="submit">
    </form> -->
    <a href="htmlboiler.php">sadasdsa</a>
</body>

</html>