<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fiducaire Tax Manager | Décompte de la TVA</title>
	<meta name="description" content="Dans cet article, nous expliquons le décompte de la TVA selon la méthode normale et nette. le choix de la méthode dépend de votre activité le chiffre d'affaire de votre entreprise."/>
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
                            <div class="fancy-title left-align"><h1>Décompte de la TVA selon la méthode normale et nette</h1></div>
                            <div class="services-wrap">
                                <h3 class="section-title sub">Le décompte de la TVA selon la méthode de la dette fiscale nette :</h3>
                                <p>Le taux de la dette fiscale nette ne s’applique que pour les assujetties dont le chiffre d’affaires des prestations imposable ne dépasse pas 5’005’000 CHF seulement si la dette fiscale ne dépasse pas 103’000 CHF. Cela se calcule en multipliant le chiffre d’affaires des prestations imposable par le taux d’imposition net spécifique produits ou secteurs.</p>
                                <h3 class="section-title sub">Quelles sont les taux appliqués pour la méthode de la dette fiscale nette ?</h3>
                                <p>Vu le grand nombre des taux appliqués pour les différents secteurs d’activité, nous vous invitions de consulter le site de l’administration fédérale de contribution en cliquant sur ce lien. </p>
                                <p><a href="https://www.admin.ch/opc/fr/classified-compilation/20102858/index.html#app1" target="_blank">lien vers le site Web de l'administration fédérale pour les taux de la dette fiscale nette</a></p>
                                <p>Le choix de la méthode de la dette fiscale nette ne peut être intéressante que pour les assujetties qui ne justifie pas suffisamment d’impôt préalable frappant l’achat de marchandise, services et autre charge d’exploitation.</p>
                                <p><strong>Exemple 1:</strong>  le taux de la dette fiscale nette pour une entreprise active dans le domaine du service informatique est de 6,5%, si on estime que l’entreprise à réaliser un chiffre d’affaire net de 800’000 CHF imposer au taux normal de 7,7% et que cette entreprise à consommer des biens et service pour un montant de 50’000 CHF net aussi au taux normal, le calcul se présente ainsi ;</p>
                                <h3 class="section-title sub">1)- Selon la méthode du décompte normal :</h3>
                                <p>Comme nous l’avons expliqué précédemment, le décompte se fait trimestriellement, pour la simplification de l’exemple, nous allons faire un calcul pour toute l’année fiscale ;</p>
                                <p>TVA sur chiffre d’affaire net 800’00×7,7% = 61’600 CHF.</p>
                                <p>TVA préalable sur marchandises, services et autres charges d’exploitation 50’000×7,7%= 3’850 CHF. </p>
                                <p>TVA en faveur de l’administration fiscale de contribution se calcule ainsi 61’600-3’850=57’750 CHF.</p>
                                <h3 class="section-title sub">2)- Selon la méthode de la dette fiscale nette :</h3>
                                <p>TVA sur chiffre d’affaire net 800’000×6,5% = 52’000 CHF. </p>
                                <p>Dans ce cas, il est plus judicieux pour cette entreprise de choisir la méthode de la dette fiscale nette, cela lui permet de payer moins d’impôt que de faire un décompte normal.</p>
                                <p><strong>Exemple 2:</strong>  le taux de la dette fiscale nette pour une entreprise active dans le domaine de la carrosserie et tôlerie est de 4,3%, si on estime que l’entreprise à réaliser un chiffre d’affaire net de 1’200’000 CHF imposer au taux normal de 7,7% et à consommer des biens et service pour un montant de 900’000 CHF net aussi au taux normal, le calcul se présente ainsi ;</p>
                                <h3 class="section-title sub">A- Selon la méthode du décompte normal :</h3>
                                <p>Comme nous l’avons expliqué précédemment, le décompte se fait trimestriellement, pour la simplification de l’exemple, nous allons faire un calcul pour toute l’année fiscale ;</p>
                                <p>TVA sur chiffre d’affaire net 1’200’000×7,7% = 92’400 CHF.</p>
                                <p>TVA préalable sur marchandises, services et autres charges d’exploitation 900’000×7,7%= 69’300 CHF. </p>
                                <p>TVA en faveur de l’administration fiscale de contribution = 23’100 CHF.</p>
                                <h3 class="section-title sub">B- Selon la méthode de la dette fiscale nette :</h3>
                                <p>TVA sur chiffre d’affaire net 1’200’000×4,3% = 51’600 CHF. </p>
                                <p>Dans ce cas précis, il est préférable pour cette entreprise d’adopter la méthode normale, cela lui permettra de payer réellement ce qu’elle doit réellement à l’administration fédérale.</p>
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