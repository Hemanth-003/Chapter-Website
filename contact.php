<?php
if (isset($_POST['submit'])) { 
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];
      $ToEmail = 'hemanth19982016@outlook.com';
      $EmailSubject = 'ACM contact form '; 
      $mailheader = "From: ".$_POST["email"]."\r\n"; 
      $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
      $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
      $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
      $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
      $MESSAGE_BODY .= "Phone:".$_POST['phone']."<br />";  
      $MESSAGE_BODY .= "Comment: ".nl2br($_POST["message"])."<br>"; 
      if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader))
      {
      echo "<script>alert('Mail was sent !');</script>";
     
      }
      else
      {
      echo "<script>alert('Mail was not sent. Please try again later');</script>";
      }
    header("Location: contact.html");
     }