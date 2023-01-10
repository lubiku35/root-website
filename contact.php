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
        <h1>stay in touch</h1>
        <form action="" id="form">
            <div class="row">
                <p>
                    <label for="name">name</label>
                    <input id="contact-name" type="text" name="name" value="">
                    <small class="form-client-error-message"></small>
                </p>
                <p>
                    <label for="email">email</label>
                    <input id="contact-email" type="email" name="email" value="">
                    <small class="form-client-error-message"></small>
                </p>
            </div>
            <p id="subject">
                <label for="subject">subject</label>
                <input id="contact-subject" type="text" name="subject" value="">
                <small class="form-client-error-message"></small>
            </p>
            <p id="message">
                <label for="message">message</label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
            </p>
            <p id="submit-p">
                <button type="submit" name="submit" id="submit">submit</button>
            </p>
        </form>
    </section>

    <!--===== FOOTER SECTION =====-->
    <?php
    include_once './sections/footer/footer.php'
        ?>

    <script src='./scripts/theme-changer.js'></script>
    <script src="./scripts/formvalidation_contact.js"></script>
</body>

</html>