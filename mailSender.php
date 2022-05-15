<?php

if(isset($_POST['submit'])) {
    $mailto = 'marek.hornak@student.spseke.sk';  //email address
    //getting form data
    $name = $_POST['name'];     //getting name
    $fromMail = $_POST['email'];       //getting email
    $subject = $_POST['subject'];   //getting subject
    $msg = $_POST['message'];       //getting message
    $response = "The message was submitted successfully!";  //submit confirmation

    //the email i will receive
    $message = "Name: " . $name . "\n" 
    . "Email: " . $fromMail . "\n" 
    . "Subject: " . $subject . "\n" 
    . "Message: " . "\n" . $msg;

    //the message sent to the client
    $message2 = "Dear " . $name . "\n"
    . "Thank you for contacting us. We will send you response soon!" . "\n\n"
    . "Here is your message and data you sent: " . "\n" . $message . "\n\n"
    . "Regards " . "\n" . "Salamander corporation";

    //email headers
    $header = "From: " . $fromMail; //the mail i receive
    $header2 = "From: " . $mailto; //the mail customer receive

    //php mailer function
    $result1 = mail($mailto, $subject, $message, $header); //this email i will receive
    $result2 = mail($fromMail, $response, $message2, $header2); //this email client will receive

    //success message
    if($result1 && $result2) {
        $success = "Your message was submitted successfully!";
    }else{
        $failure = "Something got wrong! The message wasn't sent! Try again later.";
    }
}
?>