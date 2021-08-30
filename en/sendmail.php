<?php

session_start();
  
  //Email information
    $admin_email = "info@taxmanager.ch";



  $email = $_POST['email'];
  $name = $_POST['name'];

      $phone_number = $_POST['phone_number'];
       $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  //send email
  
  $sms = "Email : ".$email."\n Name: ".$name ." \n Phone Number : ".$phone_number." \nMessage : ".$message;
  //if (mail($admin_email, $subject, $message, "From:" . $email)) {
  if (mail($admin_email,$subject,$sms)) {

    
      $_SESSION['send'] = 'Tax Manager has received your message and will contact you as soon as possible.';

      header("Location: https://taxmanager.ch/en/success-message.php");
exit();
    
    //redirect_to('index.php');
 
  }
  else
  { //$_SESSION['fail'] = 'fail';
    //redirect_to('index.php');

  $_SESSION['fail'] = 'Failed to send email';
  
  header("Location: https://taxmanager.ch/en/success-message.php");
exit();

  }
  




?>