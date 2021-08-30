<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tax Manager | The Accounting</title>
<?php include "includes/head.php" ?>
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="tax-main-wrapper">

        <!--// Header \\-->
        <?php include "includes/nav.php" ?>
        <!--// Header \\-->

		<!--// Main Banner \\-->
		<div class="subheader" style="background-image: url('../images/our-services.jpg');">
        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="tax-main-content">

            <!--// Main Section \\-->
            <div class="tax-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="success-message">
                                      <?php
                        if(!empty($_SESSION['send']))
                        {?>
                          
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong></strong> <?php echo $_SESSION['send'] ?>
        </div>

 
                       <?php $_SESSION['send']='';  }

                        if(!empty($_SESSION['fail']))
                        {?>
                          
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong></strong> <?php echo $_SESSION['fail'] ?>
        </div>

 
                       <?php $_SESSION['fail']='';  }

                        ?>
                                <!-- <p>Tax Manager has received your message and will contact you as soon as possible.</p> -->
                                <a href="index.php" class="submit">Go back to the website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

      <?php include "includes/footer.php" ?>