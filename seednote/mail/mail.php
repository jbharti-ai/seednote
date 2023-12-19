<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $to = "seednote.al@gmail.com";  
    $subject = "Subscribe";
    $message = "for subscribing our newsletter";
    $headers = "From: $email";

    if($email!=NULL)
    {
        mail($to, $subject, $message, $headers);
    }
    else{
        echo "Error: Message not accepted";
    }
}
header("Location: ../index.html");  // Redirect to a home page
exit();
?>



