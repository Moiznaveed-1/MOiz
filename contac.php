<?php
if (isset($_POST['submit'])) {
  $to = "moiznaveed880@gmail.com";
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = "From: ".$_POST['email'];

  if (mail($to, $subject, $message, $headers)) {
    echo "Your message has been sent.";
  } else {
    echo "Failed to send the message.";
    $errorMessage = error_get_last()['message'];
    echo "Error: $errorMessage";
  }
}
?>