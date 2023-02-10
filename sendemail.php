<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  
  $to = "fouziaqateel@gmail.com";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  if (mail($to, $subject, $message, $headers)) {
      echo "The email was sent successfully";
     } else {
     echo "The email could not be sent";
     }
?>