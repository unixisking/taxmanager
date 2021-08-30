<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tax Manager | Déclaration d’impôt pour les particuliers </title>
<?php include "includes/head.php" ?>
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="tax-main-wrapper">

        <!--// Header \\-->
        <header id="tax-header" class="tax-header-one">
            <div class="tax-top-strip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="index.php" class="logo"><img src="images/logo-black.png" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <ul class="ec-user-section">
                                <li><a href="contact-us.php"><i class="fa fa-handshake-o"></i>Contact</a></li>
                                <li>
                                    <a href="javascript:void(0)" class="tax-fr">FR</a>
                                    <div class="lang">
                                        <a href="en/services.php">English</a>
                                        <a href="services.php" class="active">French</a>
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
                                        <a class="nav-link" href="qui-sommes-nous.php">Qui sommes-nous </a>
                                      </li>
                                      <li class="nav-item b">
                                        <a class="nav-link" href="services.php">Nos Services</a>
                                        <div class="nav-mega-menu">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="tax-table">
                                                            <div class="tax-table-cell">
                                                                <div class="nav-mega">
                                                                    <h5>Rendez-vous</h5>
                                                                    <a href="contact-us.php"><img src="images/magnifying-glasss.png" width=90 height=89> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="nav-mega">
                                                                    <h2><i class="fa fa-users"></i> <a href="declaration-d-impot-pour-les-particuliers.php">Déclaration d'impôt pour les particuliers</a></h2>
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
                                                                    <h2><i class="fa fa-briefcase"></i> <a href="creation-d-entreprise.php">Création d'entreprise</a></h2>
                                                                    <ul>
                                                                        <li><h3><a href="le-choix-du-statut-juridique-des-entreprises.php">Le choix du statut juridique des entreprises</a></h3></li>
                                                                        <li><h3><a href="avantages-et-inconvenients-de-la-raison-individuelle-et-societe-en-nom-collectif.php">Avantages et inconvénients de la  raison individuelle et société en nom collectif</a></h3></li>
                                                                        <li><h3><a href="avantages-et-les-inconvenients-de-la-sa-et-sarl.php">Avantages et les inconvénients de la SA et Sàrl</a></h3></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="padding-left: 50px;">
                                                                <div class="nav-mega">
                                                                    <h2><i class="fa fa-calculator"></i> <a href="comptabilite.php">Comptabilité</a></h2>
                                                                    <ul>
                                                                        <li><h3><a href="comptabilite-pour-les-independants.php">Comptabilité pour les indépendants (personnes physiques)</a></h3></li>
                                                                        <li><h3><a href="comptabilite-pour-les-personnes-morales.php">Comptabilité pour les personnes morales</a></h3></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nav-mega">
                                                                    <h2><i class="fa fa-address-card-o"></i> <a href="decompte-tva.php">Décompte TVA</a></h2>
                                                                    <ul>
                                                                        <li><h3><a href="decompte-de-la-tva-selon-la-methode-normale-et-nette.php">Décompte de la TVA selon la méthode normale et nette</a></h3></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nav-mega">
                                                                    <h2><i class="fa fa-money"></i> <a href="declaration-d-impot-des-personnes-morales.php">Déclaration d'impôt des personnes morales</a></h2>
                                                                    <ul>
                                                                        <li><h3><a href="assujettissement-illimite.php">Assujettissement illimité</a></h3></li>
                                                                        <li><h3><a href="assujettissement-limite.php">Assujettissement limité</a></h3></li>
                                                                        <li><h3><a href="controle-et-reclamation-contre-la-decisions-de-taxation-des-personnes-morales.php">Contrôle et réclamation contre la décisions de taxation des personnes morales</a></h3></li>
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
                                      </li>
                                      <li class="nav-item a">
                                        <a class="nav-link" href="comment-reduire-ses-impots.php">Réduire mes impôts</a>
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
                            <div class="fancy-title left-align"><h1>Déclaration d’impôt pour les particuliers </h1></div>
                            <div class="services-wrap">
                                <p>Notre étude prend en charge les déductions qui sont adaptées à votre situation selon les nouvelles pratiques et lois fiscales. Nous vous proposons notre compétence pour les déclarations d’impôts extrêmement complexes, sans exclure les déclarations simples et toujours aux meilleurs prix.</p>
                                <p>Préparer une déclaration d’impôts complexe (revenus étrangers, bien immobilier en Suisse et à l’étranger, assurance vie, actions et parts sociales…) avec des connaissances limitées en fiscalité pourrait exposer les contribuables à des sanctions fiscales : pour cette raison, nous les invitons à s’adresser à des cabinets tels que le nôtre.</p>
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