<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $budget = $_POST["budget"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $message = $_POST["message"];

    $to = "kendricksamonte0815@gmail.com"; // Replace with your Gmail address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $email_body = "Name: $name\n";
    $email_body .= "Budget: $budget\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Company: $company\n";
    $email_body .= "Message:\n$message";

    mail($to, $subject, $email_body, $headers);
}
?>