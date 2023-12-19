<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $data = "Name :- " . $name . "\r\n Email :- " . $email . "\r\n Subject :- " . $subject . "\r\n Message :- " . $message;

    $to = "\r\n seednote.al@gmail.com";
    $subject = "\r\n New Contact Form Submission ";
    $headers = "\r\n From:- $email";
    if ($email!=NULL)
      {
        mail($to, $subject, $data, $headers);
      }
      else
      {
          echo "Error: Message not accepted";
      }
    header("Location: ../contact_us.html");
}
?>