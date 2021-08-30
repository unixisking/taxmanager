<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fiduciaire Tax Manager | Contactez-nous</title>
<?php include "includes/head.php" ?>
  <body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LF7LR5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!--// Main Wrapper \\-->
    <div class="tax-main-wrapper">

        <!--// Header \\-->
        <?php include "includes/nav.php" ?>
        <!--// Header \\-->

		<!--// Main Banner \\-->
		<div class="subheader" style="background-image: url('images/who-we-are.jpg');">
        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="tax-main-content">

            <!--// Main Section \\-->
            <div class="tax-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
						 <h1 class="section-title">Notre fiduciaire à votre service</h1>
						  
                            <div class="fancy-title"><h2><i class="fa fa-handshake-o"></i> Contactez Nous</h2></div>
                        </div>
                     
                        <div class="col-md-8">
                            <div class="contact-form">
                                <form action="sendmail.php" id="contact-form-1" method="POST" >
                                    <ul>
                                        <li>
                                            <label>Nom complet</label>
                                            <input class="form-control" name="name" type="text" placeholder="">
                                        </li>
                                        <li>
                                            <label>Adresse électronique</label>
                                            <input class="form-control" name="email" type="text" placeholder="">
                                        </li>
                                        <li>
                                            <label>Numéro de téléphone</label>
                                            <input class="form-control" name="phone_number" type="text" placeholder="">
                                        </li>
                                        <li>
                                            <label>Objet</label>
                                            <input class="form-control"  name="subject" type="text" placeholder="">
                                        </li>
                                        <li class="full">
                                            <label>Message</label>
                                            <textarea class="form-control" name="message" placeholder=""></textarea>
                                        </li>
                                        <li><input type="submit" value="Envoyer le Message" class="submit"></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tax-contact-info">
                                <ul>
                                    <li><strong><i class="fa fa-phone"></i> Téléphone:</strong> <a href="tel:+41 21 552 02 22">+41 21 552 02 22</a></li>
                                    <li><strong><i class="fa fa-envelope"></i> E-mail:</strong> <a href="mailto:info@taxmanager.ch">info@taxmanager.ch</a></li>
                                    <li><strong><i class="fa fa-globe"></i> Adresse:</strong> <span>Avenue de Tivoli 25 ,1007 Lausanne </span></li>
                                </ul>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12075.179706455936!2d-74.1485492!3d40.8324679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c31d45c2b5a2f%3A0x390788b457b20b1e!2sAvenue+de+Tivoli+25%2C+1007+Lausanne%2C+Switzerland!5e0!3m2!1sen!2sus!4v1560684804850!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

        <!--// Footer \\-->
       <?php include "includes/footer.php" ?>