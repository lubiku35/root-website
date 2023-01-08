<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Cascading Style Sheets -->    
    <link rel='stylesheet' href='./main.css'>

    <title>REGISTER TO METANOIA | BLOG BY LUIBKU</title>
</head>
<body>
    <!--===== MAIN HEADING SECTION =====-->
    <?php
        include_once "./sections/header/header.php"
    ?>

    <!--===== LANDING PAGE SECTION =====-->
    <main id='blog-register-landing' class='join-blog-container'>
        <h1>REGISTER</h1>

        <form action="" method="post">
            <label for="name">
                <p>name:</p> 
                <input type="text" name="name" placeholder="name">
            </label>
            <label for="username">
                <p>username:</p> 
                <input type="text" name="username" placeholder="username">
            </label>
            <label for="username">
                <p>email:</p>
                <input type="email" name="username" placeholder="email">
            </label>
            <label for="password">
                <p>password:</p> 
                <input type="password" name="password" id="password" placeholder="password">
            </label>
            <label for="rpt-password">
                <p>repeat password:</p>  
                <input type="password" name="rpt-password" id="password" placeholder="repeat password">
            </label>
            <button type="submit" name="submit" class='btn-join'>REGISTER</button>
        </form>

        <p class='join-footer-text'>Already have an account? <a href="./blog-join.php">login here</a>.</p>
    </main>
    
    <!--===== FOOTER SECTION =====-->
    <?php
        include_once './sections/footer/footer.php'
    ?>

    <script src="./scripts/theme-changer.js"></script>
</body>
</html>