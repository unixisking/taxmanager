<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fiduciaire Tax Manager | À propos de nous</title>
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
		<div class="tax-main-content" style="padding-bottom: 0px;">

            <!--// Main Section \\-->
            <div class="tax-main-section about-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tax-table">
                                <div class="tax-table-cell">
                                    <div class="about-us">
                                        <h1 class="section-title">Qui sommes-nous ?</h1>
                                        <p>Tax Manager est une société active dans le service administratif et conseil fiscal. Nous préparons principalement des déclarations d’impôts pour les personnes physiques et morales, ainsi que d’autres tâches liées à l’investissement et la gestion d’entreprise. Nos expériences et connaissances des lois fiscales suisses font de nous l’une des meilleures compétences sur le marché suisse, notre étude est souvent sollicitée par plusieurs écoles et universités suisses afin de partager nos connaissances et expériences en fiscalité ; nous avons déjà contribué à la formation de plusieurs cadres qui occupent actuellement des postes très importants dans diverses entreprises. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
				  <div class="tax-about-video" style="margin-top: -30px">
				  	<div class="border-img">
				  		<img src="images/logo-black.png" alt="Tax-Manger-logo">
				  		<span class="play" style="cursor:pointer"><i class="fa fa-play fa-4x btn-play" id="btn-play"></i></span>
						<video width="100%" height="300px"id="video" >
							<source src="images/video.mp4" type="video/mp4">
							<source src="video.ogg" type="video/ogg">
							<source src="video.webm" type="video/webm">
						</video>
					</div>
				  </div>
				</div>
                        <div class="col-md-12">
                            <p>Soucieux de la satisfaction de notre clientèle, nous avons misé sur les atouts et l’efficacité de nos collaborateurs, afin de cibler les attentes de notre clientèle tout en mettant en place un système de suivi personnalisé proposant des solutions et des conseils financiers adaptés à chaque client. Nous nous engageons à vous fournir un service de qualité comprenant la discrétion, la disponibilité et l’engagement total de nos collaborateurs. </p>
                            <p>La compétitivité des cantons et l’attractivité du système fiscal suisse des personnes morales, ajoutées à notre maîtrise de la loi et jurisprudence fiscale nous laissent une grande marge de manœuvre afin de trouver la solution optimale pour notre clientèle suisse et internationale.</p>
                            <div class="center"><a href="contact-us.php" class="contact-btn">contacez-nous</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

       <?php include "includes/footer.php" ?>