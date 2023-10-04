<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $title = $_POST["subject"];
    $message = $_POST["message"];

    $to = "inzinjeringdoo@gmail.com";
    $subject = "Upit za - $title";
    $headers = "From: $name <$email>";
    $message_body = "Name: $name\nEmail: $email\nTitle: $title\nMessage:\n$message";

    mail($to, $subject, $message_body, $headers)
}
?>