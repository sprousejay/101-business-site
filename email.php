<?php 
if (isset($_POST['Submit'])){
    $to = "jaysprouse2689@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $message2 = "Message Recieved. Here is a copy." . $message;
    $headers = "From:" . $from;
    mail($to,$subject,$message);
    mail($from, $subject, $message2);
    // echo "Mail Sent.";
    }
?>
