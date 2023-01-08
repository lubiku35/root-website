<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Official website of Lubiku"/>

    <!-- Cascading Style Sheets -->    
    <link rel="stylesheet" href="./main.css">
    <title>LUBIKU</title>
</head>
<body>
    <!--===== MAIN HEADING SECTION =====-->
    <?php
        include_once "./sections/header/header.php"
    ?>

    <!--===== LANDING PAGE SECTION =====-->
    <?php
        include_once './sections/blog-landing/blog-landing.php'
    ?>

    <!--===== BLOG MAIN SECTION =====-->
    <?php
        include_once './sections/blog-main/blog-main.php'
    ?>


    <!--===== FOOTER SECTION =====-->
    <?php
        include_once './sections/footer/footer.php'
    ?>

    <script src="./scripts/theme-changer.js"></script>
    <script src="./scripts/blog-filter.js"></script>
</body>
</html>