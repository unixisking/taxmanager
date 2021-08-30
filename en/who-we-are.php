<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tax Manager | Who we are</title>
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
		<div class="subheader" style="background-image: url('../images/who-we-are.jpg');">
        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="tax-main-content" style="padding-bottom: 0px;">

            <!--// Main Section \\-->
            <div class="tax-main-section about-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tax-table">
                                <div class="tax-table-cell">
                                    <div class="about-us">
                                        <h1 class="section-title">Who we are?</h1>
                                        <p>Tax Manager is a company active in the administrative service and tax consultancy. We mainly prepare tax returns for natural persons (individuals) and legal entities, as well as other tasks related to investment and business management. Our experience and knowledge of Swiss tax laws make us one of the best expertise on the Swiss market, our study is often solicited by several Swiss schools and universities in order to share with them our knowledge and experience in taxation; we have already contributed to the training of several executives who currently hold very important positions in various companies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tax-about-video wow fadeInRight" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" style="margin-top: -50px">
                                <div class="border-img">
                                    <img src="../images/logo-black.png" alt="Tax-Manger-logo">
                                    <span class="play" style="cursor:pointer"><i class="fa fa-play fa-4x btn-play" id="btn-play"></i></span>
                                    <video width="100%" height="300px"id="video" >
                                        <source src="/images/video.mp4" type="video/mp4">
                                        <source src="video.ogg" type="video/ogg">
                                        <source src="video.webm" type="video/webm">
                                    </video>
                                </div>
                            </div>
				        </div>
                        <div class="col-md-12">
                            <p>Concerned with the satisfaction of our customers, we have capitalized on the strengths and effectiveness of our employees, in order to target the expectations of our customers while setting up a personalized monitoring system offering solutions and financial advice tailored to the needs of each of our customers. We are committed to providing you with a quality service that includes the discretion, availability and total commitment of our employees.</p>
                            <p>The competitiveness of the cantons and the attractiveness of the Swiss tax system for legal entities, added to our mastery of the law and tax case law, leave us a lot of flexibility to find the optimal solution for our Swiss and international clients.</p>
                            <div class="center"><a href="contact-us.php" class="contact-btn">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

      <?php include "includes/footer.php" ?>