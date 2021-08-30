<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="google-site-verification" content="eaW40tZIl9bFS6qIRs3evJTifs_XmkUXSOLJSCq7bIU" />
	<title>Fiduciaire à Lausanne | Tax Manager</title>
	<meta name="description" content="Déclarations d'impôt, Réclamations, comptabilité et décompte TVA, Gestion des salaires, Création d'entreprise, Conseil fiscal, Modification et paiement des acomptes" />
	

	<?php include "includes/head.php" ?>
	<body>
	  <!-- Google Tag Manager (noscript) -->
	  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LF7LR5"
						height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	  <!-- End Google Tag Manager (noscript) -->	
	  <!--// Main Wrapper \\-->
	  <div class="tax-main-wrapper">
		
		<!--// Header \\-->
		<header id="tax-header" class="tax-header-one">
		  <div class="tax-top-strip">
			<div class="container">
			  <div class="row">
				<div class="col-md-3">
				  <a href="https://www.taxmanager.ch" class="logo"><img src="images/fiduciaire-pully" alt=""></a>
				</div>
				<div class="col-md-9">
				  <ul class="ec-user-section">
					<li><a href="contact-us.php"><i class="fa fa-handshake-o"></i>Contact</a></li>
					<li>
					  <a href="javascript:void(0)" class="tax-fr">FR</a>
					  <div class="lang">
						  <a href="https://www.taxmanager.ch/en/">English</a>
						  <a href="https://www.taxmanager.ch" class="active">French</a>
					  </div>
					</li>
					<li><a href="javascript:void(0)" class="ec-search-popup-btn"><i class="fa fa-search"></i></a></li>
				  </ul>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="ec-search-popup">
			<div class="container">
			  <div class="row">
				<div class="col-md-12">
				  <form>
					<input type="text" placeholder="Search">
					<input type="submit" value="">
					<i class="fa fa-search"></i>
				  </form>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="header-navigation">
			<div class="container">
			  <div class="row">
				<div class="col-md-12">
				  <div class="main-nav">
					<nav class="navbar navbar-expand-lg">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fa fa-bars"></span>
					  </button>
					  
					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
						  <li class="nav-item active">
							<a class="nav-link" href="qui-sommes-nous.php">À propos de nous </a>
						  </li>
						  <li class="nav-item b" id="tax-services">
							<a class="nav-link" href="services.php">Nos Services</a>
							<div class="nav-mega-menu">
							  <div class="container">
								<div class="row">
								  <div class="col-md-2">
									<div class="tax-table">
									  <div class="tax-table-cell">
										<div class="nav-mega">
										  <h5>Rendez-vous</h5>
										  <a href="contact-us.php"><img class="loading" data-src="images/fiduciaire-yverdon.png
																			 " width=90 height=89> </a>
										</div>
									  </div>
									</div>
								  </div>
								  <div class="col-md-10">
									<div class="row">
									  <div class="col-md-6">
										<div class="nav-mega">
										  <h2>
										  	<div class="fa icon-container"><img class="new-icons loading" data-src="images/tax_service.svg"></div> <a href="declaration-d-impot-pour-les-particuliers.php">Déclaration d'impôt pour les particuliers</a>
										  </h2>
										  <ul>
											<li><h3><a href="declaration-d-impot-ordinaire.php">Déclaration d'impôt ordinaire</a></h3></li>
											<li><h3><a href="demande-de-rectification-de-l-impot-source.php">Demande de rectification de l’impôt source</a></h3></li>
											<li><h3><a href="revenus-locatifs.php">Revenus locatifs</a></h3></li>
											<li><h3><a href="taxation-des-gains-immobiliers.php">Taxation des gains immobiliers</a></h3></li>
											<li><h3><a href="modification-et-paiement-des-acomptes.php">Modification et paiement des acomptes</a></h3></li>
											<li><h3><a href="controle-et-reclamation-contre-decision-de-taxation.php">Contrôle et réclamation contre décision de taxation</a></h3></li>
										  </ul>
										</div>
										<div class="nav-mega">
										  <h2>
										  	<div class="fa icon-container"><img class="new-icons loading" data-src="images/idea_service.svg"></div> <a href="creation-d-entreprise.php">Création d'entreprise</a>
										  </h2>
										  <ul>
											<li><h3><a href="le-choix-du-statut-juridique-des-entreprises.php">Le choix du statut juridique des entreprises</a></h3></li>
											<li><h3><a href="avantages-et-inconvenients-de-la-raison-individuelle-et-societe-en-nom-collectif.php">Avantages et inconvénients de la  raison individuelle et société en nom collectif</a></h3></li>
											<li><h3><a href="avantages-et-les-inconvenients-de-la-sa-et-sarl.php">Avantages et les inconvénients de la SA et Sàrl</a></h3></li>
										  </ul>
										</div>
									  </div>
									  <div class="col-md-6" style="padding-left: 50px;">
										<div class="nav-mega">
										  <h2>
										  	<div class="fa icon-container"><img class="new-icons loading" data-src="images/income_service.svg"></div> <a href="comptabilite.php">Comptabilité et gestion des salaires</a>
										  </h2>
										  <ul>
											<li><h3><a href="comptabilite-pour-les-independants.php">Comptabilité pour les indépendants (personnes physiques)</a></h3></li>
											<li><h3><a href="comptabilite-pour-les-personnes-morales.php">Comptabilité pour les personnes morales</a></h3></li>
											<li><h3><a href="gestion-des-salaires.php">Gestion des salaires</a></h3></li>
										  </ul>
										</div>
										<div class="nav-mega">
										  <h2>
										  	<div class="fa icon-container"><img class="new-icons loading" data-src="images/percentage_service.svg"></div> <a href="decompte-tva.php">Décompte TVA</a>
										  </h2>
										  <ul>
											<li><h3><a href="decompte-de-la-tva-selon-la-methode-normale-et-nette.php">Décompte de la TVA selon la méthode normale et nette</a></h3></li>
										  </ul>
										</div>
										<div class="nav-mega">
										  <h2>
										  	<div class="fa icon-container"><img class="new-icons loading" data-src="images/taxes_service.svg"></div> <a href="declaration-d-impot-des-personnes-morales.php">Déclaration d'impôt des personnes morales</a>
										  </h2>
										  <ul>
											<li><h3><a href="assujettissement-illimite.php">Assujettissement illimité</a></h3></li>
											<li><h3><a href="assujettissement-limite.php">Assujettissement limité</a></h3></li>
											<li><h3><a href="controle-et-reclamation-contre-la-decisions-de-taxation-des-personnes-morales.php">Contrôle et réclamation contre la décision de taxation des personnes morales</a></h3></li>
										  </ul>
										</div>
									  </div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
							<div class="sidebar nav-dropdown b">
							  <ul>
								<li>
								  <ul>
									<li class="tax-side-dropdown"><i class="fa fa-angle-down"></i>
									<img class="new-icons loading" data-src="images/tax_service.svg">
									  <a href="declaration-d-impot-pour-les-particuliers.php">Déclaration d'impôt pour les particuliers</a>
									  <ul class="service-drop">
										<li><a href="declaration-d-impot-ordinaire.php">Déclaration d'impôt ordinaire</a></li>
										<li><a href="demande-de-rectification-de-l-impot-source.php">Demande de rectification de l’impôt source</a></li>
										<li><a href="revenus-locatifs.php">Revenus locatifs</a></li>
										<li><a href="taxation-des-gains-immobiliers.php">Taxation des gains immobiliers</a></li>
										<li><a href="modification-et-paiement-des-acomptes.php">Modification et paiement des acomptes</a></li>
										<li><a href="controle-et-reclamation-contre-decision-de-taxation.php">Contrôle et réclamation contre décision de taxation</a></li>
									  </ul>
									</li>
									<li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><img class="new-icons loading" data-src="images/idea_service.svg"><a href="creation-d-entreprise.php">Création d'entreprise</a>
									  <ul class="service-drop">
										<li><a href="le-choix-du-statut-juridique-des-entreprises.php">Le choix du statut juridique des entreprises</a></li>
										<li><a href="avantages-et-inconvenients-de-la-raison-individuelle-et-societe-en-nom-collectif.php">Avantages et inconvénients de la  raison individuelle et société en nom collectif</a></li>
										<li><a href="avantages-et-les-inconvenients-de-la-sa-et-sarl.php">Avantages et les inconvénients de la SA et Sàrl</a></li>
									  </ul>
									</li>
									<li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><img class="new-icons loading" data-src="images/income_service.svg"><a href="comptabilite.php">Comptabilité et gestion des salaires</a>
                                       <ul class="service-drop">
                                        <li><a href="comptabilite-pour-les-independants.php">Comptabilité pour les indépendants (personnes physiques)</a></li>
                                        <li><a href="gestion-des-salaires.php">Gestion des salaires</a></li>
									  </ul>
									</li>
									<li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><img class="new-icons loading" data-src="images/percentage_service.svg"><a href="decompte-tva.php">Décompte TVA</a>
									  <ul class="service-drop">
										<li><a href="decompte-de-la-tva-selon-la-methode-normale-et-nette.php">Décompte de la TVA selon la méthode normale et nette</a></li>
									  </ul>
									</li>
									<li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><img class="new-icons loading" data-src="images/taxes_service.svg"><a href="declaration-d-impot-des-personnes-morales.php">Déclaration d'impôt des personnes morales</a>
									  <ul class="service-drop">
										<li><a href="assujettissement-illimite.php">Assujettissement illimité</a></li>
										<li><a href="assujettissement-limite.php">Assujettissement limité</a></li>
										<li><a href="controle-et-reclamation-contre-la-decisions-de-taxation-des-personnes-morales.php">Contrôle et réclamation contre la décisions de taxation des personnes morales</a></li>
									  </ul>
									</li>
								  </ul>
								</li>
							  </ul>
							</div>
						  </li>
						  <li class="nav-item a">
							<a class="nav-link" href="comment-reduire-ses-impots.php">Réduire vos impôts</a>
							<div class="sidebar tex nav-dropdown a">
							  <ul>
								<li>
								  <ul>
									<li class="tax-side-dropdown"><a href="contribution-au-3eme-pilier.php">Contribution au 3éme pilier</a></li>
									<li class="tax-side-dropdown"><a href="contribution-au-2eme-pilier.php">Contribution au 2éme pilier</a></li>
									<li class="tax-side-dropdown"><a href="choix-du-canton-et-de-la-commune.php">Choix du canton et de la commune</a></li>
									<li class="tax-side-dropdown"><a href="faire-valoir-les-personnes-a-charges.php">Faire valoir les personnes à charges</a></li>
									<li class="tax-side-dropdown"><a href="deduire-les-frais-perfectionnement-reconversion-reinsertion.php">Déduire les frais perfectionnement, reconversion, réinsertion</a></li>
									<li class="tax-side-dropdown"><a href="deduction-des-frais-medicaux.php">Déduction des frais médicaux</a></li>
									<li class="tax-side-dropdown"><a href="deduction-des-dons.php">Déduction des dons</a></li>
									<li class="tax-side-dropdown"><a href="travailler-en-tant-qu-independant.php">Travailler en tant qu’indépendant</a></li>
									<li class="tax-side-dropdown"><a href="privilegier-ou-opter-pour-la-location.php">Privilégier ou opter pour la location</a></li>
								  </ul>
								</li>
							  </ul>
							</div>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="a-qui-s-adresse-nos-services.php">A qui s’adresse nos services</a>
							<li class="nav-item">
							<a class="nav-link" href="a-qui-s-adresse-nos-services.php">Nos prix</a>
							  <li class="nav-item">
							<a class="nav-link" href="actualites-et-articles.php">Actualités et articles</a>
						  </li>
						</ul>
					  </div>
					</nav>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</header>
		<!--// Header \\-->
		
		<!--// Main Banner Desktop \\
		<div class="tax-banner hide-mobile">
		  <span class="banner-transparent"></span>
		  <div class="tax-banner-slider">
			<div class="layer" style="background-image: url('images/fiduciaire_new.jpg');"><img class="loading" data-src="images/fiduciaire_new.jpg" alt=""></div>
			<div class="layer" style="background-image: url('images/lausanne_new.jpg');"><img class="loading" data-src="images/lausanne_new.jpg" alt=""></div>
			<div class="layer" style="background-image: url('images/comptabilite_new.jpg');"><img class="loading" data-src="images/comptabilite_new.jpg" alt=""></div>
			<div class="layer" style="background-image: url('images/tva_new.jpg');"><img src="images/tva_new.jpg" alt=""></div>
		  </div>-->
		  
		  
		  
		  
		  
		  <div class="tax-banner hide-mobile">
		  <span class="banner-transparent"></span>
              <style>
                  .tax-banner-slider img {
                      float: unset !important;
                      width: 100% !important;
                      object-fit: cover !important;
                      height: 100% !important;
                  }
                  .layer.slick-slide, .slick-track {
                        height: 100% !important;
                  }
                  .tax-banner-slider .layer {
                        background-size: cover !important;
                  }
                  .layer.slick-slide {
                      height: 56vh !important;
                  }
              </style>
		  <div class="tax-banner-slider" style="background-image: url('images/fiduciaire_new.jpg');background-size: cover;background-position: right;">
			<div class="layer" style="background-image: url('images/fiduciaire_new.jpg');"><img class="loading" src="images/fiduciaire_new.jpg" alt=""></div>
			<div class="layer" style="background-image: url('images/lausanne_new.jpg');"><img class="loading" src="images/lausanne_new.jpg" alt=""></div>
			<div class="layer" style="background-image: url('images/comptabilite_new.jpg');"><img class="loading" src="images/comptabilite_new.jpg" alt=""></div>
			<div class="layer" style="background-image: url('images/tva_new.jpg');"><img class="loading" src="images/tva_new.jpg" alt=""></div>
                  <div class="layer"><img src="images/fiduciaire_new.jpg" alt=""></div>
		  </div>
		  
		  
		  
		  
		  
		  
		  
		  
		  <div class="tax-banner-caption">
			<div class="tax-table">
			  <div class="tax-table-cell">
				<div class="container">
				  <div class="row">
					<div class="col-md-12">
					  <div class="banner-text">
						<h1><font color="black"><font size="6">Fiduciaire à Lausanne</font></font></h1>
						<p><font color="black">Tax Manager s’engage à vous <br>simplifier la vie</font></p>
						<a href="contact-us.php"><img class="loading" data-src="images/fiduciaire-yverdon.png" alt=""><font color="black"> Rendez-vous</font></a>
						<!-- <a href="#">Our Prices</a> -->
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<!--// Main Banner Desktop \\-->
		
		<!--// Main Content \\-->
		<img class="loading hide-desk" src="images/fiduciaire_new.jpg">
		<div class="tax-main-content" style="padding-bottom: 0px;">

					<!-- Start  our servies  -->
		<div class="our-services">
            <div class="container">
               <div class=" our-services-title text-center wow slideInUp " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="1s">
                      <h3 class="services-title text-uppercase">Nos Services</h3>
                      <p class="service-pragh text-center wow zoomIn" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="1s">
                      Notre étude prend en charge les déductions qui sont adaptées à votre situation selon les nouvelles pratiques et lois fiscales.
                       Nous vous proposons notre compétence pour les déclarations d’impôts extrêmement complexes,
                       sans exclure les déclarations simples et toujours aux meilleurs prix.
                      </p>
		        </div>
              <div class="servies-boxes  mx-auto ">
					<div class="container">
					<div class="row flex-fix">

						<!-- New service Box -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-services">
	                        <div class="box-service text-center  wow bounceInUp" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
							<img class="new-services-icons loading" data-src="images/tax_service.svg">
	                            <h4>DÉCLARATION D’IMPÔT POUR LES PARTICULIERS</h4>
	                            <p class="text-center">
								Notre étude prend en charge les déductions qui sont adaptées à votre situation selon les nouvelles...
	                            </p>
	                            <a href="declaration-d-impot-ordinaire.php" target="_blank">Lire la suite</a>
	                        </div>
                    	</div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-services ">
                        <div class="box-service text-center  wow bounceInUp" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
						<img class="new-services-icons loading" data-src="images/idea_service.svg">
                            <h4>CRÉATION D'ENTREPRISE</h4>
                            <p class="text-center">
							La création d'une entreprise est un projet qui nécessite beaucoup de préparation, une mauvaise décision...
                            </p>
                            <a href="creation-d-entreprise.php" target="_blank">Lire la suite</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-services ">
                        <div class="box-service text-center wow bounceInUp fix-service-height"  data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="300ms">
						<img class="new-services-icons loading" data-src="images/income_service.svg">
                         <h4>Comptabilité et gestion des salaires</h4> 
                         <p class="text-center">  
						 La comptabilité est un outil de gestion de données financières qui permet aux entreprises...
                        </p>
                        <a href="comptabilite.php" target="_blank">Lire la suite</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-services ">
                        <div class="box-service text-center wow bounceInUp"  data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="600ms">
						<img class="new-services-icons loading" data-src="images/percentage_service.svg">
                         <h4>DÉCOMPTE TVA</h4>
                         <p class="text-center">
						 La taxe sur la valeur ajoutée est un impôt indirect collecté et perçu par la confédération aux différents...
                        </p>
                        <a href="decompte-tva.php" target="_blank">Lire la suite</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-services">
                        <div class="box-service text-center wow bounceInUp fix-service-height"  data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="700ms">
						<img class="new-services-icons loading" data-src="images/taxes_service.svg">
                         <h4>Déclaration d'impôt Personne morale</h4>
                         <p class="text-center">
						 Selon le droit suisse, le terme personne morale comprend les sociétés à responsabilité...
                        </p>
                        <a href="declaration-d-impot-des-personnes-morales.php" target="_blank">Lire la suite</a>
                        </div>
                    </div>
                </div>
					</div>
              </div>
            </div>
        </div>
		<!-- End our Sevvices  -->
		  
		  <!--// Main Section \\-->
		  <div class="tax-main-section about-full wow ">
			<div class="container">
			  <div class="row">
				<div class="col-md-6">
				  <div class="tax-table">
					<div class="tax-table-cell">
					  <div class="about-us wow zoomIn" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
						<font color="#E0C56E"><a class="section-title">Qui sommes-nous ?</a></font>					   
						<p class="tax-manager-pragh"> <dfn>Fiduciaire Tax Manager </dfn> est une société active dans le service administratif et conseil fiscal basé à Lausanne. Nous préparons principalement des déclarations d’impôts pour les personnes physiques et morales, ainsi que d’autres tâches liées à l’investissement et la gestion d’entrepriset tel que la comptabilité et décompte <abbr title="Taxe sur la valeur ajoutée">TVA</abbr> , gestion des salaires et création d'entreprise. Nos expériences et connaissances des lois fiscales suisses font de nous l’une des meilleures compétences sur le marché suisse, notre étude est souvent sollicitée par plusieurs écoles et universités suisses afin de partager nos connaissances et expériences en fiscalité ; nous avons déjà contribué à la formation de plusieurs cadres qui occupent actuellement des postes très importants dans diverses entreprises. </p>
						
						<a href="qui-sommes-nous.php" class="simple-btn">Lire la suite</a>
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="tax-about-video wow fadeInRight" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
				  	<div class="border-img">
				  		<img class="loading" data-src="images/fiduciaire-pully.jpg" alt="Tax-Manger-logo">
				  		<span class="play" style="cursor:pointer"><i class="fa fa-play fa-4x btn-play" id="btn-play"></i></span>
						<video width="100%" height="300px" id="video" controls>
						</video>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <!--// Main Section \\-->
		  <!-- Start We care about our Clients  -->
		  <div class="we-care text-center wow slideInUp " data-wow-offset="550"  data-wow-iteration="1" data-wow-duration="900ms">
		  		<h3 class="care-title">Nous nous soucions de nos clients</h3>
		  </div>
		  <!--// Main Section \\-->
		  <div class="tax-main-section side-services-full">
			<div class="container">
			  <div class="row">
				<div class="col-md-6">
					<div class="tax-about-img  wow fadeInLeftBig"  data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms"  >
						<div class="tax-border-img ">
							<div class="border-bg" style="background-image: url('./images/fiduciaire-lutry.jpg')">  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
				  <div class="tax-table">
					<div class="tax-table-cell">
					  <div class="side-services wow zoomIn " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" >
						<h3 class="section-title">déclaration d'impôt</h3>
						<p>Il est souvent difficile de préparer correctement votre déclaration d'impôt, une déclaration correctement préparée par une société fiduciaire expérimentée réduit considérablement votre charge fiscale en Suisse et à l'étranger. Nous sommes basés actuellement à Lausanne et possédons des succursales à Nyon et Genève, nous couvrant les besoins de toute la Suisse romande.</p>
						<p>Notre étude prend en charge les déductions qui sont adaptées à votre situation selon les nouvelles pratiques et lois fiscales. Nous vous proposons notre compétence pour les déclarations d’impôts extrêmement complexes, sans exclure les déclarations simples et toujours aux meilleurs prix.</p>
						<a href="declaration-d-impot-pour-les-particuliers.php" class="simple-btn">Lire la suite</a>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <!--// Main Section \\-->
		  
		  <!--// Main Section \\-->
		  <div class="tax-main-section side-services2-full  ">
			<div class="container">
			  <div class="row">
				<div class="col-md-6">
				  <div class="tax-table">
					<div class="tax-table-cell">
					  <div class="side-services wow zoomIn"  data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
						
						<h3 class="section-title">Création d'entreprise</h3>
						<p>La création d'entreprise est une étape très importante pour chaque entrepreneur. Avant de commencer, il est important de planifier votre démarrage en choisissant la forme juridique appropriée à votre secteur d'activité, vos charges et votre chiffre d’affaire.</p>
						<p>Toujours en contact avec les autorités du canton de Vaud et Genève concernant les nouvelles pratiques fiscales, nous trouvons toujours la meilleure solution pour nos clients qu'ils soient en Suisse ou à l'étranger.</p>
						<a href="creation-d-entreprise.php" class="simple-btn">Lire la suite</a>
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-md-6">
					<div class="tax-about-img wow fadeInRightBig  " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
						<div class="tax-border-img-two float-right " >
							<div class="border-bg-two" style="background-image: url('./images/fiduciaire-geneve.jpg')">  </div>
						</div>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		  <!--// Main Section \\-->
		  
		  <!--// Main Section \\-->
		  <div class="tax-main-section side-services-full">
			<div class="container">
			  <div class="row">
				<div class="col-md-6">
					<div class="tax-about-img  wow fadeInLeftBig " data-wow-offset="500"  data-wow-iteration="1" data-wow-duration="900ms">
						<div class="tax-border-img">
							<div class="border-bg" style="background-image: url('./images/comptabilite-salaire-tva.jpg')">  </div>
						</div>
					</div></div>
				<div class="col-md-6">
				  <div class="tax-table">
					<div class="tax-table-cell">
					  <div class="side-services wow zoomIn" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
						<h3 class="section-title">Comptabilité et gestion des salaires</h3>
						<p>Vous pouvez désormais gérer votre comptabilité grâce aux nouveaux outils basés sur le Cloud que nous avons mis à la disposition de la totalité de nos clientes entreprises, il convient à chaque entreprise de suivre et contrôler le développement continu de son activité par une meilleure planification avant la prise de chaque décision. Il est possible d'influencer considérablement le comportement des collaborateurs actifs dans l'entreprise en fixant des objectifs qualitatifs quantitatifs.</p>
						<p>Lorsque nous parlons de comptabilité, nous ne pouvons pas nous s'empêcher d'inclure la gestion de la facturation et le trafic des paiements qui, grâce aux nouvelles technologies et à la collaboration des banques et de diverses organisations financières, cette tâche est devenue plus facile à gérer par les petites et moyennes entreprises. Cependant, la gestion des salaires est parfois complexe pour certains secteurs d'activité, pour cette raison, nous prenons le temps nécessaire pour que nos clients puissent gérer facilement leurs relations avec les assurances et les caisses AVS. </p>
						<a href="comptabilite.php" class="simple-btn">Lire la suite</a>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <!--// Main Section \\-->
		  
		  <!--// Main Section \\-->
		  <div class="tax-main-section side-services2-full">
			<div class="container">
			  <div class="row">
				<div class="col-md-6">
				  <div class="tax-table">
					<div class="tax-table-cell">
					  <div class="side-services wow zoomIn" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
						<h3 class="section-title">Décompte TVA</h3>
						<p>La taxe sur la valeur ajoutée est un impôt indirect collecté et perçu par la confédération aux différents stades de production, distributions. Cet impôt impose la consommation finale des biens et services sur la totalité du territoire suisse.</p>
						<p>La taxe sur la valeur ajoutée doit être collectée par les différents sujets de l’impôt, on entend par sujets d’impôt dans le cas de la TVA toutes personnes physiques et morales exerçant une activité professionnelle ou commerciale en vue de réaliser des recettes, à noter que les organisations sans but lucratif sont-elles aussi considérées en tant que des sujets d’impôts. Ces personnes physiques et morales sont néanmoins libérées de l’assujettissement de la taxe sur la valeur ajoutée si leur chiffre d’affaires réalisé sur la totalité du territoire suisse ne dépasse pas 100’000 CHF. Pour les sociétés sportives ou culturelles sans but lucratif, la limite est fixée à 150’000 CHF paran.</p>
						<a href="decompte-tva.php" class="simple-btn">Lire la suite</a>
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-md-6">
					<div class="tax-about-img wow fadeInRightBig " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
						<div class="tax-border-img-two float-right">
							<div class="border-bg-two" style="background-image: url('./images/salaire.jpg')" >  </div>
						</div>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		  <!--// Main Section \\-->
		  <!-- End We care about our Clients  -->
		</div>
		
		<!-- Start readuce taxes  -->
		<div class="readuce-taxes">
			<div class="container">
				<div class=" readuce-taxes-title text-center wow slideInUp " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="600ms">
                      <h3 class="redcue-title text-uppercase">RÉDUIRE VOS IMPÔTS</h3>
                      <p class="readuce-taxes-pragh text-center wow zoomIn" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="700ms">
					  Il est évident que chaque contribuable estime qu’il paye plus d’impôt qu’il en faut, néanmoins le système fiscale suisse nous laisse quelques choix tout à fait légaux pouvant réduire votre charge fiscale,
					   nous allons donc essayer de vous donner quelques solutions qui peuvent être plus au moins adapté à votre situation.
                      </p>
				</div>
				<div class="row">
					<div class="col-xs-6 mx-auto">
						<div class="reduce-box text-center wow bounceInUp " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="350ms">  
								<img class="mx-auto d-block rounded-circle loading" data-src="images/fiduciaire-montreux-lausanne.jpg" alt="2rd-piliar">
								<a href="contribution-au-2eme-pilier.php" target="_blank" class="text ">CONTRIBUTION AU 2ÉME PILIER</a>
						</div>					
					</div>
					<div class="col-xs-6 mx-auto">
						<div class="reduce-box text-center wow bounceInUp"  data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="350ms">
								<img class="mx-auto d-block rounded-circle loading" data-src="images/fiduciaire-nyon-geneve.jpg" alt="3rd-piliar">
								<a href="contribution-au-3eme-pilier.php" target="_blank" class="text ">CONTRIBUTION AU 3ÉME PILIER</a>
						</div>					
					</div>
					<div class="col-xs-6 mx-auto">
						<div class="reduce-box text-center wow bounceInUp "  data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="350ms">
								<img class="mx-auto d-block rounded-circle loading" data-src="images/fiduciaire-pully-gland-renens.jpg" alt="choise">
								<a href="choix-du-canton-et-de-la-commune.php" target="_blank" class="text ">CHOIX DU CANTON ET DE LA COMMUNE</a>
						</div>					
					</div>
					<div class="col-xs-6 mx-auto">
						<div class="reduce-box text-center  wow bounceInUp"   data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="350ms" >
								<img class="mx-auto d-block rounded-circle loading" data-src="images/valuing.jpg" alt="valuing">
								<a href="deduction-des-dons.php" target="_blank" class="text ">DÉDUCTION DES DONS</a>
						</div>					
					</div>
					<div class="col-xs-6 mx-auto">
						<div class="reduce-box text-center wow bounceInUp"    data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="350ms">
								<img class="mx-auto d-block rounded-circle loading" data-src="images/fiduciaire-nyon-lausanne-montreux.jpg" alt="donation">
								<a href="deduction-des-frais-medicaux.php" target="_blank" class="text ">DÉDUCTION DES FRAIS MÉDICAUX</a>
						</div>					
					</div>
					<div class="col-xs-6 mx-auto">
						<div class="reduce-box text-center wow bounceInUp"    data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="350ms">
								<img class="mx-auto d-block rounded-circle loading" data-src="images/fiduciaire-vaud.jpg" alt="pers">
								<a href="faire-valoir-les-personnes-a-charges.php" target="_blank" class="text ">FAIRE VALOIR LES PERSONNES À CHARGES</a>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- End readuce taxes  -->
		<!--// Main Content \\-->
		
		<?php include "includes/footer.php" ?>