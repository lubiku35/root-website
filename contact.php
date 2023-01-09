<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta name='description' content='Official website of Lubiku' />

    <!-- Cascading Style Sheets -->
    <link rel='stylesheet' href='./main.css'>
    <title>LUBIKU</title>
</head>

<body>
    <!--===== HEADER SECTION =====-->
    <?php
    include_once './sections/header/header.php'
        ?>

    <!--===== CONTACT SECTION =====-->
    <section id="contact">
        <h2>stay in touch</h2>
        <form action="">
            <div class="row">
                <p>
                    <label for="">name</label>
                    <input type="text" value="" required>
                </p>
                <p>
                    <label for="">email</label>
                    <input type="email" value="" required>
                </p>
            </div>
            <p id="subject">
                <label for="">subject</label>
                <input type="text" value="" required>
            </p>
            <p id="message">
                <label for="">message</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </p>
            <p id="submit-p">
                <button type="submit" id="submit">submit</button>
            </p>
        </form>
    </section>

    <!--===== FOOTER SECTION =====-->
    <?php
    include_once './sections/footer/footer.php'
        ?>

    <script src='./scripts/theme-changer.js'></script>
</body>

</html>