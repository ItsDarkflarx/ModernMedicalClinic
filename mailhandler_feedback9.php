<?php
if(isset($_POST['submit'])){
$to      = 'f38ee@localhost';
$from = $_POST['email']; // this is the sender's Email address
$name = $_POST['name']; // sender's name
$subject = 'Feedback :' . $_POST['subject'];
$message = $name .  " wrote the following:" . "\n\n" . $_POST['message'];
$headers = 'From: f38ee@localhost' . "\r\n" .
    'Reply-To: f38ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff3ee@localhost');
header('Location: booking.php'); 
}
?>