<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta name='description' content='Official website of Lubiku'/>

    <!-- Cascading Style Sheets -->    
    <link rel='stylesheet' href='./main.css'>
    <title>LUBIKU</title>
</head>
<body>
    <!--===== HEADER SECTION =====-->
    <?php
        include_once './sections/header/header.php'
    ?>

    <!--===== LANDING PAGE SECTION =====-->
    <?php
        include_once './sections/home-landing/home-landing.php'
    ?>

    <!--===== WHOAMI SECTION =====-->
    <?php
        include_once './sections/whoami/whoami.php'
    ?>

    <!--===== PROJECTS SECTION =====-->
    <?php
        include_once './sections/projects/projects.php'
    ?>

    <!--===== FOOTER SECTION =====-->
    <?php
        include_once './sections/footer/footer.php'
    ?>

    <script src='./scripts/theme-changer.js'></script>
</body>
</html>