<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tax Manager | Tax return</title>
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
		<div class="subheader" style="background-image: url('../images/individual.jpg');">
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
                            <div class="fancy-title left-align"><h1>Tax return</h1></div>
                            <div class="services-wrap">
                                <p>Our study supports deductions that are tailored to your situation according to new tax practices and laws. We offer you our expertise not only for extremely complex tax returns, but also for simple declarations and of course at the best prices.</p>
                                <p>Preparing a complex tax return (foreign income, property in Switzerland and abroad, life insurance, stocks and shares ...) with limited knowledge of taxation could expose taxpayers to tax penalties: for this reason, we invite these taxpayers to apply to firms such as ours.</p>
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