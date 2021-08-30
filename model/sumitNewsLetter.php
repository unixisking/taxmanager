<?php

session_start();
  
  //Email information
    $admin_email = "info@taxmanager.ch";





  $email = $_POST['n_email'];  
  //send email
  
  $sms = "Email : ".$email;
  //if (mail($admin_email, $subject, $message, "From:" . $email)) {
  if (mail($admin_email,'Newsletter',$sms)) {

    
      $_SESSION['send'] = 'Tax Manager has received your message and will contact you as soon as possible.';
 header("Location: https://www.taxmanager.ch/en/success-message.php");
      // $referer = $_SERVER['HTTP_REFERER'];
      // header("Location: $referer");
      // echo '1';
exit();
    
    //redirect_to('index.php');
 
  }
  else
  { //$_SESSION['fail'] = 'fail';
    //redirect_to('index.php');

  $_SESSION['fail'] = 'Error: enter your email again';
   header("Location: https://www.taxmanager.ch/en/success-message.php");
  // $referer = $_SERVER['HTTP_REFERER'];
// header("Location: $referer");
  // echo '0';
exit();

  }
  




?>