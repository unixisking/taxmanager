<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Fiduciaire Tax Manager | Nos services </title>
<?php include "includes/head.php" ?>
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="tax-main-wrapper">

        <!--// Header \\-->
        <?php include "includes/nav.php" ?>
        <!--// Header \\-->

		<!--// Main Banner \\-->
		<div class="subheader" style="background-image: url('images/individual.jpg');">
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
                                            <li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><a href="comptabilite.php">Comptabilité</a>
                                                <ul class="service-drop">
                                                    <li><a href="comptabilite-pour-les-independants.php">Comptabilité pour les indépendants (personnes physiques)</a></li>
                                                    <li><a href="comptabilite-pour-les-personnes-morales.php">Comptabilité pour les personnes morales</a></li>
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
                            <div class="fancy-title left-align"><h1> Nos services</h1></div>
                            <div class="services-wrap">
                                <p>Imposition des particuliers.</p>
                                <p>Création d'entreprise.</p>
							    <p>Création d'entreprise.</p>
							    <p>Comptabilité et gestion des salaires.</p>
							    <p>Décompte TVA.</p>
							    <p>Déclaration d'impôt des personnes morales.</p>
							  	
							 
							  
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