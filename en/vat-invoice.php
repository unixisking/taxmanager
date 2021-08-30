<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tax Manager | VAT return</title>
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
		<div class="subheader" style="background-image: url('../images/vta.jpg');">
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
                                                <a href="individual-tax-return.php">Individual Tax return</a>
                                                <ul class="service-drop">
                                                    <li><a href="ordinary-tax-return.php">Ordinary tax return</a></li>
                                                    <li><a href="request-for-rectification-of-tax-at-source.php">Request for rectification of tax at source</a></li>
                                                    <li><a href="rental-income.php">Rental Income</a></li>
                                                    <li><a href="taxation-of-real-estate-gains.php">Taxation of real estate gains</a></li>
                                                    <li><a href="modification-and-payment-of-installments.php">Modification and payment of installments</a></li>
                                                    <li><a href="control-and-claim-against-tax-assessment.php">Control and claim against tax assessment</a></li>
                                                </ul>
                                            </li>
                                            <li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><a href="business-creation.php">Business Creation</a>
                                                <ul class="service-drop">
                                                    <li><a href="the-choice-of-the-legal-status-of-companies.php">The choice of the legal status of companies</a></li>
                                                    <li><a href="a-sole-proprietorship.php">Advantages and disadvantages of individual reason and partnership</a></li>
                                                    <li><a href="limited-liability-company.php">The advantages and disadvantages of SA and Sàrl</a></li>
                                                </ul>
                                            </li>
                                            <li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><a href="accounting.php">Accounting</a>
                                                <ul class="service-drop">
                                                    <li><a href="for-natural-persons.php">Accounting for the self-employed (individuals)</a></li>
                                                    <li><a href="accounting-for-legal-entities.php">Accounting for legal entities</a></li>
                                                </ul>
                                            </li>
                                            <li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><a href="vat-invoice.php">VAT invoice</a>
                                                <ul class="service-drop">
                                                    <li><a href="vat-settlement-according-to-the-normal-and-net-method.php">VAT settlement according to the normal and net method</a></li>
                                                </ul>
                                            </li>
                                            <li class="tax-side-dropdown"><i class="fa fa-angle-down"></i><a href="corporations-tax-return.php">Corporations Tax Return</a>
                                                <ul class="service-drop">
                                                    <li><a href="unlimited-subjection.php">Unlimited subjection</a></li>
                                                    <li><a href="limited-subjection.php">Limited subjection</a></li>
                                                    <li><a href="control-and-claim-against-tax-assessments-for-legal-entities.php">Control and claim against tax assessments for legal entities</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="fancy-title left-align"><h1>VAT return</h1></div>
                            <div class="services-wrap">
                                <p>The value-added tax is an indirect tax collected and perceived by the confederation at different stages of production and distribution. This tax taxes the final consumption of products and services throughout Switzerland. </p>
                                <h3 class="section-title sub">How is the VAT collected at different levels?</h3>
                                <p>The value-added tax must be collected by the different subject to taxes. We hear by subjects to tax concerning the VAT every natural person (individuals) or legal entity exercising a professional or commercial activity to generate revenues, non-profit organizations being also considered as subjects to tax. These natural persons (individuals) and legal entities are nonetheless freed from the liability for value-added tax if the revenue generated throughout Switzerland does not exceed CHF 100'000.</p>
                                <p>The limit if fixed up to CHF 150'000 per year for sports companies and non-profit organizations.</p>
                                <p>The valued-added tax only affects the final consumer. This tax paid for merchandise purchase, services and other operating costs is considered as an input tax that natural persons (individuals) and legal entities retrieve by means of the VAT statement. The subjects to taxes play the intermediate role to transmit the final consumer's value-added tax to the federal tax administration.</p>
                                <h3 class="section-title sub">Settlement period:</h3>
                                <p>Depending on the revenue and the internal management method, the settlement is done in three different ways: </p>
                                <ul>
                                    <li>In the majority of cases, the settlement is done quarterly.</li>
                                    <li>Biannually, if it's determined by using the net tax rate method.</li>
                                    <li>If the input tax exceeds frequently the tax administration's tax, the taxpayer can ask for a monthly settlement.</li>
                                </ul>
                                <p>In certain specific cases, the taxpayer may ask for other settlement periods, in this case, the federal tax administration gives its approbation and fixes conditions.</p>
                                <h3 class="section-title sub">What are the VAT rates in Switzerland? </h3>
                                <ul>
                                    <li>
                                        <h6>Normal rate 7,7%;</h6>
                                        <p>This rate is applicable for all taxable objects that do not benefit from exemption or reduced rate, for example: cars purchase, watches, jewelries, clothing, alcohol, services.</p>
                                    </li>
                                    <li>
                                        <h6>Special rate 3,7%;</h6>
                                        <p>Hotel business, hosting, breakfast included for people who passed the night in the hotel of the hosting facility only.</p>
                                    </li>
                                    <li>
                                        <h6>Reduced rate 2,5%;</h6>
                                        <p>Food products except restaurant services or alcoholic beverages, books, newspapers, medicines and other daily use items.</p>
                                    </li>
                                </ul>
                                <div class="center"><a href="contact-us.php" class="contact-btn">Contact Us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

      <?php include "includes/footer.php" ?>