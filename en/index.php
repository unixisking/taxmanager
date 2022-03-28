<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    .flex-fix {
            display: flex;
            justify-content: center;
        }
    .new-icons {
        width: 16px;
        height: 16px;
    }
    .nav-mega .icon-container {
    position: absolute;
    left: 0px;
    top: 50%;
    border: 1px solid;
    font-size: 14px;
    border-radius: 100%;
    text-align: center;
    padding: 0px 0px 0px 1px;
    width: 30px;
    margin: -24px 0 0;
    height: 30px;
    line-height: 29px;
    }
    .new-services-icons {
        width: 50px;
        height: 40px;
    }
    .col-services {
        flex: 0 0 20% !important;
    }
/*    .fix-service-height {
        height: 296px !important;
    }*/
    .our-services .box-service {
        width: 200px !important;
        height: 345px !important;
    }
    .our-services .box-service a {
        position: absolute;
        bottom: 30px;
        right: 80px;
    }

    @media (max-width: 767px) {
    .hide-mobile {
      display: none;
    }
  }
  @media (min-width: 768px) {
    .hide-desk {
      display: none;
    }
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tax Manager | Fiduciary Lausanne</title>
	<meta name="description" content="Tax Return, complaint against tax assessment, Accounting and VAT, Salary Management, Business création, tax advice, 
Modification and payment of installments"/>
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

		<!--// Main Banner Desktop \\-->
        <div class="tax-banner hide-mobile">
          <span class="banner-transparent"></span>
          <div class="tax-banner-slider">
            <div class="layer" style="background-image: url('../images/fiduciaire_new.avif');"><img src="../images/fiduciaire_new.avif" alt="fiduciary-vaud"></div>
            <div class="layer" style="background-image: url('../images/lausanne_new.avif');"><img src="../images/lausanne_new.avif" alt="fiduciary-lausanne"></div>
            <div class="layer" style="background-image: url('../images/comptabilite_new.jpg');"><img src="../images/comptabilite_new.jpg" alt="accounting"></div>
            <div class="layer" style="background-image: url('../images/tva_new.avif');"><img src="../images/tva_new.avif" alt="VAT"></div>
          </div>
          <div class="tax-banner-caption">
            <div class="tax-table">
              <div class="tax-table-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="banner-text">
                        <h1><font color="black"><font size="6">Swiss Fiduciary</font></font></h1>
                        <p><font color="black">Tax Manager is committed to making your<br>life easier</font></p>
                        <a href="contact-us.php"><img src="../images/fiduciaire-yverdon.webp" alt="fiduciary-yverdon"><font color="black"> Appointment</font></a>
                        <!-- <a href="#">Our Prices</a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--// Main Banner Desktop \\-->

        <!-- Start  our servies  -->
        <img class="hide-desk" src="../images/fiduciaire_new.avif">
        <div class="our-services">
            <div class="container">
               <div class=" our-services-title text-center wow slideInUp " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="1s">
                      <h3 class="services-title text-uppercase">our services</h3>
                      <p class="service-pragh text-center wow zoomIn" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="1s">
                            Our study supports deductions that are tailored to your situation according to new tax practices and laws. We offer you our expertise not only for extremely complex tax returns, but also for simple declarations and of course at the best prices.
                      </p>
                </div>
              <div class="servies-boxes  mx-auto ">
                    <div class="container">
                    <div class="row flex-fix">

                        <!-- New service Box -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-services ">
                            <div class="box-service text-center  wow bounceInUp" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
                            <img class="new-services-icons" src="../images/tax_service.svg">
                                <h4>Tax Return</h4>
                                <p class="text-center">
                                The creation of a company is a project that requires a lot of preparation, a bad decision could have an impact on the future of the company...
                                </p>
                                <a href="#" target="_blank">Read more</a>
                            </div>
                        </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-services">
                        <div class="box-service text-center  wow bounceInUp" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms">
                        <img class="new-services-icons" src="../images/idea_service.svg">
                            <h4>BUSINESS CREATION</h4>
                            <p class="text-center">
                            The creation of a company is a project that requires a lot of preparation, a bad decision could have an impact on the future of the company...
                            </p>
                            <a href="business-creation.php" target="_blank">Read More</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-services">
                        <div class="box-service text-center wow bounceInUp fix-3rd-service-height"  data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="300ms">
                        <img class="new-services-icons" src="../images/income_service.svg">
                         <h4>Accounting and Salary Management</h4> 
                         <p class="text-center">  
                            Accounting is a financial data management tool that lets companies and organizations such as associations and.....
                        </p>
                        <a href="accounting.php" target="_blank">Read More</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-services">
                        <div class="box-service text-center wow bounceInUp"  data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="600ms">
                        <img class="new-services-icons" src="../images/percentage_service.svg">
                         <h4>VAT RETURN</h4>
                         <p class="text-center">
                         The value-added tax is an indirect tax collected and perceived by the confederation at different stages of production and distribution...
                        </p>
                        <a href="vat-invoice.php" target="_blank">Read More</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-services">
                        <div class="box-service text-center wow bounceInUp "  data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="900ms" data-wow-delay="700ms">
                        <img class="new-services-icons" src="../images/taxes_service.svg">
                         <h4>Corporate Tax Retun</h4>
                         <p class="text-center">
                         According to the Swiss law, the word legal entity comprises limited liability companies, limited companies...
                        </p>
                        <a href="corporations-tax-return.php" target="_blank">Read More</a>
                        </div>
                    </div>
                </div>
                    </div>
              </div>
            </div>
        </div>
        <!-- End our Sevvices  -->

		  
		  
		<!-- Start readuce taxes  -->
		<section class="section">
			<div class="container">
				<div class="text-center wow slideInUp " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="600ms">
                      <h3 class="section__title text-uppercase">Who we are?</h3>
                      <p class="section__paragraph text-center wow zoomIn" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="700ms">
                      Tax Manager is a company active in the administrative service and tax consultancy. We mainly prepare tax returns for natural persons (individuals) and legal entities, as well as other tasks related to investment and business management. Our experience and knowledge of Swiss tax laws make us one of the best expertise on the Swiss market, our study is often solicited by several Swiss schools and universities in order to share with them our knowledge and experience in taxation; we have already contributed to the training of several executives who currently hold very important positions in various companies.
                      </p>
				</div>
        <div class="section__buttons">
          <a href="#" class="section__buttons__white">Learn More</a>
          <a href="#" class="section__buttons__gradient" style="">Watch Video</a>
        </div>
		
		
			</div>
</section>
  <!-- BEGIN We care about ourr clients -->
		<section class="section">
			<div class="container">
				<div class="text-center wow slideInUp " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="600ms">
                      <h3 class="section__title text-uppercase">we care about our clients</h3>
                      <p class="section__paragraph text-center wow zoomIn" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="700ms">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id magna laoreet dictum vitae tincidunt sit risus libero semper. 
                      </p>
				</div>
		

        <div class="row">
          <div class="col-sm">
            <div class="section__article">
              <h2>
              Taxation According
To The Family Situation
              </h2>
                <p>
                  The taxation of natural persons (individuals) depends on their family situation and not on the exercise of a gainful activity, whether you are employed or independent, your taxation will depend on several elements outlined above are considered to determine your family situation;
                  <br />
                  <br />
                  The income and wealth of spouses or registered partners are added together regardless of the plan mentioned. Only one tax return is considered in the following cases:
                </p>
                <a class="section__link" href="#">
                  Read more
                <i class="fa fa-angle-double-right"></i>
                </a>
              </div>
          </div>
          <div class="col-sm">
            <div class="section__article">
              <h2>
              Sovereignty And Tax
Competition Between Cantons
                </h2>
                <p>
                Before trying to explain the competition on taxing legal entities, we are first going to explain the functioning of Swiss taxation. The Swiss political system is that of a federal state which has established the separation of powers and has constituted three authorities, the federal, cantonal and communal authorities.
                  <br />
                  <br />
                  The Swiss tax system is characterized by the sovereignty of the cantons which define according to their needs the tax rate for natural persons (individuals) and legal entities, this evidently create a certain competition between cantons that try to attract more and more companies by their tax system, which increase production, consumption and reduce unemployment in their turn.
                </p>
                <a class="section__link" href="#">
                  Read more
                <i class="fa fa-angle-double-right"></i>
                </a>
                </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="section__article">
              <h2>
              Spontaneous Denunciation
                  </h2>
                <p>
                Taxpayers (natural persons (individuals) and legal entities) who have not declared all their income or assets in Switzerland and abroad may voluntarily regularize their situation with the tax authorities making a spontaneous denunciation that is not punishable by law, provided that the tax authority has not yet become aware of its income and assets, the tax authority bills the unpaid tax difference with default interest.
                  <br />
                  <br />
                  For spontaneous denunciation, the taxpayer must cooperate fully with the tax authorities and provide all necessary documents to determine the taxable items for the last ten years.
                </p>
                <a class="section__link" href="#">
                  Read more
                <i class="fa fa-angle-double-right"></i>
                </a>
              </div>
          </div>
          <div class="col-sm">
            <div class="section__article">
                <h2>
                The Recovery Of The Withholding Tax
                </h2>
                <p>
                The withholding tax is a 35% tax levied on the income of movable assets such as: dividends, interest on capital, profit shares, lottery winnings ... to pay the federal government contribution. This tax is not definitive and may be recovered in certain cases:, we will try to explain to you briefly the operation of this imposition and in which it could be recovered;
                  <br />
                  <br />
                  <ul>
                    <li>
                      For Swiss residents (natural persons)
                    </li>
                    <li>
                    For legal entities in Switzerland LLC, PLC....
                    </li>
                    <li>
                    For natural and legal persons residing or having their registered offices abroad
                    </li>
                </p>
                <a class="section__link" href="#">
                  Read more
                <i class="fa fa-angle-double-right"></i>
                </a>
                </div>
          </div>
        </div>
		
			</div>
</section>
  <!-- END We care about ourr clients -->
  <!-- BEGIN Reduce our tax -->

		<section class="section">
			<div class="container">
				<div class="text-center wow slideInUp " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="600ms">
                      <h3 class="section__title text-uppercase">Reduce your tax</h3>
                      <p class="section__paragraph text-center wow zoomIn" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="700ms">
                      It is obvious that each taxpayer considers that he pays more tax than necessary, nevertheless the Swiss tax system grants some quite legal choices allowing to reduce the tax burden, we will therefore try to give you some solutions which can be more or less adapted to your situation;
                      </p>
				</div>
        

          <div class="row section__row">
            <div class="col-md">
              <img src="../images/blog/second-pillar.png" alt="Contribution 
  to the 2nd pillar"/>
              <h2>
              Contribution 
  to the 2nd pillar
              </h2>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Potenti sed consequat viverra semper.
              </p>
              <a class="section__link" href="#">
                    Read more
                <i class="fa fa-angle-double-right"></i>
              </a>

            </div>
            <div class="col-md">
              <img src="../images/blog/second-pillar.png" alt="Contribution 
  to the 2nd pillar"/>
              <h2>
              Contribution 
  to the 2nd pillar
              </h2>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Potenti sed consequat viverra semper.
              </p>
              <a class="section__link" href="#">
                    Read more
                <i class="fa fa-angle-double-right"></i>
              </a>

            </div>
            <div class="col-md">
              <img src="../images/blog/second-pillar.png" alt="Contribution 
  to the 2nd pillar"/>
              <h2>
              Contribution 
  to the 2nd pillar
              </h2>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Potenti sed consequat viverra semper.
              </p>
              <a class="section__link" href="#">
                    Read more
                <i class="fa fa-angle-double-right"></i>
              </a>

            </div>

          </div>
          <div class="row section__row">
            <div class="col-md">
              <img src="../images/blog/second-pillar.png" alt="Contribution 
  to the 2nd pillar"/>
              <h2>
              Contribution 
  to the 2nd pillar
              </h2>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Potenti sed consequat viverra semper.
              </p>
              <a class="section__link" href="#">
                    Read more
                <i class="fa fa-angle-double-right"></i>
              </a>

            </div>
            <div class="col-md">
              <img src="../images/blog/second-pillar.png" alt="Contribution 
  to the 2nd pillar"/>
              <h2>
              Contribution 
  to the 2nd pillar
              </h2>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Potenti sed consequat viverra semper.
              </p>
              <a class="section__link" href="#">
                    Read more
                <i class="fa fa-angle-double-right"></i>
              </a>

            </div>
            <div class="col-md">
              <img src="../images/blog/second-pillar.png" alt="Contribution 
  to the 2nd pillar"/>
              <h2>
              Contribution 
  to the 2nd pillar
              </h2>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Potenti sed consequat viverra semper.
              </p>
              <a class="section__link" href="#">
                    Read more
                <i class="fa fa-angle-double-right"></i>
              </a>

            </div>

          </div>
        </div>
    </section>
    <!-- END Reduce our tax -->


  


		<!-- <div class="readuce-taxes">
			<div class="container">
				<div class=" readuce-taxes-title text-center wow slideInUp " data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="600ms">
                      <h3 class="redcue-title text-uppercase">Who we are?</h3>
                      <p class="readuce-taxes-pragh text-center wow zoomIn" data-wow-offset="300"  data-wow-iteration="1" data-wow-duration="700ms">
                      Tax Manager is a company active in the administrative service and tax consultancy. We mainly prepare tax returns for natural persons (individuals) and legal entities, as well as other tasks related to investment and business management. Our experience and knowledge of Swiss tax laws make us one of the best expertise on the Swiss market, our study is often solicited by several Swiss schools and universities in order to share with them our knowledge and experience in taxation; we have already contributed to the training of several executives who currently hold very important positions in various companies.
                      </p>
				</div>
		
		
			</div>
		</div> -->
		<!-- End readuce taxes  -->
		<!--// Main Content \\-->

      <?php include "includes/footer.php" ?>