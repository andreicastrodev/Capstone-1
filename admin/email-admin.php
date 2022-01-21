<?php

if (isset($_POST['confirm'])) {
    $fullName = "group4";
    $subject = 'about your schedule';
    $mailFrom = 'krazergran2@gmail.com';
    $message =   "your schedule is confirmed";
    $mailTo = 'krazergran2@gmail.com';
    $headers  = "From: " . $mailFrom;
    $txt = "Email from " . $fullName . ". \n\n" . $message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: manage-bookings.php");

}


if (isset($_POST['cancel'])) {
    $fullName = "group4";
    $subject = 'about your schedule';
    $mailFrom = 'krazergran2@gmail.com';
    $message =   "your schedule is canceled pleace schedule again.";
    $mailTo = 'krazergran2@gmail.com';
    $headers  = "From: " . $mailFrom;
    $txt = "Email from " . $fullName . ". \n\n" . $message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: manage-bookings.php");

}
