<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tax Manager | VAT settlement according to the normal and net method</title>
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
                            <div class="fancy-title left-align"><h1>VAT settlement according to the normal and net method</h1></div>
                            <div class="services-wrap">
                                <h3 class="section-title sub">The VAT settlement according to the net tax debt method:</h3>
                                <p>The net tax debt rate is applied only to taxpayers which taxable benefits' revenue does not exceed CHF 5'005'000 only provided the tax debt does not exceed CHF 103'000 CHF. This is calculated by multiplying the taxable benefits' revenue by the specific net tax rate for products or sectors.</p>
                                <h3 class="section-title sub">What are the applied rates for the net tax debt method?</h3>
                                <p>Due to the large number of applied rates for the different business areas, we invite you to check the federal tax administration site by clicking on the following link :</p>
                                <p><a href="https://www.admin.ch/opc/fr/classified-compilation/20102858/index.html#app1" target="_blank">link to Federal Administration website for rates.</a></p>
                                <p>Choosing the net tax debt method can only be interesting for taxpayers who do not justify enough input tax on merchandise purchase, services and other operating expenses.</p>
                                <p><strong>Example 1:</strong>  The net tax debt rate for companies operating in the field of IT services is 6,5% , if we estimate the company's  net revenue to CHF 800'000 taxed at the standard rate of 7,7%   and that this company has also consumed goods and services worth a net CHF 50'000 at the standard rate, the calculation  is as follows : </p>
                                <h3 class="section-title sub">1)- According to the normal settlement method:</h3>
                                <p>As we have already explained it, the settlement is done quarterly. In order to simplify the example, we are going to do the calculation for the whole fiscal year;</p>
                                <p>VAT on the net revenue 800'000x7,7%= CHF 61,600.</p>
                                <p>Advance VAT on goods, services and other operating expenses 50'000x7,7%= CHF 3'850.</p>
                                <p>VAT in favor of the federal tax administration is then 61’600-3'850= CHF 57’750.</p>
                                <h3 class="section-title sub">2)- According to the net tax debt method:</h3>
                                <p>VAT on the net revenue 800’000×6,5%= CHF 52'000.</p>
                                <p>In this case, it is better for the company to choose the net tax debt method, this allows it to pay less tax that it would with a normal settlement.</p>
                                <p><strong>Example 2:</strong>  The net tax debt rate for a company operating in the field of bodywork and sheet metal is 4,3%, if we estimate the company's  net revenue to CHF 800'000 taxed at the standard rate of 7,7%   and that this company has also consumed goods and services worth a net CHF 50'000 at the standard rate, the calculation  is as follows ;</p>
                                <h3 class="section-title sub">A- According to the normal settlement method:</h3>
                                <p>As we have already explained it, the settlement is done quarterly. In order to simplify the example, we are going to do the calculation for the whole fiscal year;</p>
                                <p>VAT on the net revenue 1'200'000×7,7%= CHF 92'400.</p>
                                <p>VAT on the net revenue 900’000×7,7%= CHF 69’300.</p>
                                <p>VAT in favor of the federal tax administration= CHF 23'100.</p>
                                <h3 class="section-title sub">B- According to the net tax debt method:</h3>
                                <p>VAT on the net revenue 1'200'000×4,3%= CHF 51'600.</p>
                                <p>In this case, it is better for the company to choose the net tax debt method, this allows it to pay less tax that it would with a normal settlement.</p>
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