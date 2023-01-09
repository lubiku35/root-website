<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $mail_from = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail_to = "motosickylubos@gmail.com";
    $headers = "From: " . $mail_from;
    $txt = "You have received an e-mail from " . $name . ".\n\n" . $message;

    mail($mail_to, $subject, $txt, $headers);
    header("location: ../contact.php?mailsend");
}