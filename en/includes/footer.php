         <!--// Footer \\-->
         <footer id="tax-footer" class="tax-footer-one">
            <!--// Footer Widget \\-->

            <!-- Start main Footer -->
            <div class="our-footer" style="padding-bottom: 34px;">
                <div class="container">
                    <span id="uptoTop" style="text-align: center; display:block;width: 50px;;  margin: 10px auto 10px; cursor:pointer"> <i class="fa fa-chevron-circle-up" style="color: #E0C56E; font-size:35px" ></i></span>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <div class="our-footer-info" style=" padding-bottom: 34px;">
							  <a href="https://www.taxmanager.ch/en/" class="footer-logo"><img src="../images/logo-white.png" alt="Logo-Fiduciary-Tax-Manager"></a>
                            </div>
                            <ul class="social-network">
                                    <li><a href="https://www.facebook.com/taxmanager.ch" target="_blank" class="fa fa-facebook"></a></li>
                                    <li><a href="https://www.youtube.com/channel/UC6SDKaE3zQOAiVO5k0Qv_3g" target="_blank" class="fa fa-youtube"></a></li>
                                    <li><a href="https://www.linkedin.com/company/fiduciaire-tax-manager/" target="_blank" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="our-footer-info">
                                    <h5 class="our-footer-title">Quick Links</h5> 
                                    <div class="our-footer-likns">
                                        <ul>
										  <li><i class="fa fa-chevron-right"></i> <a href="https://www.taxmanager.ch/en/"> Home</a></i>
                                            <li><i class="fa fa-chevron-right"></i> <a href="who-we-are.php" target="_blank" >Who we are </a></i>
                                            <li><i class="fa fa-chevron-right"></i> <a href="services.php"  target="_blank"> Our services</a></i>
                                            <li><i class="fa fa-chevron-right"></i> <a href="how-to-reduce-your-taxes.php" target="_blank" > Reduce your Taxes</a></i>
                                            <li><i class="fa fa-chevron-right"></i> <a href="who-are-our-services-for.php"  target="_blank">Who are our services for?</a></i>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="our-footer-info">
                                    <h5 class="our-footer-title">Contact us </h5> 
                                    <div class="our-footer-contact">
                                        <ul>
                                         <li><i class="fa fa-phone  contact"></i> <a href="tel:+41 21 552 02 22">+41 21 552 02 22</a></li>
                                         <li><i class="fa fa-envelope   contact"></i> <a href="mailto:info@taxmanager.ch">info@taxmanager.ch</a></li>
                                         <li><i class="fa fa-globe  contact"></i> <span>Avenue de Tivoli 25 <span style="margin: 0 28px; display:block">1007 Lausanne</span>   </spanr></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="our-footer-info">
                                    <h5 class="our-footer-title">Newsletter </h5> 
                                     <span class="our-footer-subtitle">Fiduciary Tax Manager</span>
                                    <div class="our-footer-contact">
                                    <form action="../model/frenchsubmit.php" id="n_letter_1" method="post" class="newsletter-form">
                                        <input type="text" class="form-control" name="n_email" id="n_email" placeholder="Type your email">
                                        <input type="submit" value="Submit">
                                        <span id="sms"></span>
                                    </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- End main Footer -->
            <div class="tax-copyright" style=" padding: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p><i class="fa fa-copyright"></i> 2020, All Right Reserved - Developed by <a href="https://inomad.ch/" target="_blank">Inomad</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!--// Footer \\-->

    <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->


    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="../script/bootstrap.min.js"></script>
    <script type="text/javascript" src="../script/slick.slider.min.js"></script>
    <!-- <script type="text/javascript" src="../script/functions.js"></script> -->
    <script src="../script/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../script/main.js"></script>
	<script>
		//***************************
    // BannerOne Functions
    //***************************
    jQuery(".tax-banner-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      infinite: true,
      dots: false,
      arrows: false,
      // prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
      // nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
      fade: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
          },
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
	</script>
  </body>
</html>