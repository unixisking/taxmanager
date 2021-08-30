<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tax Manager | Taxation according to the family situation</title>
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
		<div class="subheader" style="background-image: url('../images/family.jpg');">
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
                            <div class="fancy-title left-align"><h1>Taxation according to the family situation</h1></div>
                            <div class="services-wrap">
                                <p>The taxation of natural persons (individuals) depends on their family situation and not on the exercise of a gainful activity, whether you are employed or independent, your taxation will depend on several elements outlined above are considered to determine your family situation;</p>
                                <h5 class="section-title sub">Single person (single, divorced, separated)</h5>
                                <p>A single tax return.</p>
                                <h5 class="section-title sub">Married couple or registered persons with or without children</h5>
                                <p>The income and wealth of spouses or registered partners are added together regardless of the plan mentioned. Only one tax return is considered in the following cases: </p>
                                <ul>
                                    <li>Married couple or registered partner without children (common household).</li>
                                    <li>Married couple or registered partner with one or more minor children (common household).</li>
                                    <li>Single person (single, separated, divorced) with parental authority over one or more children.</li>
                                    <li>Married couple or registered partner with one or more minor children.</li>
                                </ul>
                                <p><strong>Note ¹:</strong> The income of minor children is no longer indexed to the declaration of the holder of parental authority once the minor child is in gainful employment. As for the assets of minor children, they are added to those of the holder of parental authority.</p>
                                <p><strong>Note ²:</strong> Adult children are required to file a tax return even if they still reside with their parents: all income, fortunes and related deductions are to be recorded on their own return. It should be noted that adult children in training or apprenticeship may in turn be included in the parents' declaration. </p>
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