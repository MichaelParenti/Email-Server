<?php

if (isset($_POST['btn'])) {

  $fname = $_POST['fname'];

  $lname = $_POST['lname'];

  $from = $_POST['from'];

  $message = $_POST['message'];

  $to = $_POST['to'];

  $subject = $_POST['subject'];
  
  


  $txt = "You have recieved a message from " . $fname . " " . $lname . " using an email server created by Michael Parenti \n https://portfolio1010.000webhostapp.com/code.html \n https://github.com/M-Coder-3920 \n Here is your message:\n\n" . $message;
   
  
  
  
    mail($to, $subject, $txt, $headers);
    
    echo $fname . "<br>Thank you for using my email server. Your message has been sent.";
   
}
 
?>