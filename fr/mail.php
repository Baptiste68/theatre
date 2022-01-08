<?php

if($_POST){
    $name=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "baptistesimon1@gmail.com";
    $mailheader = "From: $lname \r\n";
    if (mail($recipient, $subject, $formcontent, $mailheader)) {
        echo "<p>Thank you for the message. We will contact you shortly.</p>";
    }
    else {
        echo "<p>Message failed.</p>";

    }
} 

else {
    echo '<p>Something went wrong</p>';
}

?>