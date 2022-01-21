<?php

if (isset($_POST['submit1'])) {
    $fullName = $_POST["fname"];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['description'];
    $mailTo = 'krazergran2@gmail.com';
    $headers  = "From: " . $mailFrom;
    $txt = "Email from " . $fullName . ". \n\n" . $message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: thankyou-email.php");
}

