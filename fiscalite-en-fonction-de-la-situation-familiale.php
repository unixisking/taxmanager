<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tax Manager | Fiscalité en fonction de la situation familiale</title>
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
		<div class="subheader" style="background-image: url('images/family.jpg');">
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
                            <div class="fancy-title left-align"><h1>Fiscalité en fonction de la situation familiale</h1></div>
                            <div class="services-wrap">
                                <p>La fiscalité des personnes physiques (individus) dépend de leur situation familiale et non de l’exercice d’une activité lucrative, que vous soyez salarié ou indépendant, votre taxation dépendra de plusieurs éléments exposés ci-dessus sont pris en compte afin de déterminer votre situation familiale ; </p>
                                <h5 class="section-title sub">Personne seule (célibataire, divorcée, séparée)</h5>
                                <p>Une seule déclaration d’impôts.</p>
                                <h5 class="section-title sub">Couple marié ou personnes enregistrées avec ou sans enfants</h5>
                                <p>Le revenu et la fortune des époux ou partenaires enregistrés sont additionnés quel que soit le régime mentionné. Une seule déclaration d’impôts est prise en compte dans les cas suivants :</p>
                                <ul>
                                    <li>Couple marié ou partenaire enregistré sans enfants (ménage commun).</li>
                                    <li>o   Couple marié ou partenaire enregistré avec un ou plusieurs enfants mineurs (ménage commun).</li>
                                    <li>o   Personne seule (célibataire, séparée, divorcée) détenant une autorité parentale d’un ou plusieurs enfants.</li>
                                    <li>o   Couple marié ou partenaire enregistré avec un ou des enfants mineurs.</li>
                                </ul>
                                <p><strong>Remarque ¹:</strong> Les revenus des enfants mineurs ne sont plus indexés à la déclaration du détenteur de l’autorité parentale une fois que l’enfant mineur exerce une activité lucrative. Quant à la fortune des enfants mineurs, elle est ajoutée à celle du détenteur de l’autorité parentale.</p>
                                <p><strong>Remarque ²:</strong> Les enfants majeurs ont l’obligation de déposer une déclaration d’impôts même s’ils résident encore chez leurs parents : tous les revenus, fortunes, déductions relatives sont à enregistrer sur leur propre déclaration. À noter que les enfants majeurs en formation ou en apprentissage peuvent figurer à leur tour dans la déclaration des parents.</p>
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