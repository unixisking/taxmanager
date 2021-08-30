<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fiduciaire Tax Manager | Décompte TVA</title>

    <!-- Css Files -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/animate.min.css">
    <link href="css/responsive.css" rel="stylesheet">
    <script type="text/javascript" src="script/jquery.js"></script>
    <script src="script/jquery.validate.js"></script>
    <script src="https://kit.fontawesome.com/bf6205eb78.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script/additional-methods.min.js"></script>
    <style type="text/css">
    	.new-icons{
    		width:16px;
    		height:16px
    	}
		.nav-mega .icon-container {
		    position: absolute;
		    left: 0;
		    top: 50%;
		    border: 1px solid;
		    font-size: 14px;
		    border-radius: 100%;
		    text-align: center;
		    padding: 0 0 0 1px;
		    width: 30px;
		    margin: -24px 0 0;
		    height: 30px;
		    line-height: 29px;
		}
    </style>
  </head>  <body>
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
		<div class="subheader" style="background-image: url('images/vta.jpg');">
        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="tax-main-content">

            <!--// Main Section \\-->
            <div class="tax-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="sidebar">
                                <ul>
                                    <li>
                                        <a href="services.php">Services</a>
                                        <ul>
                                            <li class="tax-side-dropdown"><i class="fa fa-angle-down"></i>
                                                <a href="imposition-des-particuliers.php">Imposition des particuliers</a>
                                                <ul class="service-drop">
                                                    <li><a href="declaration-d-impot-ordinaire.php">Déclaration d'impôt ordinaire</a></li>
                                                    <li><a href="demande-de-rectification-de-l-impot-source.php">Demande de rectification de l’impôt source</a></li>
                                                    <li><a href="revenus-locatifs.php">Revenus locatifs</a></li>
                                                    <li><a href="taxation-des-gains-immobiliers.php">Taxation des gains immobiliers</a></li>
                                                    <li><a href="modification-et-paiement-des-acomptes.php">Modification et paiement des acomptes</a></li>
                                                    <li><a href="controle-et-reclamation-contre-decision-de-taxation.php">Contrôle et réclamation contre décision de taxation</a></li>
                                                </ul>
                                            </li>
                                            <li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><a href="creation-d-entreprise.php">Création d'entreprise</a>
                                                <ul class="service-drop">
                                                    <li><a href="le-choix-du-statut-juridique-des-entreprises.php">Le choix du statut juridique des entreprises</a></li>
                                                    <li><a href="avantages-et-inconvenients-de-la-raison-individuelle-et-societe-en-nom-collectif.php">Avantages et inconvénients de la  raison individuelle et société en nom collectif</a></li>
                                                    <li><a href="avantages-et-les-inconvenients-de-la-sa-et-sarl.php">Avantages et les inconvénients de la SA et Sàrl</a></li>
                                                </ul>
                                            </li>
                                            <li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><a href="comptabilite.php">Comptabilité et gestion des salaires</a>
                                                <ul class="service-drop">
                                                    <li><a href="comptabilite-pour-les-independants.php">Comptabilité pour les indépendants (personnes physiques)</a></li>
                                                    <li><a href="comptabilite-pour-les-personnes-morales.php">Comptabilité pour les personnes morales</a></li>
												  	<li><a href="gestion-des-salaires.php">Gestion des salaires</a></li>
                                                </ul>
                                            </li>
                                            <li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><a href="decompte-tva.php">Décompte TVA</a>
                                                <ul class="service-drop">
                                                    <li><a href="decompte-de-la-tva-selon-la-methode-normale-et-nette.php">Décompte de la TVA selon la méthode normale et nette</a></li>
                                                </ul>
                                            </li>
                                            <li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><a href="declaration-d-impot-des-personnes-morales.php">Déclaration d'impôt des personnes morales</a>
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
                        </div>
                        <div class="col-md-8">
                            <div class="fancy-title left-align"><h1>Décompte TVA</h1></div>
                            <div class="services-wrap">
                                <p>La taxe sur la valeur ajoutée est un impôt indirect collecté et perçu par la confédération aux différents stades de production, distributions. Cet impôt impose la consommation finale des biens et services sur la totalité du territoire suisse.</p>
                                <h3 class="section-title sub">Comment la TVA est-elle collectée à différents niveaux ?</h3>
                                <p>La taxe sur la valeur ajoutée doit être collectée par les différents sujets de l’impôt, on entend par sujets d’impôt dans le cas de la TVA toutes personnes physiques et morales exerçant une activité professionnelle ou commerciale en vue de réaliser des recettes, à noter que les organisations sans but lucratif sont-elles aussi considérées en tant que des sujets d’impôts. Ces personnes physiques et morales sont néanmoins libérées de l’assujettissement de la taxe sur la valeur ajoutée si leur chiffre d’affaires réalisé sur la totalité du territoire suisse ne dépasse pas 100’000 CHF. Pour les sociétés sportives ou culturelles sans but lucratif, la limite est fixée à 150’000 CHF par an.</p>
                                <p>La taxe sur la valeur ajoutée ne touche que le consommateur final, la taxe sur la valeur ajoutée payé pour l’achat de marchandises, prestations et d’autre charges d’exploitation est considérer en tant qu’impôt préalable que les personnes physiques et morales récupèrent à l’aide du décompte TVA. Les sujets de l’impôt accomplissent le rôle d’intermédiaire afin de transmettre la taxe sur la valeur ajoutée du consommateur finale à l’administration fédérale de contribution.</p>
                                <h3 class="section-title sub">Période du décompte:</h3>
                                <p>Selon le chiffre d’affaires et mode de gestion interne, le décompte se fait de trois façons différentes ; </p>
                                <ul>
                                    <li>La majorité des cas, le décompte se fait trimestriellement. </li>
                                    <li>Semestriellement, s’il est déterminé en utilisant la méthode des taux de la dette fiscale nette.</li>
                                    <li>Si l’impôt préalable dépasse régulièrement l’impôt en faveur de l’administration fiscale, l’assujetti peur demandé un décompte mensuel.</li>
                                </ul>
                                <p>Dans certains cas bien précis, l’assujetti peut faire une demande pour d’autres périodes de décompte, dans ce cas, l’administration fédérale de contribution donne son approbation et fixe les conditions.</p>
                                <h3 class="section-title sub">Quelle sont les taux de la TVA en suisse ?</h3>
                                <ul>
                                    <li>
                                        <h6>Taux normal 7,7% ;</h6>
                                        <p>Ce taux est applicable pour tous les objets fiscaux qui ne bénéficie d’exonération ou taux réduit, exemple : achat de voitures, montres, bijoux, vêtements, alcool, services, </p>
                                    </li>
                                    <li>
                                        <h6>Taux spécial 3,7% ;</h6>
                                        <p>Hôtellerie, hébergement, petit-déjeuner compris seulement pour les personnes qui ont passé la nuit à l’hôtel ou l’installation d’hébergement. </p>
                                    </li>
                                    <li>
                                        <h6>Taux réduit 2,5% ;</h6>
                                        <p>Produits alimentaires hormis les prestations fournis dans des restaurant ou boissons alcooliques, livres, journaux, médicaments et autres prévu pour l’usage quotidien.</p>
                                    </li>
                                </ul>
                                <div class="center"><a href="contact-us.php" class="contact-btn">contacez-nous</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

       <?php include "includes/footer.php" ?>