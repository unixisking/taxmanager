<?php

session_start();
  //Email information
    $admin_email = "info@taxmanager.ch";
  $email = $_POST['n_email'];  
  //send email
  
  $sms = "Email : ".$email;
  //if (mail($admin_email, $subject, $message, "From:" . $email)) {
  if (mail($admin_email,'Newsletter',$sms)) {

      $_SESSION['send'] = 'Nous avons bien reçu votre demande et vous contacterons le plus rapidement possible.';

      // $referer = $_SERVER['HTTP_REFERER'];
      header("Location: https://taxmanager.ch/success-message.php");
      // echo '1';
exit();
    
    //redirect_to('index.php');
 
  }
  else
  { //$_SESSION['fail'] = 'fail';
    //redirect_to('index.php');

  $_SESSION['fail'] = 'Error: enter your email again';
  
  // $referer = $_SERVER['HTTP_REFERER'];
header("Location: https://taxmanager.ch/success-message.php");
  // echo '0';
exit();

  }
  




?>